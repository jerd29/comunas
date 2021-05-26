<?php

use Illuminate\Database\Seeder;
use App\Integrantes;
use App\ConsejoComunal;
use App\jefefamilia;


class IntegrantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jefefamilias = jefefamilia::all();

        $jefefamilias->each(function ($jefefamilia){

        $faker = Faker\Factory::create();

         factory(Integrantes::class, 5)->create([
             'fk_jefefamilia' => $jefefamilia->id,    
            //  'fk_jefefamilia' => $faker->randomElement(App\jefefamilia::pluck('id', 'id')->toArray())

         ]);

        });
    }
}
