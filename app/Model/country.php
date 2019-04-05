<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    protected $fillable = [
        'sortname',
        'name',
        'phonecode', 
        'status',      
      ];
}
