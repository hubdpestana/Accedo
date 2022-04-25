<?php
session_start();
$usuario = $_SESSION['usuario'];
if (isset($_SESSION['usuario'])) {
    ?>
<!DOCTYPE html>
<html lang="es">
<title>PoKéMoN Api</title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleindex.css"/>
</head>
<body>
<br><br>
<img src="logo2.png" class="logo" alt="">
<div class="contenedor">
    
<img src="" id="img" class="pokemon" alt="">
    <p id="info" class="text-white"></p>

    <a class="btn-sm btn-primary" href="dash.php" role="button">View all Pokémons</a>

</div>
  





</body>
</html>
<?php
} else {
    header('Location: index.php');
}
?>