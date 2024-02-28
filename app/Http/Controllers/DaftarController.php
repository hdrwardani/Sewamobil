<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mstuser;
use Illuminate\View\View;

class DaftarController extends Controller
{
    //
    public function index():view{
        $mstuser = Mstuser::all();
        return view ('daftar')->with('mstuser',$mstuser);
    }

    public function prosdaftar (Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nama' => 'required|string|max:100',
            'alamat' => 'required|string|max:500',
            'notelp' => 'required|string|max:20',
            'nosim' => 'required|string|max:20',
            'email' => 'required|string|email:dns|unique:users',
            'password' => 'required|string|max:8',
        ]);

        // if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);
        $data['fnama'] = $request->nama;
        $data['falamat'] = $request->alamat;
        $data['fnotelp'] = $request->notelp;
        $data['fnosim'] = $request->nosim;
        $data['femail'] = $request->email;
        $data['fpassword'] = $request->password;
        
        // mstuser::create($data);
        return redirect('masuk')->with('flash_message', 'Student Addedd!');
    }
}
