<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class district extends Model
{
    protected $fillable = [
        'StCode',
        'DistrictName',
        'State_Name'   
      ];
}
