<?php

use Illuminate\Database\Seeder;

use App\Comuna_ConsejoComunal;
use App\ConsejoComunal;
use App\Comuna;



class Comuna_ConsejoComunalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {

        // $consejo_comunals = ConsejoComunal::all();

        // $consejo_comunals->each(function ($consejocomunal){

        //  factory(Comuna_ConsejoComunal::class, 1)->create([
        //      'fk_id_org_cc' => $consejocomunal->id
        //  ]);

        // });
        

        $comunas = Comuna::all();

        $comunas->each(function ($comuna){

        $faker = Faker\Factory::create();

         factory(Comuna_ConsejoComunal::class, 10)->create([
             'fk_id_org_comuna' => $comuna->id,
             
             'fk_id_org_cc' => $faker->randomElement(App\ConsejoComunal::pluck('id', 'id')->toArray())
         ]);

        });
    }
}
