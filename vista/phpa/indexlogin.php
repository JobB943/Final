<?php 
//conexion con la base de datos el id de la tabla//
  session_start();
  include_once "../php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: index.html");
  }
?>
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Seguridad para ti</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- owl css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- responsive-->
    <link rel="stylesheet" href="css/responsive.css">
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

                    <li class="active">
                        <a href="../phpa/indexlogin.php">Inicio</a>
                    </li>
                    <li>
                        <a href="../phpa/alarma.html">Alarmas</a>
                    </li>
                    <li>
                        <a href="../users.php">Chat</a>
                    </li>
					<li>
                        <a href="../phpa/agendar.php">Agendar <img src="images\perfilpicture.jpg" alt="" marginwidth="30"></a>
                    </li>
                    <li>
                        <a href="../phpa/calendario.php">Calendario</a>
                    </li>
                    <li>
                        <a href="C:\Users\hp\OneDrive\Escritorio\spicyo\about.html">¿Quienes somos nosotros?</a>
                    </li>
                    <li>
                        <a href="../phpa/perfil.php">Perfil <img src="images\perfilpicture.jpg" alt="" marginwidth="30"></a>
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
                                <a href="../php/logout.php?logout_id=<?php echo $_SESSION['unique_id']; ?>" class="logout">cerrar session</a>
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
    <!-- start slider section -->
    <div class="slider_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div id="main_slider" class="carousel vert slide" data-ride="carousel" data-interval="5000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="slider_cont">
                                                <h3>Seguridad para ti <br>Buscamos tu independencia</h3>
                                                <p>Sabemos que pasar por lo que tu pasas no es algo sencillo, queremos que te sientas libre, en este camino dificil.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="slider_image full text_align_center">
                                                <img class="img-responsive" src="images\undraw_medicine_b-1-ol.svg" height="500px" width="500px" alt="#" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="slider_cont">
                                                <h3>Agenda tus citas medicas.</h3>
                                                <p>Al tener esta facil comunicacion se vuelve mas sensillo cuando tenemos un recordatorio de nuestras citas, asi tu familiar y tu estaran pendientes de las mejoras de tu salud.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-7 full text_align_center">
                                            <div class="slider_image">
                                                <img class="img-responsive" src="images/undraw_doctor_kw-5-l.svg" height="470px" width="480" alt="#" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                                <i class="fa fa-angle-up" ></i>
                            </a>
                            <div style="margin-top:90px">
								<a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                                <i class="fa fa-angle-down"></i>
								</a>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end slider section -->


<!-- Our Client -->
<div class="Client">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title">
          <i><img src="https://th.bing.com/th/id/R.1c5e017d35947514573e91f409b63c77?rik=mrI2TUWwWih9zA&riu=http%3a%2f%2fcdn.onlinewebfonts.com%2fsvg%2fimg_445017.png&ehk=ukNwKvsm5BmiDlylLPL6xmWDDHMdGfX07KIZuLVhUQM%3d&risl=&pid=ImgRaw&r=0" height="100px" width="100" alt="#"/></i>
          <h2>Algunos de nuestros pacientes</h2>
        </div>
      </div>    
    </div>
    <div class="row">
      <div class="col-md-6 offset-md-3">
         <div class="Client_box">
           <img src="images/client.jpg" alt="#"/>
           <h3>Laura rodriguez</h3>
           <p>Para ser sincera no sentia que una aplicacion me ayudara a cuidar a mi mama desde la distancia, creia que al ella ser mayor nos causaria mayor complejidad, pero mi madre ahora se siente mas tranquila, sentia que estaba todo el tiempo encima de ella pidiendole que se cuidase pero yo solo queria que ella estuviera bien, con Seguridad para ti, me siento mas tranquila de hacer mis actividades cotidianas ya que se que puedo ayudar a mama desde cualquier lugar a solo un click de distancia.</p>
           <i><img src="images/client_icon.png" height="80px" width="80px" alt="#"/></i>
         </div>
      </div>
    </div>
  </div>
</div>  
<!-- end Our Client -->
</div>
    <!-- footer -->
    <fooetr>
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                  <div class=" col-md-12">
                    <h2>Quejas o sugerencias<strong class="white"> Contactarnos aquí</strong></h2>
                  </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      
                        <form class="main_form">
                            <div class="row">
                             
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Nombre" type="text" name="Nombre">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Email" type="text" name="Email">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Telefono" type="text" name="Telefono">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <textarea class="textarea" placeholder="Mensaje" type="text" name="Mensaje"></textarea>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <button class="send">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="img-box">
                            <figure><img src="https://i.pinimg.com/originals/d1/bd/0d/d1bd0d21a0ffacbab8d31907326a2db4.jpg" alt="img" /></figure>
                        </div>
                    </div>
                </div>
               
            <div class="copyright">
                <div class="container">
                    <p>© 2021 Proyecto para la tecnologia</p>
                </div>
            </div>
        </div>
    </fooetr>
    <!-- end footer -->

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