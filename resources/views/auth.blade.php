<!DOCTYPE html>
<html>
    <head>
        <title>Вход</title>
    </head>
    <body>
        <form action="{{ route('auth') }}" method="post" novalidate autocomplete="off">
            @csrf
            <ul>
                @foreach ($errors->all() as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
            <h1>Вход</h1>
            <input type="text" name="name" placeholder="Name">
            <input type="password" name="password" placeholder="Password">
            <button>Вход</button>
        </form>
        <a href="auth">У меня нет аккаунта!/</a>
    </body>
</html>