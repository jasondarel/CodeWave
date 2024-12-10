<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lesson extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id', 'name', 'course_id'];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function student_lessons()
    {
        return $this->belongsToMany(User::class, 'student_lessons')->withPivot('completed_date')->withTimestamps();
    }
}
