<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Comments;
use App\News;
use App\UserInfo;
use App\User;
use App\Active;
use App\Likes;
use App\Answers;

class NewsController extends Controller
{
    public function create(){
        $user = Auth::user();
        if($user != null){
            $name = $user->name;
            $id = $user->id;
            $id = $user->id;
            $profile = User::findOrFail($id);
            $profileInfo = UserInfo::findOrFail($id);
            return view('create', ['name' => $name, 'id' => $id, 'profile' => $profile, 'profileInfo' => $profileInfo]);
        }

        else {
            $name = null;
            return view('login');
        }
    }

    public function store(Request $request) {
        $user = Auth::user();
        $user_id = $user->id;
    
        // Валидация данных
        $request->validate([
            'name' => 'required|string|min:3',
            'text_1' => 'required|string|min:16'
        ]);
    
        // Создание объекта News
        $news = new News;
        $news->name = $request->name;
        $news->text_1 = $request->text_1;
        $news->text_2 = $request->text_2;
        $news->text_3 = $request->text_3;
        $news->text_4 = $request->text_4;
        $news->text_5 = $request->text_5;
        $news->text_6 = $request->text_6;
        $news->code_1 = $request->code_1;
        $news->code_2 = $request->code_2;
        $news->code_3 = $request->code_3;
        $news->code_4 = $request->code_4;
        $news->code_5 = $request->code_5;
        $news->tag = $request->tag;
        $news->user_id = $user_id;
    
        // Сохранение изображений (если они есть)
        if ($request->hasFile('image_1')) {
            $news->image_1 = $request->file('image_1')->store('images', 'public');
        }
        if ($request->hasFile('image_2')) {
            $news->image_2 = $request->file('image_2')->store('images', 'public');
        }
        if ($request->hasFile('image_3')) {
            $news->image_3 = $request->file('image_3')->store('images', 'public');
        }
        if ($request->hasFile('image_4')) {
            $news->image_4 = $request->file('image_4')->store('images', 'public');
        }
        if ($request->hasFile('image_5')) {
            $news->image_5 = $request->file('image_5')->store('images', 'public');
        }
    
        // Сохранение объекта News в базе данных
        $news->save();
    
        // Получаем ID только что созданной записи
        $newsId = $news->id;
    
        // Вставка в таблицу active
        $active = Active::create([
            'user_id' => $user_id,
            'news_id' => $newsId, // Используем ID созданной записи
            'type' => 'create'
        ]);
    
        return view('alarm', ['text' => 'Статья успешно создана!']);
    }

    public function allData(){
        $user = Auth::user();
        if($user != null){
            $name = $user->name;
            $id = $user->id;
            $profile = User::findOrFail($id);
            $profileInfo = UserInfo::findOrFail($id);
        }

        else {
            $name = null;
            $id = 0;
            $profile = 0;
            $profileInfo = 0;
        }

        $news = new News;
        return view('news', ['data' => $news -> orderBy('id', 'desc') -> get(), 'name' => $name, 'id' => $id, 'profile' => $profile, 'profileInfo' => $profileInfo]);
    }

    public function software(){
        $user = Auth::user();
        if($user != null){
            $name = $user->name;
            $id = $user->id;
            $profile = User::findOrFail($id);
            $profileInfo = UserInfo::findOrFail($id);
        }

        else {
            $name = null;
            $id = 0;
            $profile = 0;
            $profileInfo = 0;
        }

        $news = new News;
        return view('news', ['data' => $news -> orderBy('id', 'desc') -> where('tag', '=', 'Разработка ПО') -> get(), 'name' => $name, 'id' => $id, 'profile' => $profile, 'profileInfo' => $profileInfo]);
    }

    public function web(){
        $user = Auth::user();
        if($user != null){
            $name = $user->name;
            $id = $user->id;
            $profile = User::findOrFail($id);
        $profileInfo = UserInfo::findOrFail($id);
        }

        else {
            $name = null;
            $id = 0;
            $profile = 0;
            $profileInfo = 0;
        }

        $news = new News;
        return view('news', ['data' => $news -> orderBy('id', 'desc') -> where('tag', '=', 'Веб-разработка') -> get(), 'name' => $name, 'id' => $id,  'profile' => $profile, 'profileInfo' => $profileInfo]);
    }

    public function uiux(){
        $user = Auth::user();
        if($user != null){
            $name = $user->name;
            $id = $user->id;
            $profile = User::findOrFail($id);
            $profileInfo = UserInfo::findOrFail($id);
        }

        else {
            $name = null;
            $id = 0;
            $profile = 0;
            $profileInfo = 0;
        }

        $news = new News;
        return view('news', ['data' => $news -> orderBy('id', 'desc') -> where('tag', '=', 'UI/UX') -> get(), 'name' => $name, 'id' => $id,  'profile' => $profile, 'profileInfo' => $profileInfo]);
    }

    public function cybersecurity(){
        $user = Auth::user();
        if($user != null){
            $name = $user->name;
            $id = $user->id;
            $profile = User::findOrFail($id);
            $profileInfo = UserInfo::findOrFail($id);
        }

        else {
            $name = null;
            $id = 0;
            $profile = 0;
            $profileInfo = 0;
        }

        $news = new News;
        return view('news', ['data' => $news -> orderBy('id', 'desc') -> where('tag', '=', 'Кибер-безопасность') -> get(), 'name' => $name, 'id' => $id,  'profile' => $profile, 'profileInfo' => $profileInfo]);
    }

    public function popular(){
        $user = Auth::user();
        if($user != null){
            $name = $user->name;
            $id = $user->id;
            $id = $user->id;
            $profile = User::findOrFail($id);
            $profileInfo = UserInfo::findOrFail($id);
        }

        else {
            $name = null;
            $id = 0;
            $profile = 0;
            $profileInfo = 0;
        }

        $news = new News;
        return view('news', ['data' => $news -> orderBy('likes_count', 'desc') -> get(), 'name' => $name, 'id' => $id,  'profile' => $profile, 'profileInfo' => $profileInfo]);
    }

    public function show($id) {
        $image = null;
        $user = Auth::user();

        if($user != null && $user != null){
            $answers = 0;
            $name = $user->name;
            $user_id = $user->id;
            $userId = $user->id;
            
            $news = News::findOrFail($id);

            $like = Likes::where('user_id', $user->id)
                    ->where('news_id', $id)
                    ->first();

            $comments = Comments::where('news_id', $id)
                    ->first();
            
            if ($comments != null){
                $answers = Answers::where('news_id', $id)
                        ->get();
            }

            $comments_upload = new Comments;

            $id = $user->id;
            $profile = User::findOrFail($id);
            $profileInfo = UserInfo::findOrFail($id);

            return view('article', 
            compact('news', 'name', 'image', 'like', 'comments', 'id', 'user_id', 'user', 'answers', 'profile', 'profileInfo'),
            ['comments_count' => $comments_upload -> get(), 'id' => $userId]
            );
        }

        else{
            $name = null;
            $user_id = null;

            $comments = Comments::where('news_id', $id)
                    ->first();
            
            if ($comments != null){
                $answers = Answers::where('news_id', $id)
                        ->get();
            }

            $comments_upload = new Comments;

            $news = News::findOrFail($id);
            $id = 0;
            $profile = 0;
            $profileInfo = 0;

            return view('article', 
            compact('news', 'name', 'image', 'id', 'user_id', 'comments', 'answers'),
            ['comments_count' => $comments_upload->get(), 'profile' => $profile, 'profileInfo' => $profileInfo]);
        }
    }
}
