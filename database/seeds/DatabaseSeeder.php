<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ConsejosComunalesTableSeeder::class);
        $this->call(JefesFamiliaSeeder::class);
        $this->call(IntegrantesSeeder::class);
        $this->call(JefesIntegrantesSeeder::class);
        // $this->call(ComunasSeeder::class);
        // $this->call(Comuna_ConsejoComunalSeeder::class);

    }
}
