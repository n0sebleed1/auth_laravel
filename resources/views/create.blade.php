@extends('layout.app')

@section('title')
    Новая статья
@endsection

@section('content')
    <ul class="create-error">
        @foreach ($errors->all() as $message)
            <li class="create-error__message">{{ $message }}</li>
        @endforeach
    </ul>
    <form class="article" action="{{ route('create') }}" method="post" enctype="multipart/form-data">
        @csrf
        <h1 class="article__title">Новая статья</h1>
        <input name="name" class="article__input" type="text" placeholder="Название статьи...">
        <select class="article__input" name="tag" placeholder="Название статьи...">
            <option value="Веб-разработка">Веб-разработка</option>
            <option value="Разработка ПО">Разработка ПО</option>
            <option value="UI/UX">UI/UX</option>
            <option value="Кибер-безопасность">Кибер-безопасность</option>
            <option value="Аналитика">Аналитика</option>
        </select>
        <textarea name="text_1" class="article__input article__textarea" type="text" placeholder="Текст статьи..."></textarea>
        <textarea name="code_1" class="article__input article__textarea hiden js__attach-code-input" type="text" placeholder="Введите код..."></textarea>
        <input name="image_1" class="article__input hiden js__attach-image-input" type="file" accept="image/*">
        <textarea name="text_2" class="article__input article__textarea hiden js__attach-text-input" type="text" placeholder="Текст статьи (необязательно)"></textarea>
        <textarea name="code_2" class="article__input article__textarea hiden js__attach-code-input" type="text" placeholder="Введите код..."></textarea>
        <input name="image_2" class="article__input hiden js__attach-image-input" type="file" accept="image/*">
        <textarea name="text_3" class="article__input article__textarea hiden js__attach-text-input" type="text" placeholder="Текст статьи (необязательно)"></textarea>
        <textarea name="code_3" class="article__input article__textarea hiden js__attach-code-input" type="text" placeholder="Введите код..."></textarea>
        <input name="image_3" class="article__input hiden js__attach-image-input" type="file" accept="image/*">
        <textarea name="text_4" class="article__input article__textarea hiden js__attach-text-input" type="text" placeholder="Текст статьи (необязательно)"></textarea>
        <textarea name="code_4" class="article__input article__textarea hiden js__attach-code-input" type="text" placeholder="Введите код..."></textarea>
        <input name="image_4" class="article__input hiden js__attach-image-input" type="file" accept="image/*">
        <textarea name="text_5" class="article__input article__textarea hiden js__attach-text-input" type="text" placeholder="Текст статьи (необязательно)"></textarea>
        <textarea name="code_5" class="article__input article__textarea hiden js__attach-code-input" type="text" placeholder="Введите код..."></textarea>
        <input name="image_5" class="article__input hiden js__attach-image-input" type="file" accept="image/*">
        <textarea name="text_6" class="article__input article__textarea hiden js__attach-text-input" type="text" placeholder="Текст статьи (необязательно)"></textarea>
        <button type="button" class="article__attach" id="js__attach-button">
            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="30.000000px" height="30.000000px" viewBox="0 0 64.000000 64.000000" preserveAspectRatio="xMidYMid meet">
                <g transform="translate(0.000000,64.000000) scale(0.100000,-0.100000)" fill="#909090" stroke="none">
                    <path d="M276 624 c-13 -12 -16 -39 -16 -130 l0 -114 -114 0 c-127 0 -146 -8 -146 -60 0 -52 19 -60 146 -60 l114 0 0 -114 c0 -127 8 -146 60 -146 52 0 60 19 60 146 l0 114 114 0 c127 0 146 8 146 60 0 52 -19 60 -146 60 l-114 0 0 114 c0 91 -3 118 -16 130 -20 20 -68 20 -88 0z"/>
                </g>
            </svg>
            <p class="article__attach-text">Добавить вложение</p>
        </button>
        <button type="submit" class="article__button article__submit">Опубликовать</button>
        <a href="news" class="article__button">Назад</a>
    </form>
@endsection