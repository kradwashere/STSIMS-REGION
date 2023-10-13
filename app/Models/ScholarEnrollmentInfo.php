<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScholarEnrollmentInfo extends Model
{
    use HasFactory;

    protected $fillable = ['is_grades_completed','is_benefits_released','is_checked','enrollment_id'];

    public function enrollment()
    {
        return $this->belongsTo('App\Models\ScholarEnrollment', 'enrollment_id', 'id');
    }

    public function getUpdatedAtAttribute($value)
    {
        return date('M d, Y g:i a', strtotime($value));
    }

    public function getCreatedAtAttribute($value)
    {
        return date('M d, Y g:i a', strtotime($value));
    }
}
