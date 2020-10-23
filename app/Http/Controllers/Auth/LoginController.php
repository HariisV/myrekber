<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function proses(Request $request)
    {
        $validasi = $request->validate([
            'email' => 'Required',
            'password' => 'Required'
        ]);
        if (Auth()->attempt($validasi)) {
            return 'Ada';
            return redirect()->route('rekber');
        }else{
            return redirect()->back();
        }
    }
}
