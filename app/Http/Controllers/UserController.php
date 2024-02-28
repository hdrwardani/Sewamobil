<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mstuser;
use Illuminate\View\View;

class UserController extends Controller
{
    //
    public function index():view{
        $mstuser = Mstuser::all();
        return view ('master/pengguna')->with('mstuser',$mstuser);
    }
}
