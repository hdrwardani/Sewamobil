<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mstuser;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Show the form to create a new blog post.
     */
    public function prosmasuk (Request $request)
    {
        // dd($request->all());
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $data = [
            'femail' => $request->email,
            'fpassword' => $request->password,
        ];

        if(Auth::attempt($data)){
            return redirect()->route('beranda');
        }else{
            return redirect()->route('masuk')->with('failed','Email atau Password Salah');
        };
    }
}