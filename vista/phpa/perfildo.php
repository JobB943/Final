
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<html>
    <head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="perfild.css">
    <link rel="stylesheet" type="text/css" href="estilosp.css">

    </head>
    <body>
    <?php 
    include("../php/config.php");
    session_start(); 
    $select="SELECT*FROM users";
    $resultado=mysqli_query($conn,$select);
    $result = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    $foto = $_SESSION['unique_id'];
    $id = $_SESSION['unique_id'];
    include '../php/config.php';
    $consulta = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '$unique_id';");
    $valores = mysqli_fetch_array($consulta);
    $fname = $valores['fname'];
    $lname = $valores['lname'];
    $email = $valores['email'];
    $img = $valores['images'] ?>
        <div class="container emp-profile">
            <form action="foto.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4">
                        <ul>
                            <li class="button_user"><a class="button" href="../php/logout.php">Cerrar sesion</a>
                        </ul>
                        <div class="profile-img" >
                            <img src="<?php ; echo $img; ?>"/>
                            <div class="file btn btn-lg btn-primary" class="row">
                               
                                <input  type="text" name="unique_id" value="<?php echo $unique_id; ?>" style="display: none;">
                                <input type="file" name="nfoto" class="col-md-6"> Cambiar foto
                                <button class="col-md-7" type="submit" class="btn btn-primary">Actualizar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        <?php echo $fname; ?>
                                    </h5>
                                    <h6>
                                        <?php foreach($result as $fila):?>
                                            <td><?php if ($fila['rol_id'] == '1'){ 
                                    $rol = "paciente: ";
                                    }else{
                                        if ($fila['rol_id'] == '2'){
                                            $rol = "doctor";
                                        }
                                    }echo $rol;?></td>
                                            <?php endforeach ?>
                                    </h6>
                                    <br>
                                    <br>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Descripcion</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Calendario</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div>
                    
                    
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work" class="escala">
                            <p>WORK LINK</p>
                            <a href="">Face</a><br/>
                            <a href="">Yutuve</a><br/>
                            <a href="">Twitter</a><br>
                            <a href="">insta</a><br/>
                            
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nombre: </label>
                                    </div>
                                    <div class="col-md-6">
                                        <p><?php echo $nombre; ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p><?php echo $email; ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Numero: </label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>123 456 7890</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Especialidad: </label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>genecologo</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        
                                
                            </div>
                        </div>
                    </div>

                </div>

            </form>
            
        </div>
        

    </body>


</html>

