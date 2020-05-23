<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $table = 'registrations';
    protected $primaryKey = 'id';
    protected $timestamp = true;

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
