<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'category_id', 'language_id', 'thumbnail'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function videos()
    {
        return $this->hasMany(Video::class);
    }
}
