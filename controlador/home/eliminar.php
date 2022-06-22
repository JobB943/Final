<?php

include("../php/config.php");

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $eliminar="DELETE FROM usuarios WHERE id='$id'";
    $respuesta=mysqli_query($conn,$eliminar);
    if($respuesta){
        header("location: home.php");
    }else{
        header("location: home.php");
        echo "error eliminado";
    }
}


?>