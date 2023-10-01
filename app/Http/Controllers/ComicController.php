<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    //legge tutti i record dalla tabella comics
    public function index() {
        $comics = Comic::all();

        return view('home', [
            'comics' => $comics
        ]);
    }

    //legge un solo record della tabella cercando per id
    public function show($id) {
        $comic = Comic::find($id);

        return view('comic', [
            'comic' => $comic
        ]);
    }
}
