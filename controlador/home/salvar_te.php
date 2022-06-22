<?php include("../php/config.php"); 

if(isset($_POST['enviar_c'])){
    if(isset($_POST['nombre']) && (isset($_POST['email']))){
        $tittle=$_POST['nombre'];
        $email=$_POST['email'];

        $insertar="INSERT INTO email(razon) VALUES ('$email')";
        $respuesta=mysqli_query($cone,$insertar);

        if($respuesta){
            header("location: home.php");
        }else{
            echo "no se inserto";
        }
    }
}

?>