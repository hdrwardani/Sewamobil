<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mstmobil;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class MobilController extends Controller
{
    //
    public function index():view{        
        $mstmobil = $results = DB::select("select fmerek, fmodel, fnoplat, ftarif,fidmobil, CASE WHEN (SELECT fidsewa from trxsewa where sysdate() <= trxsewa.ftglakhir and sysdate() >= trxsewa.ftglawal and trxsewa.fnoplat = mstmobil.fnoplat) is not null then 'Tidak Tersedia' ELSE 'Tersedia' END as fstatus from mstmobil")
        ;
        return view ('master/mobil')->with('mstmobil',$mstmobil);
    }
    public function tambah():view{
        return view ('master/addmobil');
    }
    
    public function prosmobil (Request $request)
    {
        // dd($request->all());
        $request->validate([
            'model' => 'required|string|max:50',
            'merek' => 'required|string|max:50',
            'noplat' => 'required|string|max:7',
            'tarif' => 'required|string|max:10',
        ]);

        // if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);
        $data['fmodel'] = $request->model;
        $data['fmerek'] = $request->merek;
        $data['fnoplat'] = $request->noplat;
        $data['ftarif'] = $request->tarif;
        
        mstmobil::create($data);
        return redirect('master/mobil')->with('flash_message', 'Berhasil Ditambah!');
    }
}
