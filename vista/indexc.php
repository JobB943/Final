<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location:../vista/login.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Registro</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Nombres</label>
            <input type="text" name="fname" placeholder="Nombres" required>
          </div>
          <div class="field input">
              <label>Apellidos</label>
            <input type="text" name="lname" placeholder="Apellidos" required>
          </div>
        </div>
        <div class="field input">
            <label>Ingrese Email</label>
          <input type="text" name="email" placeholder="Ingrese Email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Ingrese Contraseña" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
            <label>Imagen</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit"  value="Registro">
        </div>
      </form>
      <div class="link">Already signed up? <a href="login.php">Login now</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
