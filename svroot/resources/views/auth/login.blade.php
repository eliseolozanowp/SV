<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SVRoots - Iniciar sesión</title>
  <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  <style>
    body {
      background-color: gray;
      /* azul */
      padding-top: 56px;
    }

    .navbar {
      position: fixed;
      width: 100%;
      top: 0;
      z-index: 1000;
      background-color: #1d3fba;
      border-bottom: 1px solid #ccc;
    }

    /* Additional CSS styling */
    .login-container {
      max-width: 500px;
      margin: 100px auto;
      background-color: #ffffff;
      padding: 50px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
    }

    .login-header {
      text-align: center;
      margin-bottom: 20px;
    }

    .toggle-password:hover {
      cursor: pointer;
    }
  </style>
</head>

<body>

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
              <a class="nav-link" href="signup"><i class="fas fa-sign-in-alt"></i> Registro</a>
            </li>
          </ul>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="login-container">
      <div class="login-header">
        <img style="width: 75%;" src="{{ asset('assets/images/logo.jpeg')}}" alt="SVRoots Logo"> <!-- Aquí puedes cambiar la URL de la imagen -->
        <h2 style="color: blue;">Bienvenidos a SVRoots</h2>
      </div>
      <form>
        <p style="text-align: center;">Ingresa tu usuario y contraseña para iniciar sesión</p>
        <div class="form-group">
          <label for="username">Usuario</label>
          <div class="input-group">
            <input type="text" class="form-control" id="username" placeholder="Ingresar usuario" required>
            <div class="input-group-append">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="password">Contraseña</label>
          <div class="input-group">
            <input type="password" class="form-control" id="password" placeholder="Ingresar contraseña" required>
            <div class="input-group-append">
              <span class="input-group-text toggle-password"><i class="fas fa-eye"></i></span>
            </div>
          </div>
        </div>
        <div class="form-group">
          <a href="passreset">¿Olvidaste tu contraseña?</a>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
        <div class="text-center mt-3">
          ¿No tienes una cuenta? <a href="register">Regístrate</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap JS and Font Awesome -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    // JavaScript para mostrar/ocultar la contraseña al hacer clic en el icono del ojo
    $(document).ready(function() {
      $(".toggle-password").click(function() {
        var passwordField = $("#password");
        var passwordFieldType = passwordField.attr("type");
        if (passwordFieldType === "password") {
          passwordField.attr("type", "text");
        } else {
          passwordField.attr("type", "password");
        }
      });
    });
  </script>

</body>

</html>