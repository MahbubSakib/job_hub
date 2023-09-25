<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobSave extends Model
{
    use HasFactory;

    protected $table = 'job_saves';

    protected $fillable = [
        'id',
        'job_id',
        'user_id',
        'job_title',
        'job_region',
        'job_type',
        'job_photo',
        'company'
    ];
}
