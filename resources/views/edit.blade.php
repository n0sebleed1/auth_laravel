@extends('layout.app')

@section('title')
    Редактировать
@endsection

@section('content')
    <div class="edit">
        <h2>Сменить аватар</h2>
        <form action="{{ route('changeImage') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input name="avatar" type="file" accept="image/*" class="edit__input">
            <button class="edit__submit">Сохранить</button>
        </form>
        <h2>Личные данные</h2>
        <form action="{{ route('changeData') }}" method="post">
            @csrf
            <input name="name" placeholder="Логин" class="edit__input" value="{{ $profile->name }}">
            <input name="email" placeholder="Почта" class="edit__input" value="{{ $profile->email }}">
            <input name="description" placeholder="Статус" class="edit__input" value="{{ $profileInfo->description }}">
            <button class="edit__submit">Сохранить</button>
        </form>
        <form action="{{ route('changePassword') }}" method="post">
            @csrf
            <h2>Сменить пароль</h2>
            <input type="password" name="password" placeholder="Новый пароль" class="edit__input">
            <input type="password" name="password_confirmation" placeholder="Повтор пароля" class="edit__input">
            <button class="edit__submit">Сохранить</button>
        </form>
    </div>
@endsection