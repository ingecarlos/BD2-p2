<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class usuario extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'usuario';

    protected $filliable = [
    	'id','nombres','apellidos','edad','nickname','password'
    ];
}
