<!DOCTYPE html>
<html lang="en">
<head>
    @include('include.head')
</head>
<body>
    <div class="header">
        @yield('header')
    </div>
    <div class="container">
        @yield('content')
    </div>
    <div class="footer">
        @yield('footer')
    </div>
    @include('include.below')
</body>
</html>
