<!DOCTYPE html>
<html>
    <head>
        <title>Регистрация</title>
    </head>
    <body>
        <h1>Вы успешно авторизовались!</h1>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Выйти</button>
        </form>
    </body>
</html>