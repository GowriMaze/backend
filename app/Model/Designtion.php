<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Designtion extends Model
{
    protected $fillable = [
        'Designation_name',
        'Code',
        'Remarks', 
        'Created_by',     
        'Updated_by' 
      ];
}
