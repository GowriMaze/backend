<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Collection_Area extends Model
{
    protected $fillable = [
        'Branch',
        'Collection_area',
        'Area_pincode',       
        'Created_by',
        'Updated_by'
      ];
}
