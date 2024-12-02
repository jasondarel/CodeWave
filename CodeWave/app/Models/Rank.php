<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rank extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'minimum_points'];

    public function userPerks()
    {
        return $this->hasMany(UserPerk::class);
    }
}
