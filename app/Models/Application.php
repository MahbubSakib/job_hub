<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $table = 'applications';

    protected $fillable = [
        'id',
        'cv',
        'job_id',
        'user_id',
        'job_title',
        'job_region',
        'job_type',
        'job_photo',
        'company'
    ];
}
