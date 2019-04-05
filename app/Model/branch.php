<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class branch extends Model
{
    protected $fillable = [
        'head_office',
        'Branch_Name',
        'Start_Date',
        'Age',
        'Branch_Code',
        'State',
        'District',
        'City',
        'Pincode',
        'branch_wise_penalty',
        'Bonus',
        'Email_id',
        'Phone_no',
        'Address',
        'prize_subscriber_penalty',
        'non_prize_subscriber_penalty',
        'Bonus_days',
        'penalty_days',
        'Busin_agent_target',
        'br_fd_total_months',
        'remarks',
        'agent_incentive_percent',
        'agent_commis_percent',
        'Created_by',
        'Updated_by'        
      ];
}
