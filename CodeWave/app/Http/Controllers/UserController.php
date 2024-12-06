<?php

namespace App\Http\Controllers;

use App\Models\UserPerk;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile(){
        // mengirimkan data user ke view profile
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login')->with('fail', 'You must be logged in to access the profile page.');
        }
        
        return view('profile', compact('user'));
    }
    
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
}