<!DOCTYPE html>
<html>
    <head>
        <title>Регистрация</title>
    </head>
    <body>
        <form action="{{ route('reg') }}" method="post" novalidate autocomplete="off">
            @csrf
            <ul>
                @foreach ($errors->all() as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
            <h1>Регистрация</h1>
            <input type="text" name="name" placeholder="Name">
            <input type="password" name="password" placeholder="Password">
            <input type="password" name="password_confirmation" placeholder="Confirm password">
            <input type="email" name="email" placeholder="Email">
            <button>Регистрация</button>
        </form>
        <a href="auth">У меня есть аккаунт!/</a>
    </body>
</html>