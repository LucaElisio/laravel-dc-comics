<?php

namespace Database\Seeders;

use App\Models\Dccomic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = config('comics');
        // dd($data);
        foreach ($data as $item) {
            $newComic = new Dccomic();
            $newComic->title = $item["title"];
            $newComic->description = $item["description"];
            $newComic->thumb = $item["thumb"];
            $newComic->price = $item["price"];
            $newComic->series = $item["series"];
            $newComic->type = $item["type"];
            $newComic->save();
        }
    }
}
