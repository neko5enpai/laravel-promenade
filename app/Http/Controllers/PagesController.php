<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        $title = 'Les Promenades';
        return view('pages.promenade', compact('title'));
    }

    public function creer() {
        $title = 'Créer une promenade';
        return view('pages.creer', compact('title'));
    }

    public function editer() {
        $title = 'Editer une promenade';
        return view('pages.editer', compact('title'));
    }
}
