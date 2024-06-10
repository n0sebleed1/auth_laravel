<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Likes;
use App\Comments;
use App\News;
use App\Active;
use App\Answers;

class FeedbackController extends Controller
{
    public function like(Request $request){
        $user = Auth::user();
        
        if($user != null){
            $newsId = $request->id;
            $likesCount = $request->likes_count;

            $likesCount++;

            $user = Auth::user();
            $userId = $user->id;

            $news = News::find($newsId);
            $news->likes_count = $likesCount;
            $news->save();

            $likes = Likes::create([
                'news_id' => $newsId,
                'user_id' => $userId
            ]);

            $active = Active::create([
                'news_id' => $newsId,
                'user_id' => $userId,
                'type' => 'like'
            ]);


            return redirect()->back();
        }

        else {
            $name = null;
            return redirect('login');
        }

    }

    public function comment(Request $request){
        $user = Auth::user();
        if($user != null){
            $name = $user->name;
            $newsId = $request->id;
            $commentsCount = $request->comments_count;

            $commentsCount++;

            $user = Auth::user();
            $userId = $user->id;

            $news = News::find($newsId);
            $news->comments_count = $commentsCount;
            $news->save();

            $comments = Comments::create([
                'news_id' => $newsId,
                'user_id' => $userId,
                'text' => $request->text,
            ]);

            $active = Active::create([
                'news_id' => $newsId,
                'user_id' => $userId,
                'type' => 'comment'
            ]);

        return redirect()->back();
        }

        else {
            $name = null;
            return redirect('login');
        }

        
    }

    public function answer(Request $request){
        $user = Auth::user();
        if($user != null){
            $userId = $request->user_id;
            $newsId = $request->news_id;
            $commentId = $request->id;
            $text = $request->text;
            $answersCount = $request->answers_count;

            $answersCount++;

            $comments = Comments::find($commentId);
            $comments->answers_count = $answersCount;
            $comments->save();

            $answers = Answers::create([
                'user_id' => $userId,
                'comment_id' => $commentId,
                'text' => $text,
                'news_id' => $newsId
            ]);

            return redirect()->back();
        }

        else {
            $name = null;
            return redirect('login');
        }
    }

    public function delete(Request $request) {
        $newsId = $request->id;
    
        // Найти запись новости
        $news = News::find($newsId);
    
        if ($news) {
            // Найти все комментарии, связанные с новостью
            $comments = Comments::where('news_id', $newsId)->get();
    
            // Удалить все ответы, связанные с комментариями
            foreach ($comments as $comment) {
                Answers::where('comment_id', $comment->id)->delete();
            }
    
            // Удалить все комментарии, связанные с новостью
            Comments::where('news_id', $newsId)->delete();
    
            // Удалить все лайки, связанные с новостью
            Likes::where('news_id', $newsId)->delete();
    
            // Удалить все записи из таблицы active, связанные с новостью (если нужно)
            Active::where('news_id', $newsId)->delete();
    
            // Удалить новость
            $news->delete();
        }
    
        return redirect('news');
    }
}
