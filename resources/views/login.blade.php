<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>

    <form action="{{ route('proses.login') }}" method="POST">
        @csrf

        <input type="email" name="email" placeholder="masukan email">
        <input type="password" name="password" placeholder="Masukan Password">

        <button type="submit">Login</button>
    </form>
</body>
</html>