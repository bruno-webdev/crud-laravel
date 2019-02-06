<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee - CRUD</title>
    <link rel="stylesheet" href="{{ asset('assets/lib/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/lib/fontawesome/css/all.min.css') }}">
</head>
<body>

<nav class="navbar navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ Route('index') }}">Employee</a>
    </div>
</nav>


@yield('content')

<script src="{{ asset('assets/lib/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/lib/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/lib/jquery-mask.js') }}"></script>
<script src="{{ asset('assets/lib/fontawesome/js/all.min.js') }}"></script>
<script src="{{ asset('assets/dev/main.js') }}"></script>
</body>
</html>
