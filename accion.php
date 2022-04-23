<?php
require_once "conex.php";
$con = new conex();
session_start();
$usuario = $_POST['usuario'];
$password = md5($_POST['password']);
$verificar = mysqli_query($con, "SELECT"." * FROM usuarios WHERE usuario = '$usuario' ");
if (mysqli_num_rows($verificar) > 0) {
    echo '
    <script>
         alert("El usuario ya se encuentra registrado por favor Inicie Sesion");
         window.location = "index.php";
    </script>
    ';
    exit();
}
$sql = "INSERT INTO" . " usuarios(usuario,password) VALUES ('$usuario','$password')";
$ejecutar = mysqli_query($con, $sql);
if (!$ejecutar) {
    echo "Hay algun error";
} else {
    echo '
    <script>
         alert("Su Registrado se ha realizado con Éxito.");
         window.location = "index.php";
        </script>
    ';
}
