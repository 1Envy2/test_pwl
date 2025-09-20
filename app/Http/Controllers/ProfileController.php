<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function kelasc($nama = '', $NPM = '', $kelas = ''){
        $data =[
            'nama' => $nama,
            'npm' => $NPM,  
            'kelas' => $kelas,
        ];
        return view('kelas_c', $data);
    }
}
