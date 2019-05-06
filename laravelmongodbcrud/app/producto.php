<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class producto extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'producto';

    protected $filliable = [
    	'id','nombre','precio','stock'
    ];
}
