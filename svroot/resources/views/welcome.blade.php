<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

</head>

<body class="antialiased">
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <div class="header">
        <div class="logo">
          <img src="{{ asset('assets/images/logo.jpeg') }}" alt="SVRoots Logo">
        </div>
      </div>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        
      </ul>
      <ul class="navbar-nav profile-menu">
        <li class="nav-item active">
            <a class="nav-link" href="#"><i class="fas fa-landmark"></i> Sitios Históricos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-hotel"></i> Hospedajes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-tree"></i> Parques</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-utensils"></i> Restaurantes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-glass-cheers"></i> Tradiciones</a>
          </li>
          <ul>
            <li class="nav-item">
                <a class="nav-link" href="login"><i class="fas fa-sign-in-alt"></i> Iniciar Sesión</a>
              </li>
          </ul>
      </ul>
    </div>
  </div>
</nav>
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
            <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
            @else
            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
            @endauth
        </div>
        @endif

    </div>

    <!-- Bootstrap JS and Font Awesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>