<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'Role_Name',
        'Role_code',
        'Remarks',       
        'Created_by',      
        'Updated_by'   

      ];
}
