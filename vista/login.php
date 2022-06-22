<?php 
 //conexion con la base de datos y la tabla//
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form login">
    <!--titulo de la pagina de inicio-->
      <header>Inicio de Sesion</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Ingrese Email</label>
          <!--espaci para escribir el correo del usuario-->
          <input type="text" name="email" placeholder="Ingrese el email" required>
        </div>
        <div class="field input">
          <label>Contraseña</label>
          <!-- espacio para la contraseña-->
          <input type="password" name="password" placeholder="Ingrese la contraseña" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <!-- boton para ingresar al sistema-->
          <input type="submit" name="submit" value="iniciar sesion">
        </div>
      </form>
        <!-- link para llevar a registrar--> 
      <div class="link">¿Aun no te has registrado? <a href="indexc.php">Registrate ahora</a></div>
    </section>
  </div>
     <!--conxiones con javascript--> 
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
