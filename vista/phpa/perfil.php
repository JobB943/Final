<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>perfil</title>
    <link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<body>
<?php include '../php/config.php';
	session_start();
	if (isset($_SESSION['unique_id'])) {
		
	}else{
		?>
		<script type="text/javascript">
			window.location = "./";
		</script>
		<?php 
	}
	$id = $_SESSION['unique_id'];
	$consulta = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '$id';");
	$valores = mysqli_fetch_array($consulta);
	$fname = $valores['fname'];
    $lname = $valores['lname'];
	$email = $valores['email'];
	$img= $valores['img'];
	 ?>
<style type="text/css">
    

html{
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
    text-size-adjust: 100%;
    line-height: 1.4;
}

body{
    background-color: #def7ff;
}

* {
    margin:     0;
    padding: 0;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
header {
     min-height: 90px;
     background: #212020;
     padding: 15px 0;
     position: fixed;
     width: 100%;
     top: 0;
     left: 0;
     z-index: 998;
}
 header .container-fluid {
     max-width: 1850px;
}
 .right_header_info {
     width: 100%;
     float: left;
     padding: 20px 0 0;
}
 .right_header_info ul {
     list-style: none;
     padding: 0;
     margin: 0;
     float: right;
}
 .right_header_info ul li {
     display: inline;
     font-size: 16px;
     margin-left: 45px;
     color: #eaeaea;
     font-weight: 400;
     float: left;
}
 .right_header_info ul li a {
     color: #eaeaea;
     font-weight: 300;
}
 .button_user a {
     float: left;
     min-width: 75px;
     height: 35px;
     text-align: center;
     line-height: 35px;
     position: relative;
     top: -3px;
     padding: 0 15px;
     margin: 0 2px;
}
 .button_user a {
     float: left;
     min-width: 75px;
     height: 40px;
     text-align: center;
     line-height: 38px;
     position: relative;
     top: -7px;
     padding: 0 15px;
     margin: 0 2px;
     border: solid #eaeaea 1px;
}
 .button_user a:hover, .button_user a:focus, .button_user a.active {
     background: #bceeff;
     color: #fff;
     border-color: #bceeff;
     color: #222;
}
 #sidebarCollapse {
     background: transparent;
}
 .slider_section {
     background: #212020;
     min-height: 100vh;
     padding-top: 93px;
}
 #main_slider {
     padding: 90px 0 30px;
}
 .slider_section .container {
     width: 100%;
     max-width: 1920px;
}
 .vert .carousel-item-next.carousel-item-left, .vert .carousel-item-prev.carousel-item-right {
     -webkit-transform: translate3d(0, 0, 0);
     transform: translate3d(0, 0, 0);
}
 .vert .carousel-item-next, .vert .active.carousel-item-right {
     -webkit-transform: translate3d(0, 100%, 0);
     transform: translate3d(0, 100% 0);
}
 .vert .carousel-item-prev, .vert .active.carousel-item-left {
     -webkit-transform: translate3d(0,-100%, 0);
     transform: translate3d(0,-100%, 0);
}
 .slider_cont {
     padding-left: 190px;
     float: left;
     margin: 100px 0 0;
}
 .slider_cont h3 {
     font-size: 70px;
     font-weight: 600;
     color: #fff;
     line-height: 70px;
     letter-spacing: -2px;
}
 .slider_cont p {
     font-size: 18px;
     color: #999;
     line-height: normal;
     font-weight: 300;
     margin-top: 0px;
     margin-bottom: 10px;
     padding-right: 30px;
}
 #main_slider .carousel-control-prev, #main_slider .carousel-control-next {
     width: 65px;
     height: 65px;
     background: #e1e0e0;
     opacity: 1;
     font-size: 30px;
     color: #212020;
     border-radius: 100%;
}
 #main_slider a.carousel-control-prev {
     position: absolute;
     left: 50px;
     top: 42%;
}
 #main_slider a.carousel-control-next {
     position: absolute;
     left: 50px;
     top: 52%;
}
body {
    color: #404040;
    font-family: "Arial", Segoe UI, Tahoma, sans-serifl, Helvetica Neue, Helvetica;
}

.seccion-perfil-usuario .perfil-usuario-body,
.seccion-perfil-usuario {
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    align-items: center;
}

