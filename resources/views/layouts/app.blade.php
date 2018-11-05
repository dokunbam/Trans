<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<!-- Include header here from includes/head.php -->
   @include('includes.head') 
</head>
<body>
    <div id="app">
<!-- Include Navbar here from includes/header-nav.php -->
    @include('includes.header-nav') 
        
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <footer>
    @include('includes.footer') 
    </footer>
</body>
</html>
