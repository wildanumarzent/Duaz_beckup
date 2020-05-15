<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disk extends Model
{
    ////protected $table='disks';

    protected $fillable = [
        'name', 'host', 'username','username','password','port','path'
    ];
}
