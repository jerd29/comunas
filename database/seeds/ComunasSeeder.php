<?php

use Illuminate\Database\Seeder;
use App\Comuna;


class ComunasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comuna::create([
            'name' => 'Martin Mosqueda',
            'situr' => '01-01-0019'
        ]);

        factory(Comuna::class, 10)->create();
    }
}
