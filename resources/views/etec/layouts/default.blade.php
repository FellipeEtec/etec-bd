<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>

<body class="flex flex-col gap-8 w-full h-screen">
    @include('etec.components.header')
    <div class="flex-1 mx-auto w-full max-w-[1280px]">
        @yield('content')
    </div>
    @include('etec.components.footer')
</body>

</html>