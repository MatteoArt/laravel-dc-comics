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

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        $data = $request->all();

        $artists = explode(',',$data['artists']);
        $writers = explode(',',$data['writers']);

        $newComic = new Comic();

        $newComic->title = $data['title'];
        $newComic->description = $data['description'];
        $newComic->path = $data['path'];
        $newComic->price = floatval($data['price']);
        $newComic->series = $data['series'];
        $newComic->sale_date = $data['sale_date'];
        $newComic->type = $data["type"];
        $newComic->artists = json_encode($artists);
        $newComic->writers = json_encode($writers);

        $newComic->save();

        return redirect()->route('home');
    }
}
