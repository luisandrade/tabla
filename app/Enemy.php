<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enemy extends Model
{
    // le decimos al modelo ue representa la tabla nombrada 
    // protected significa que solo lo puede usar el namespace App
    // $table debe ser igual que en la databse
    protected $table = 'enemies';
}
