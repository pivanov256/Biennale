<!doctype html>
<html>
<head>
    @include('includes.head')
    <title>
        Biennale - @yield('title')
    </title>
</head>
<body>
<div class="container-fluid">

    <header class="row">
        @include('includes.header')
    </header>

    <div class="row">
        @include('includes.notificationBox')
    </div>
    
    <div id="main" class="row">
        @yield('content')
    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>
    
    @include('includes.scripts')
</div>
</body>
</html>