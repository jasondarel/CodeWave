<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $table = 'course';
    public function enrollments()
    {
        return $this->hasMany(Enrollment::class, 'course_id', 'id');
    }

    public function students(){
        return $this->hasManyThrough(User::class, Enrollment::class, 
        'course_id', 
        'id',
        'id',
            'user_id');
            
    }

 
}
