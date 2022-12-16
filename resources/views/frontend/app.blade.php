<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    @include('frontend.layouts.title-meta')
    @include('frontend.layouts.head')
</head>
<body>
    <div class="container">
        @include('frontend.layouts.header')
        <main class="container">
            @yield('content')
        </main>
    </div>
    
    @include('frontend.layouts.vendor-scripts')
</body>
</html>