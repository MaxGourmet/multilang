<?php

namespace Multilang;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';

    protected $fillable = [
        'name', 'email', 'password', 'username', 'language_id',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public $timestamps = false;

    public function languages() {
        return $this->belongsTo('Multilang\Languages', 'id', 'language_id');
    }
}
