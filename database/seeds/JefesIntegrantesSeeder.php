<?php

use Illuminate\Database\Seeder;
use App\ConsejoComunal;
use App\jefefamilia;
use App\Integrantes;


class JefesIntegrantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $consejoscomunals = factory(ConsejoComunal::class, 10)->create()->each(function($consejoscomunal) {
            $consejoscomunal->jefefamilia()->attach(factory(jefefamilia::class)->create()->id);

        // $users = factory(User::class, 10)->create()->each(function($user) {
        //     $user->posts()->attach(factory(Post::class)->create()->id);
      });

        //
    }
}
