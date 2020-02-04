<?php

use Illuminate\Database\Seeder;
use App\Barang;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     * 
     */
    public function run()
    {
        //$this->call(PostsTableSeeder::class);
        //$this->call(PostPenggajihan::class);
        //$this->call(ArtikelSeeder::class);
        factory(Barang::class, 100)->create();
    }


}
