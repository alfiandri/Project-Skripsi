<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RLB extends Model
{
    //disable timestamps
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'b0', 'b1', 'b2', 'b3'
    ];
}
