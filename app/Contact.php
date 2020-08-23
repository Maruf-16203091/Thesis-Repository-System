<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $table='contacts';
    public $primaryKey='id';

    protected $fillable = [
        'name',   'email', 'phone', 'message',
    ];
}
