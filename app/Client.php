<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $table ="clients";
    //
    /*
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','document','email','direction',
    ];

    public function post()
    {
        return $this->belongsTo('App\User');
    }
    

}
