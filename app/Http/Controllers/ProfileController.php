<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Tvshow;
use App\User;

class ProfileController extends Controller
{
    public function index()
    {
        $tvshows = User::find(Auth::user()->id);
        return view('user.profile')->withTvshows($tvshows);
    }

    public function editProfile()
    {
        $user = User::findOrFail(1);
        return view('profile.edit')->withUser($user);
    }
    
    public function updateProfile(Request $request)
    {
        $id = $request->id;
        $user = User::findOrFail($id);
        if($user){
            $user->name = $request->name;
            $user->save();
            return redirect('profile')->with('tvshow', 'Profile Updated Successfuly');
        }
    }

}
