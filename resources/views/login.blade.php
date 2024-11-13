<!-- resources/views/login.blade.php -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h2>Login</h2>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label for="password">Senha:</label>
            <input type="password" name="password" required>
        </div>
        <button type="submit">Entrar</button>
    </form>
    @if ($errors->any())
        <div>
            <p>{{ $errors->first() }}</p>
        </div>
    @endif
    <p>Ainda não tem uma conta? <a href="{{ route('register') }}">Cadastre-se aqui</a></p>
</body>

</html>
