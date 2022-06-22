<?php 
	include("../php/config.php");
	session_start(); 
	$select="SELECT*FROM enfermedad";
	$resultado=mysqli_query($conn,$select);
	$result = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Seguridad para ti - Agendar Cita</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="stylesheet" href="css/style.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- owl css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- style css -->
    
    <!-- responsive-->
    <link rel="stylesheet" href="../phpa/css/responsive.css">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->
<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="" /></div>
    </div>

    <div class="wrapper">
    <!-- end loader -->

     <div class="sidebar">
            <!-- Sidebar  -->
            <nav id="sidebar">

                <div id="dismiss">
                    <i class="fa fa-arrow-left"></i>
                </div>

                <ul class="list-unstyled components">

                    <li>
                        <a href="indexlogin.php">Inicio</a>
                    </li>
                    <li>
                        <a href="blog.html">Alarmas</a>
                    </li>
                    <li>
                        <a href="chat.html">Chat</a>
                    </li>
					<li class="active">
                        <a href="agendar.php">Agendar <img src="images\perfilpicture.jpg" alt="" marginwidth="30"></a>
                    </li>
                    <li>
                        <a href="calendario.html">Calendario</a>
                    </li>
                    <li>
                        <a href="about.html">¿Quienes somos nosotros?</a>
                    </li>
                    <li>
                        <a href="perfil.php">Perfil <img src="images\perfilpicture.jpg" alt="" marginwidth="30"></a>
                    </li>
					
                </ul>

            </nav>
        </div>

    <div id="content">
    <!-- header -->
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="full">
                        <a class="logo" href="C:\Users\SENA\Desktop\spicyo\index.html"><img src="images/logo.png" alt="#" /></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="full">
                        <div class="right_header_info">
                            <ul>
                                <li class="dinone">Contactos:<img style="margin-right: 15px;margin-left: 15px;" src="images/phone_icon.png" alt="#"><a href="#">300-3648-795</a></li>
                                <li class="dinone"><img style="margin-right: 15px;" src="images/mail_icon.png" alt="#"><a href="#">Nosotros@misena.edu.co</a></li>
                                <li class="dinone"><img style="margin-right: 15px;height: 21px;position: relative;top: -2px;" src="images/location_icon.png" alt="#"><a href="#">104 Medellín , Colombia</a></li>
                                <li class="button_user"><a class="button" href="index.html">Cerrar sesion</a>
                                <li><img style="margin-right: 10px;" src="images/search_icon.png" alt="#"></li>
                                <li>
                                    <button type="button" id="sidebarCollapse">
                                        <img src="images/menu_icon.png" alt="#">
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
	<div class="container" style="margin-top:200px">
    <div class="row">
      <div class="col-md-12">
        <div class="title">
          <i class="fa fa-calendar-plus-o" aria-hidden="true" style="font-size:100px;"></i>
          <h2 style="color:#666666">Agendar una cita</h2>
        </div>
      </div>    
    </div>
    <div class="row">
      <div class="col-md-6 offset-md-3">
         <div class="Client_box">
           <form method="post">
				<div>
					<label>Nombres y apellidos <span class="text-danger">*</span></label>
					<input name="nombres" type="text" class="form-control" placeholder="Nombres" required>
				</div>
				<div>
					<label>selecione el tipo de cita<span class="text-danger">*</span></label>
					<select name="enfermedad" class="form-control" required>
						<?php foreach($result as $fila):?>
						<option value="<?php echo $fila['id_enfermedad'] ?>"><?php echo $fila['nombre'] ?></option>
						<?php endforeach?>
					</select>
				</div>
				<div class="form-row">
					<div class="col">
						<label>Fecha<span class="text-danger">*</span></label>
						<input name="fecha" type="date" class="form-control" required min="<?php $hoy=date("Y-m-d"); echo $hoy;?>" max="2022-12-12">
					</div>
					<div class="col">
						<label>Hora<span class="text-danger">*</span></label>
						<input name="hora" type="time" class="form-control" required>
					</div>
				</div>
				<div class="form-row">
					<div class="col">
						<button href="../phpa/indexlogin.php" class="btn btn-danger" style="margin-left:75%;">Volver
					</div>
					<div class="col">
						<button name="guardarcita" type="submit" class="btn btn-success" style="margin-left:5%;">Agendar
					</div>
				</div>
		   </form><br><br><br><br><br>
      </div>
    </div>
  </div>
    </div>
    </div>
    <div class="overlay"></div>
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
     <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    
     <script src="js/jquery-3.0.0.min.js"></script>
   <script type="text/javascript">
        $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>

    <style>
    #owl-demo .item{
        margin: 3px;
    }
    #owl-demo .item img{
        display: block;
        width: 100%;
        height: auto;
    }
    </style>

     
      <script>
         $(document).ready(function() {
           var owl = $('.owl-carousel');
           owl.owlCarousel({
             margin: 10,
             nav: true,
             loop: true,
             responsive: {
               0: {
                 items: 1
               },
               600: {
                 items: 2
               },
               1000: {
                 items: 5
               }
             }
           })
         })
      </script>
</body>
</html>

<?php
	if(isset($_POST['guardarcita'])) {
		$nombres = $_POST['nombres'];
		$enfermedad = $_POST['enfermedad'];
		$fecha = $_POST['fecha'];
		$hora = $_POST['hora'];
		
		$sql = "INSERT INTO citas(nombres,enfermedad,fecha,hora) VALUES ('$nombres','$enfermedad','$fecha','$hora')";
		$resultadoagendar = mysqli_query($conn,$sql);
		
		if($resultadoagendar){
			echo "<script>alert('Cita agendada exitósamente');window.location='agendar.php'</script>";
		}
	}
	
	
?>