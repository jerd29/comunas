<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jefefamilia extends Model
{
    protected $table = "jefes_familia";

    // public function consejocomunal()
    // {
    //     return $this->belongsToMany('App\ConsejoComunal', 'id');
    // }

    public function consejocomunal()
    {
        // return $this->belongsTo(User::class);
        return $this->belongsToMany('App\ConsejoComunal', 'jefesintegrantes')
        ->withPivot('fk_jefefamilia');
        
    }

    public function integrantes()
    {
        // return $this->belongsTo(User::class);
        return $this->belongsToMany('App\Integrantes', 'jefesintegrantes')
        ->withPivot('fk_id_org_cc');
        
    }

}
