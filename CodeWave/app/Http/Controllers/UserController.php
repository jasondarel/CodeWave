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
        return view('profile', compact('user'));
    }
    
    //
    public function getUserPerks()
    {
        $user = Auth::user();
        return UserPerk::where("user_id", $user->id)->get();
    }

    public function getUserPoints()
    {
        $user_perk = $this->getUserPerks();

        return $user_perk->points;
    }


}
