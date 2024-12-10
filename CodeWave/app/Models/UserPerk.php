<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserPerk extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'rank_id', 'points'];

    private $minimum_points_array = ["bronze" => ["points" => 0, "id" => 1], "silver" =>  ["points" => 200, "id" => 2], "gold" =>  ["points" => 500, "id" => 3]];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function rank()
    {
        return $this->belongsTo(Rank::class);
    }

    protected static function booted()
    {
        

        static::updated(function ($user_perk) {
          
     
            $curr_rank_id = $user_perk->rank_id;

            array_walk($this->minimum_points_array, function ($stat, $rank) use($user_perk, &$curr_rank_id) {
              
                if($user_perk->points > $stat["points"]){
                    $curr_rank_id = $stat["id"];
                }
            });

            $user_perk->rank_id = $curr_rank_id;

            $user_perk->save();


        });
    }
}
