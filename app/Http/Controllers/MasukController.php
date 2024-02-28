<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MasukController extends Controller
{
    //
    public function index():view{
        return view ('masuk');
    }

    
    public function proslogin (Request $request)
    {
        // dd($request->all());
        $request->validate([
            'email' => 'required|string|email:dns|unique:users',
            'password' => 'required|string|max:8',
        ]);

        // if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);
        $data['femail'] = $request->email;
        $data['fpassword'] = $request->password;
        
        // mstuser::create($data);
        // return redirect('masuk')->with('flash_message', 'Student Addedd!');
    }
}
