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
        'hash', 'user', 'created_at'
    ];
}
