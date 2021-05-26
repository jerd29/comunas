<?php

use Illuminate\Database\Seeder;
use App\ConsejoComunal;
use App\jefefamilia;

class JefesFamiliaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $consejocomunales = ConsejoComunal::all();

        // $consejocomunales->each(function ($consejocomunal){

        // $faker = Faker\Factory::create();

        //  factory(jefefamilia::class, 5)->create([
        //      'fk_id_org_cc' => $consejocomunal->id,    

        //  ]);

        // });

        factory(jefefamilia::class, 10)->create();

    }
}
