<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($nama="", $npm="", $kelas=""){
        return view('profile',  [
                'nama' => $nama,
                'npm' => $npm,
                'kelas' => $kelas
            ]);
    }
}
