<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConsejoComunal extends Model
{
    // $consejocomunal->user
    // ConsejoComunal N - 1 User

    public function user()
    {
        // return $this->belongsTo(User::class);
        return $this->belongsTo('App\User', 'created_by');

    }

    public function cargafamiliar()
    {
        // return $this->belongsTo(User::class);
        return $this->belongsToMany('App\Integrantes', 'jefesintegrantes')
        ->withPivot('fk_cargafamiliar');
        
    }

    public function jefefamilia()
    {
        // return $this->belongsTo(User::class);
        return $this->belongsToMany('App\Jefefamilia', 'jefesintegrantes')
        ->withPivot('fk_jefefamilia');
        
    }


    // public function tasks(){
    //     return $this->belongsToMany('\App\Task','menu_task_user')
    //         ->withPivot('menu_id','status');
    // }
    // public function menu(){
    //     return $this->belongsToMany('\App\Menu','menu_task_user')
    //         ->withPivot('task_id','status'); 
    // }
}
