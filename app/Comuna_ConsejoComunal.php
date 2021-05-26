<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comuna_ConsejoComunal extends Model
{
    //
    protected $table = "comuna_consejocomunals";

        public function consejocomunal()
    {
        // return $this->belongsTo(User::class);
        return $this->belongsToMany('App\ConsejoComunal', 'fk_id_org_cc');
    }
}
