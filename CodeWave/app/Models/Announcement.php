<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    // Specify the table name if it's different from the default
    protected $table = 'announcements';

    // Specify the columns that are mass assignable
    protected $fillable = ['title', 'content'];
}
