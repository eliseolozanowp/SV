<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SVRoots - Iniciar sesión</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #234de1; /* azur */
    }
    /* Additional CSS styling */
    .login-container {
      max-width: 500px;
      margin: 100px auto;
      background-color: #ffffff;
      padding: 50px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
    }
    .login-header {
      text-align: center;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>

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
            <span class="input-group-text"><i class="fas fa-eye"></i></span>
          </div>
        </div>
      </div>
      <div class="form-group">
        <a href="#">¿Olvidaste tu contraseña?</a>
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

</body>
</html>
