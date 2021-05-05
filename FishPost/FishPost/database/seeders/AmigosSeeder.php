<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AmigosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('amigos')->insert([
              'name' => 'Javier',
              'email' => 'javier@gmail.com',
              'amigo_id' => (1)
          ]);
      DB::table('amigos')->insert([
              'name' => 'Daniel',
              'email' => 'daniel@gmail.com',
              'amigo_id' => (2)
          ]);
    }
}
