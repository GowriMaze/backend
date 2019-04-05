<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Bank_detail extends Model
{
    protected $fillable = [
        'Branch_name',
        'Bank_name',
        'Account_number',
        'Ifsc_code',
        'Bank_code',
        'Bank_branch_name',
        'Created_by',
        'Updated_by',
    ];
}
