<?php

namespace Multilang;

use Illuminate\Database\Eloquent\Model;

class Languages extends Model
{
    protected $fillable = [
        'code', 'name',
    ];

    protected $guarded = [
        'id',
    ];

    public $timestamps = false;

    public function user() {
        return $this->hasMany('Multilang\User', 'language_id');
    }

    public static function hasLang($lang) {
        return self::where(['code' => $lang])->first();
    }
}
