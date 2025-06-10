{{-- filepath: d:\supriya\PHP\Laravel\Laravel Project\resources\views\layouts\app.blade.php --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Project')</title>
    <!-- Bootstrap CSS (optional) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-2">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Laravel Project</a>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
<<<<<<< HEAD
                    <a class="nav-link" href="{{ url('/home') }}">Home</a>
=======
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
>>>>>>> 4f45f9219fb7d89b1db7a789a4ad317d28083536
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/aboutus') }}">AboutUs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/services') }}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contactus') }}">ContactUs</a>
                </li>
            </ul>
        </div>
    </nav>
    <main class="py-4">
        @yield('content')
    </main>
    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>