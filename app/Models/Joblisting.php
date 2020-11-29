<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joblisting extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'company_name' ,
        'description',
        'requirements',
        'location',
        'apply_link',
        'start_date',
        'apply_by',
        'duration',
        'company_logo',
        'stipend'
    ];
}
