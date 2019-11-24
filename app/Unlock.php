<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unlock extends Model
{
    protected $table = 'unlocks';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','hash_id','user', 'created_at',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'hash_id' => 'string'
    ];
}
