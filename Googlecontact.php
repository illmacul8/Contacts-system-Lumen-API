<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Googlecontact extends Model
{
    protected $table = 'googlecontact';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'house_address'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}