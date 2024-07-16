<!-- resources/views/layouts/auth_layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Asegúrate de enlazar tus estilos -->
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
