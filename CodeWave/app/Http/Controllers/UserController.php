<?php

namespace App\Http\Controllers;

use App\Models\UserPerk;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function getUserPerks(){
        $user = Auth::user();
        return UserPerk::where("user_id", $user->id);
    }

    public function getUserPoints(){
      
        return  $this->getUserPerks()->get()->points;
    }

    public function updateUserPoints($points) {
        $user_perk = $this->getUserPerks();
        $user_perk->update(["points"], $points);
    }

    public function getUserRank(){
        return $this->getUserPerks()->rank()->name;
    }

    // handle update ranking pake updated di model..
    // public function updateUserPerks(){ }
   
    
  
}
