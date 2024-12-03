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
        return UserPerk::where("user_id", $user->id)->get();
    }

    public function getUserPoints(){
        $user_perk = $this->getUserPerks();

        return $user_perk->points;
    }
}
