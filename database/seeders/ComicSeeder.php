<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics = config('comics');

        Comic::truncate();

        foreach ($comics as $comicsElement ) {
            $comic = new Comic();
            $comic->thumb = $comicsElement['thumb'];
            $comic->title = $comicsElement['title'];
            $comic->type = $comicsElement['type'];
            $comic->writers = json_encode($comicsElement['writers']);
            $comic->description = $comicsElement['description'];
            $comic->save();
        }
    }
}
