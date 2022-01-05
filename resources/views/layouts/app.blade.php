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
            <li><a href="/" class="p-3">Home</a></li>
            <li><a href="{{route('dashboard')}}" class="p-3">Dashboard</a></li>
            <li><a href="{{route('posts')}}" class="p-3">Posts</a></li>
        </ul>
        <ul class="flex items-center">
{{--            @if (auth()->user())--}}
{{--                <li><a href="" class="p-3">Sina Rahmannejad</a></li>--}}
{{--                <li><a href="" class="p-3">Logout</a></li>--}}
{{--            @else--}}
{{--                <li><a href="" class="p-3">Login</a></li>--}}
{{--                <li><a href="{{'register'}}" class="p-3">Register</a></li>--}}
{{--            @endif--}}

        {{--   better way instead of using if in above--}}
            @auth
            <li><a href="" class="p-3">{{auth()->user()->name}}</a></li>
            <li>
                <form action="{{route('logout')}}" method="post" class="inline p-3">
                    @csrf
                    <button type="submit">Logout</button>
                </form>

            </li>
            @endauth

            @guest
            <li><a href="{{route('login')}}" class="p-3">Login</a></li>
            <li><a href="{{route('register')}}" class="p-3">Register</a></li>
            @endguest
        </ul>
    </nav>
    @yield('content')
</body>
</html>
