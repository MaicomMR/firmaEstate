<?php

use Illuminate\Database\Seeder;

class Category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Equipamento de TI',
            ],[
                'name' => 'Infraestrutura',
            ]
        ]);
    }
}
