<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title')</title>
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('layouts.header')
    <div class="page-layout">
        @include('layouts.aside')
        <main class="main">
            @include('layouts.alert')
            @yield('content')
        </main>
    </div>
</body>
</html>