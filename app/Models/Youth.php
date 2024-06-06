<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Youth extends Model
{
    use HasFactory;

    protected $fillable = [
        'purok',
        'firstname',
        'lastname',
        'middlename',
        'age',
        'birthday',
        'sex',
        'youth_classification',
        'youth_age_group',
        'email',
        'contact_number',
        'address',
        'highest_educational_attainment',
        'work_status',
        'registered_voter',
        'last_election_voter',
        'attended_kk_assembly',
        'region',
        'province',
        'city',
        'barangay',
        'created_at',
        'updated_at',
    ];
}
