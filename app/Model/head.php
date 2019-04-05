<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class head extends Model
{
    protected $fillable = [
    'HeadName',
    'head_code',
    'Mobile_no',
    'Phone_no',
    'Email_id',
    'Address',
    'State',
    'Remarks'

   ];
}
