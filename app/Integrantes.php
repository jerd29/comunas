<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Integrantes extends Model
{
    protected $table = "integrantes";


    // public function jefefamilia()
    // {
    //     return $this->belongsTo('App\jefefamilia', 'id');

    // }

    public function consejocomunal()
    {
        // return $this->belongsTo(User::class);
        return $this->belongsToMany('App\ConsejoComunal', 'jefesintegrantes')
        ->withPivot('fk_id_org_cc');
        
    }

    public function jefefamilia()
    {
        // return $this->belongsTo(User::class);
        return $this->belongsToMany('App\JefeFamilia', 'jefesintegrantes')
        ->withPivot('fk_jefefamilia');
        
    }
}
