<?php

use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $elencoComics = config ('comic');
        foreach($elencoComics as $comic){
            $newComic = new Comic();

            $newComic->$comic['title'];
            $newComic->$comic['description'];
            $newComic->$comic['price'];
            $newComic->$comic['series'];
            $newComic->$comic['sale_date'];
            $newComic->$comic['type'];
            $newComic->save();
        }
    }
}
