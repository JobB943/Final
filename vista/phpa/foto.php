<?php 
session_start();
$unique_id= $_POST['unique_id'];
include '../php/config.php';
$img = $_FILES['img'];
echo $img['tmp_name'];
$directorio_destino = "images";

$tmp_name = $foto['tmp_name'];
    
    
        $img_file = $img['img'];
        $img_type = $img['type'];
        echo 1;
        // Si se trata de una imagen   
        if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") ||
 strpos($img_type, "jpg")) || strpos($img_type, "png")))
        {
            //¿Tenemos permisos para subir la imágen?
            echo 2;
            $destino = $directorio_destino . '/' .  $img_file;
            mysqli_query($conn, "UPDATE users SET img = '$destino' WHERE unique_id = '$unique_id';");
           (move_uploaded_file($tmp_name, $destino))
        
                ?>

<script type="text/javascript">
     window.location = "perfildo.php";
 </script>
                <?php  

            }
    



    

 ?>

 <script type="text/javascript">
     window.location = "perfil.php";
 </script>