<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserPerk;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class UserController extends Controller
{
    public function profile($locale = 'en'){
        // mengirimkan data user ke view profile
        App::setLocale($locale);
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login')->with('fail', 'You must be logged in to access the profile page.');
        }
        
        return view('profile', compact('user'));
    }

    public function updateProfile(Request $request, $id){
        $validatedData = $request->validate([
            'name' => 'required|max:200',
            'email' => 'required|email|unique:users,email,' . $id, // Mengabaikan email user saat ini
            'DOB' => 'nullable|date', // Validasi untuk DOB
            'role' => 'required|in:Admin,User', // Validasi untuk role
        ]);
        
        $user = User::findOrFail($id);
        $user->update($validatedData);

        return redirect()->route('profile')->with('success', 'Data berhasil diupdate!');
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
