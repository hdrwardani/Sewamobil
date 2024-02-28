<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\trxsewa;
use App\Models\mstmobil;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class SewaController extends Controller
{
    ////
    public function index(Request $request):view{
        $trxsewa = $results = DB::table('trxsewa')
        ->join('mstmobil', 'trxsewa.fnoplat', '=', 'mstmobil.fnoplat')
        ->select('trxsewa.fidsewa as fidsewa','trxsewa.fnoplat as fnoplat','trxsewa.created_at as created_at','trxsewa.ftglawal as ftglawal','trxsewa.ftglakhir as ftglakhir','mstmobil.ftarif AS ftarif',DB::raw("concat(DATEDIFF(trxsewa.ftglakhir, trxsewa.ftglawal),' Hari') AS flama"),DB::raw("DATEDIFF(trxsewa.ftglakhir, trxsewa.ftglawal)*mstmobil.ftarif AS ftotal"), DB::raw("CONCAT(mstmobil.fmerek, ' ', mstmobil.fmodel) AS fmobil"))
        ->get();
        // trxsewa::sewa();
        return view ('sewa/list')->with('trxsewa',$trxsewa);
        // dd($trxsewa);
    }
    public function tambah():view{
        $mstmobil = $results = DB::select("select fmerek, fmodel, fnoplat, ftarif,fidmobil from mstmobil 
        where mstmobil.fnoplat not in (select trxsewa.fnoplat from trxsewa where sysdate() <= trxsewa.ftglakhir and sysdate() >= trxsewa.ftglawal)");
        return view ('sewa/input')->with('mstmobil',$mstmobil);;
    }
    
    public function prossewa (Request $request)
    {
        // dd($request->all());
        // $request->validate([
        //     'ftglawal' => 'required|string|max:50',
        //     'ftglakhir' => 'required|string|max:50',
        //     'fnoplat' => 'required|string|max:7',
        //     'fiduser' => 'required|string|max:10',
        // ]);

        // if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);
        $data['ftglawal'] = $request->tglawal;
        $data['ftglakhir'] = $request->tglakhir;
        $data['fnoplat'] = $request->mobil;
        $data['fiduser'] = $request->user;
        
        trxsewa::create($data);
        return redirect('sewa')->with('flash_message', 'Berhasil Ditambah!');
    }
}
