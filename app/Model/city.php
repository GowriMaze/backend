<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    protected $fillable = [
        'CityName',
        'PinCode',
        'DistId',
        'Createdby',
        'Modifiedby',
        'Status'
    
      ];
}
