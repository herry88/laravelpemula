<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductControler extends Controller
{

    public function index()
    {
        return '<h1>Menampilkan teks di controller</h1>';
    }
}
