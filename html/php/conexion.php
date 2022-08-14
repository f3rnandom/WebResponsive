<?php

$con = mysqli_connect("localhost","root","","cliente");

// if($con){
//     echo "Conexion exitosa";
// }else{
//     echo "Error";
// }

//REcibir las variables
$name=$_REQUEST["nombre"];
$mail=$_REQUEST["email"];
$tel=$_REQUEST["telefono"];
$direc=$_REQUEST["direccion"];
$comen=$_REQUEST["mensaje"];

$insertar="INSERT INTO contacto (nombre,email,telefono,direccion,mensaje) VALUES ('$name','$mail','$tel','$direc','$comen');";

if(mysqli_query($con,$insertar)){
    echo "<script> alert('Cliente guardado de forma Exitosa!!'); </script>";
    echo "<script>alert('exito');</script>";
    $redirect_page = 'http://localhost/ActiviFin/html/index.html';
    header('Location:'  .$redirect_page);
    die();
    
}

?>
