<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function article($id = 999) {
        return 'Halaman dengan artikel id : ' . $id;
    }
}
