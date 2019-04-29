<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('pages.promenade');
    }

    public function creer() {
        return view('pages.creer');
    }

    public function editer() {
        return view('pages.editer');
    }
}
