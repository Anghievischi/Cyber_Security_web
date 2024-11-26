<!DOCTYPE html>
<html>

<head>
    <title>Login Successful</title>
</head>

<body>
    <script>
        // Armazena o token no localStorage
        localStorage.setItem('token', '{{ $token }}');

        // Redireciona para a página inicial
        window.location.href = '/';
    </script>
</body>

</html>
