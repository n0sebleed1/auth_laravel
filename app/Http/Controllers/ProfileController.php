<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\User;
use App\UserInfo;
use App\Active;

class ProfileController extends Controller
{
    public function show($id){
        if($id == 0){
            return redirect('login');
        }

        $user = Auth::user();
        if($user != null)
            $name = $user->name;
        else
            $name = null;
        
        $profile = User::findOrFail($id);
        $profileInfo = UserInfo::findOrFail($id);
        $userId = $user->id;

        $active = New Active;
        return view('profile', ['data' => $active -> orderBy('id', 'desc') -> where('user_id', '=', $id) -> get(), 'userId' => $userId], compact('profile', 'name', 'id', 'profileInfo'));
    }

    public function edit(){
        $user = Auth::user();
        $name = $user->name;
        $id = $user->id;

        $profile = User::findOrFail($id);
        $profileInfo = UserInfo::findOrFail($id);

        return view('edit', ['name' => $name, 'id' => $id], compact('profile', 'profileInfo'));
    }

    public function changeData(Request $request){
        $user = Auth::user();
        $name = $user->name;
        $id = $user->id;

        $profileInfo = UserInfo::find($id);
        $profile = User::findOrFail($id);

        $profileInfo->description = $request->description;
        $profile->name = $request->name;
        $profile->email = $request->email;
        $profile->save();
        $profileInfo->save();

        return redirect('../profile/edit');
    }

    //changePassword
    public function changePassword(Request $request){
        $request->validate([
            'password' => 'required|confirmed|min:8'
        ]);

        $user = Auth::user();
        $name = $user->name;
        $id = $user->id;

        $password = Hash::make($request->password);
        $profile = User::findOrFail($id);

        $profile->password = $password;
        $profile->save();

        return redirect('../profile/edit');
    }

    public function changeImage(Request $request){
        $user = Auth::user();
        $name = $user->name;
        $id = $user->id;
    
        $profileInfo = UserInfo::findOrFail($id);
        
        
            $imagePath = $request->avatar->store('images', 'public');
            $profileInfo->avatar = $imagePath;
            $profileInfo->save();
        
    
        return redirect('../profile/edit');
    }
}
