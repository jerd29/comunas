<?php

use Illuminate\Database\Seeder;

use App\ConsejoComunal;
use App\User;

class ConsejosComunalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $inputs[] = ['name'=> 'CUADRA DE BOLIVAR',
        'situr' => '01-01-20-001-0010',
        'integrantes' => '0',
        'familias' => '0',
        'created_by' => '1'
        ];
        $inputs[] = ['name'=> 'GENTE TRABAJANDO POR SU COMUNIDAD',
        'situr' => 'CC-URB-2014-05-00086',
        'integrantes' => '0',
        'familias' => '0',
        'created_by' => '1'
        ];
        $inputs[] = ['name'=> 'LIDERES DE QUINTA CRESPO',
        'situr' => '01-01-20-001-0007',
        'integrantes' => '0',
        'familias' => '0',
        'created_by' => '1'
        ];
        $inputs[] = ['name'=> 'SUR 4',
        'situr' => '01-01-20-001-0003',
        'integrantes' => '0',
        'familias' => '0',
        'created_by' => '1'
        ];

        App\ConsejoComunal::insert($inputs);
       

        // $users = User::all();

        // $users->each(function ($user){

        //  factory(ConsejoComunal::class, 10)->create([
        //      'created_by' => $user->id
        //  ]);

        // });
    }
}
