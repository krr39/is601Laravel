<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
<div class="container">
    @include('includes.header')
    <main role="main">
        @yield('content')

    </main>

</div>
<footer class="container-fluid bg-dark text-white text-center">
    <div class="container">
        @include('includes.footer')
    </div>
</footer>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>