<?php

include("../php/config.php");

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $select="SELECT*FROM usuarios WHERE id=$id";
    $respuesta=mysqli_query($conn,$select);

    $row=mysqli_fetch_array($respuesta);
    $email=$row['email'];
    $nombre=$row['nombre'];
    
    }


if(isset($_POST['up'])){
    $id=$_GET['id'];
    $nombre=$_POST['nombre'];
    $email=$_POST['email'];

    $up="UPDATE usuarios set email='$email' , nombre='$nombre' WHERE id=$id";
    $resultado=mysqli_query($conn,$up);
    if($resultado){
        header("location: home.php");
    }
}
?>

<div>
<h1>EIDTAR PERFIL</h1>
    <form method="post" action="editar.php?id=<?php echo $_GET['id']; ?>">
    
    <input type="email" name="email" value="<?php echo $email; ?>">
    <input type="text" name="nombre" value="<?php echo $nombre; ?>">
    <input type="submit" name="up" placeholder="Actualizar">
    </form>
</div>