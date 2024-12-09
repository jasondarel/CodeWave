<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name', 
        'email', 
        'password', 
        'DOB', 
        'role'
    ];    

    protected $attributes = [
        'role' => 'User',
    ];    

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'DOB' => 'date', // Cast DOB ke tipe date
        ];
    }

    
    // Relasi dengan Enrollment
    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }

    // Relasi dengan UserPerk
    public function userPerks()
    {
        return $this->hasOne(UserPerk::class);
    }

    // Relasi dengan Lesson melalui student_lessons
    public function lessons()
    {
        return $this->belongsToMany(Lesson::class, 'student_lessons')
            ->withPivot('completed_date') // Pivot tambahan
            ->withTimestamps(); // Timestamps pada relasi
    }
}
