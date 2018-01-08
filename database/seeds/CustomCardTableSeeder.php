<?php

use Illuminate\Database\Seeder;

class CustomCardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $card = new \App\CustomCard([
          'name'=> 'Test',
          'manacost'=> 'R B',
          'supertype'=> 'Creature',
          'type'=> 'Lizard',
          'power'=> '1',
          'toughness'=> '1',
          'abilities'=> 'haste',
          'flavortext'=> ''
        ]);
        $card->save();
    }
}
