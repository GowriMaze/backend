<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class state extends Model
{
    protected $fillable = [
        'CountryId',
        'StateName',
        'Createdby',       
      ];
}