.seccion-perfil-usuario .perfil-usuario-header {
    width: 100%;
    display: flex;
    justify-content: center;
    background: linear-gradient(#0CB7F2, #def7ff);
    margin-bottom: 1.25rem;
}

.seccion-perfil-usuario .perfil-usuario-portada {
    display: block;
    position: relative;
    width: 90%;
    height: 17rem;
    background: linear-gradient(45deg, #318CE7, #0CB7F2);
    border-radius: 0 0 20px 20px;
}

.seccion-perfil-usuario .perfil-usuario-portada .boton-portada {
    position: absolute;
    top: 1rem;
    right: 1rem;
    border: 0;
    border-radius: 8px;
    padding: 12px 25px;
    background-color: rgba(0, 0, 0, .5);
    color: #fff;
    cursor: pointer;
}

.seccion-perfil-usuario .perfil-usuario-portada .boton-portada i {
    margin-right: 1rem;
}

.seccion-perfil-usuario .perfil-usuario-avatar {
    display: flex;
    width: 180px;
    height: 180px;
    align-items: center;
    justify-content: center;
    border: 7px solid #FFFFFF;
    background-color: #def7ff;
    border-radius: 50%;
    box-shadow: 0 0 12px rgba(0, 0, 0, .2);
    position: absolute;
    bottom: -40px;
    left: calc(50% - 90px);
    z-index: 1;
}

.seccion-perfil-usuario .perfil-usuario-avatar img {
    width: 100%;
    position: relative;
    border-radius: 50%;
}

.seccion-perfil-usuario .perfil-usuario-avatar .boton-avatar {
    position: absolute;
    left: -2px;
    top: -2px;
    border: 0;
    background-color: #def7ff;
    box-shadow: 0 0 12px rgba(0, 0, 0, .2);
    width: 45px;
    height: 45px;
    border-radius: 50%;
    cursor: pointer;
}

.seccion-perfil-usuario .perfil-usuario-body {
    width: 70%;
    position: relative;
    max-width: 750px;
}

.seccion-perfil-usuario .perfil-usuario-body .titulo {
    display: block;
    width: 100%;
    font-size: 1.75em;
    margin-bottom: 0.5rem;
}

.seccion-perfil-usuario .perfil-usuario-body .texto {
    color: #848484;
    font-size: 0.95em;
}

.seccion-perfil-usuario .perfil-usuario-footer,
.seccion-perfil-usuario .perfil-usuario-bio {
    display: flex;
    flex-wrap: wrap;
    padding: 1.5rem 2rem;
    box-shadow: 0 0 12px rgba(0, 0, 0, .2);
    background-color: #fff;
    border-radius: 15px;
    width: 100%;
}

.seccion-perfil-usuario .perfil-usuario-bio {
    margin-bottom: 1.25rem;
    text-align: center;
}

.seccion-perfil-usuario .lista-datos {
    width: 50%;
    list-style: none;
}

.seccion-perfil-usuario .lista-datos li {
    padding: 5px 0;
}

.seccion-perfil-usuario .lista-datos li>.icono {
    margin-right: 1rem;
    font-size: 1.2rem;
    vertical-align: middle;
}

.seccion-perfil-usuario .redes-sociales {
    position: absolute;
    right: calc(0px - 50px - 1rem);
    top: 0;
    display: flex;
    flex-direction: column;
}

.seccion-perfil-usuario .redes-sociales .boton-redes {
    border: 0;
    background-color: #fff;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    color: #fff;
    box-shadow: 0 0 12px rgba(0, 0, 0, .2);
    font-size: 1.3rem;
}

.seccion-perfil-usuario .redes-sociales .boton-redes+.boton-redes {
    margin-top: .5rem;
}

.seccion-perfil-usuario .boton-redes.facebook {
    background-color: #5955FF;
}

.seccion-perfil-usuario .boton-redes.twitter {
    background-color: #35E1BF;
}

.seccion-perfil-usuario .boton-redes.instagram {
    background: linear-gradient(45deg, #FF2DFD, #40A7FF);
}

/* adactacion a dispositivos */
@media (max-width: 750px) {
    .seccion-perfil-usuario .lista-datos {
        width: 100%;
    }

    .seccion-perfil-usuario .perfil-usuario-portada,
    .seccion-perfil-usuario .perfil-usuario-body {
        width: 95%;
    }

    .seccion-perfil-usuario .redes-sociales {
        position: relative;
        flex-direction: row;
        width: 100%;
        left: 0;
        text-align: center;
        margin-top: 1rem;
        margin-bottom: 1rem;
        align-items: center;
        justify-content: center
    }

    .seccion-perfil-usuario .redes-sociales .boton-redes+.boton-redes {
        margin-left: 1rem;
        margin-top: 0;
    }
}

</style>
    <!--==========================
=            html            =
===========================-->

<div class="sidebar">
    <!-- Sidebar  -->
    <nav id="sidebar">

        <div id="dismiss">
            <i class="fa fa-arrow-left"></i>
        </div>

        <ul class="list-unstyled components">

           <li class="active">
                <a href="index.html">Inicio</a>
            </li>
            <li>
                <a href="about.html">¿Quienes somos nosotros?</a>
            
            </li>
            <li>
                <a href="blog.html">Alarmas</a>
            </li>
            <li>
                <a href="contact.html">Registro</a>
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
                <a class="logo" href="index.html"><img src="images/logo.png" alt="#" /></a>
            </div>
        </div>
        <div class="col-md-9">
            <div class="full">
                <div class="right_header_info">
                    <ul>
                        <li class="dinone"> contactos: <img style="margin-right: 15px;margin-left: 15px;" src="images/phone_icon.png" alt="#"><a href="#">300-3648-795</a></li>
                        <li class="dinone"><img style="margin-right: 15px;" src="images/mail_icon.png" alt="#"><a href="#">Nosotros@misena.edu.co</a></li>
                        <li class="dinone"><img style="margin-right: 15px;height: 21px;position: relative;top: -2px;" src="images/location_icon.png" alt="#"><a href="#">104 Medellín , Colombia</a></li>
                        <li><img style="margin-right: 10px;" src="images/search_icon.png" alt="#"></li>
                        <li class="button_user"><a class="button" href="indexlogin.php">volver al inicio</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</header>
<br>  </br><br>  </br><br>  </br>

    <section class="seccion-perfil-usuario">
        <div class="perfil-usuario-header">
            <div class="perfil-usuario-portada">
                <div class="perfil-usuario-avatar">
                    <img src="../php/images/<?php echo $img; ?>">
                    <a href="cambiarfoto.php"><button type="button" class="boton-avatar">
                        <i class="far fa-image"></i></a>
                    </button>
                </div>
            </div>
        </div>
        <div class="perfil-usuario-body">
            <div class="perfil-usuario-bio">
                <h1><?php echo $fname.' '.$lname; ?></h1>
            </div>
            <div class="perfil-usuario-footer">
                <ul class="lista-datos">
                    <li><i class="icono fas fa-map-signs"></i> rol: paciente</li>
                    <li><i class="icono fas fa-phone-alt"></i> Telefono: 339511651</li>
                    <li><i class="icono fas fa-briefcase"></i> email:MariaAlejandraDelaCruz1952@gmail.com</li>
                    <li><i class="icono fas fa-building"></i> Direccion de residencia:cll 18 #220-12C</li>
                </ul>
                <ul class="lista-datos">
                    <li><i class="icono fas fa-map-marker-alt"></i> Ubicacion: bogota</li>
                    <li><i class="icono fas fa-calendar-alt"></i> citas: 2 citas pendientes</li>
                    <li><i class="icono fas fa-user-check"></i> agenda: paracetamol</li>
                    <li><i class="icono fas fa-share-alt"></i> falimiar: lucia de la cruz agudelo</li>
                </ul>
            </div>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d994.1484947324217!2d-74.09736833350225!3d4.666251323604099!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9ba0879f5c15%3A0x2eb897fecc906dbc!2sBolera%20El%20Salitre!5e0!3m2!1ses!2sco!4v1638137450852!5m2!1ses!2sco" width="500" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>
    <!--====  End of html  ====-->

<!--=============================
redes sociales fijadas en pantalla
No es necesario que copies esto!
==============================-->
<style>
.mensaje a {
    color: inherit;
    margin-right: .5rem;
    display: inline-block;
}
.mensaje a:hover {
    color: #309B76;
    transform: scale(1.4)
}
</style>
<!--====  End of tarjeta  ====-->
</body>

</html>