@extends('layout.header')

@section('title')
    Новая статья
@endsection

@section('content')
    <div class="alarm">
        <p class="alarm-text">{{ $text }}</p>
        <a href=".." class="alarm-link">Назад</a>
    </div>
@endsection