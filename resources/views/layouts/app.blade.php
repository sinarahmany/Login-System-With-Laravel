<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
            <li><a href="" class="p-3">Home</a></li>
            <li><a href="" class="p-3">Dashboard</a></li>
            <li><a href="" class="p-3">Post</a></li>
        </ul>
        <ul class="flex items-center">
            <li><a href="" class="p-3">Sina Rahmannejad</a></li>
            <li><a href="" class="p-3">Login</a></li>
            <li><a href="{{'register'}}" class="p-3">Register</a></li>
            <li><a href="" class="p-3">Logout</a></li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>
