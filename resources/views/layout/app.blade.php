<!DOCTYPE html>
<html lang="es">
<head>
    @include('include.head')
</head>
<body>
<div class="header">
    <header>
        @yield('header')
    </header>
</div>
<div class="asidebar">
    @yield('aside')
</div>
<div class="container">
    <main>
        @yield('content')
    </main>
</div>
<div class="footer">
    <footer>
        @yield('footer')
    </footer>
</div>
    @include('include.foot')
</body>
</html>
