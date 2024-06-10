<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\News;
use App\User;
use App\UserInfo;

class PostController extends Controller
{
    public function create(){
        $user = Auth::user();
        $id = $user->id;
        $profile = User::findOrFail($id);
        $profileInfo = UserInfo::findOrFail($id);

        if($user != null){
            $name = $user->name;
            return view('create_post', ['name' => $name, 'profile' => $profile, 'profileInfo' => $profileInfo]);
        }

        else {
            $name = null;
            return view('login');
        }
    }

    public function store(Request $request){
        $user = Auth::user();
        $user_id = $user->id;

        $request->validate([
            'name' => 'required|string|min:3',
            'text_1' => 'required|string|min:16'
        ]);

        $news = new News;
        $imagePath_1 = null;
        $imagePath_2 = null;
        $imagePath_3 = null;
        $imagePath_4 = null;
        $imagePath_5 = null;

        if ($request->image_1) {
            $imagePath_1 = $request->image_1->store('images', 'public');
            $news->image_path = $imagePath_1;
        }

        if ($request->image_2) {
            $imagePath_2 = $request->image_2->store('images', 'public');
            $news->image_path = $imagePath_2;
        }

        if ($request->image_3) {
            $imagePath_3 = $request->image_3->store('images', 'public');
            $news->image_path = $imagePath_3;
        }

        if ($request->image_4) {
            $imagePath_4 = $request->image_4->store('images', 'public');
            $news->image_path = $imagePath_4;
        }

        if ($request->image_5) {
            $imagePath_5 = $request->image_5->store('images', 'public');
            $news->image_path = $imagePath_5;
        }

        /*
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $news->image_path = $imagePath;
        }
        */

        $news = News::create([
            'text_1' => $request->text_1,
            'text_2' => $request->text_2,
            'text_3' => $request->text_3,
            'text_4' => $request->text_4,
            'text_5' => $request->text_5,
            'text_6' => $request->text_6,
            'code_1' => $request->code_1,
            'code_2' => $request->code_2,
            'code_3' => $request->code_3,
            'code_4' => $request->code_4,
            'code_5' => $request->code_5,
            'image_1' => $imagePath_1,
            'image_2' => $imagePath_2,
            'image_3' => $imagePath_3,
            'image_4' => $imagePath_4,
            'image_5' => $imagePath_5,
            'name' => $request->name,
            'user_id' => $user_id
        ]);
        
        return view('alarm', ['text' => 'Новость успешно создана!']);
    }
}

