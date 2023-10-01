<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dati = config('comics');

        foreach ($dati as $dato) {
            $comic = new Comic();
            $comic->title = $dato['title'];
            $comic->description = $dato['description'];
            $comic->path = $dato['thumb'];
            $comic->price = str_replace('$','',$dato['price']);
            $comic->series = $dato['series'];
            $comic->sale_date = $dato['sale_date'];
            $comic->type = $dato['type'];
            $comic->artists = json_encode($dato['artists']);
            $comic->writers = json_encode($dato['writers']);
            $comic->save();
        }
    }
}
