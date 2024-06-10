@extends('layout.app')

@section('title')
    {{ $profile->name }}
@endsection

@section('content')
    <div class="user">
        <div class="flex">
            <img style="border-radius: 100px;" name="image" src="{{ asset('storage/app/public/' . $profileInfo->avatar) }}" width="200px">
            <div class="user__data">
                <p class="user__name">{{ $profile->name }}</p>
                    @if($profileInfo->description == null)
                        <p class="user__description">Статус отсутствует</p>
                    @else
                        <p class="user__description">{{ $profileInfo->description }}</p>
                    @endif
                @if($profile->id == $userId)
                    <a class="user__edit" href="edit">Редактировать</a>
                @endif
            </div>
        </div>
        <h2 class="active__title">Последняя активность</h2>
        @if(count($data) == 0)
            <p class="active__text">История активности пуста...</p>
        @endif
        @foreach($data as $el)
            <p class="active__text">
                <a href="../profile/{{ $profile->id }}" style="font-weight: bold; color: #1B75D0;">
                    {{'@' . $el->user->name }}
                </a>
                @if($el->type == 'like')
                    понравился пост  
                @elseif($el->type == 'create')
                    написал пост 
                @elseif($el->type == 'comment')
                    прокомментировал пост  
                @endif
                <a href="../news/{{ $el->news_id }}" style="font-weight: bold; color: #1B75D0;">
                    {{ $el -> news -> name }} 
                </a>
                | {{ $el -> created_at }}</p>
        @endforeach
    </div>
@endsection