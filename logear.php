<?php

require_once "conex.php";
$con = new conex();

session_start();

$usuario = $_POST['usuario'];
$password = md5($_POST['password']);

$q = "SELECT"." count(*) as contar FROM usuarios WHERE usuario= '$usuario' and password= '$password'";

var_dump($q);
$consulta = mysqli_query($con, $q);
$array = mysqli_fetch_array($consulta);

if ($array['contar'] > 0) {
    $_SESSION['usuario'] = $usuario;
    header("location: dash.php");
} else{
    echo '
    <script>
         alert("Clave o Usuario Incorrecto..");
        window.location = "index.php";
        </script>
    ';
}
