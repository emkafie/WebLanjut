<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about($nama, $nim) {
        return 'Nama : ' . $nama . ' NIM : ' . $nim;
    }
}
