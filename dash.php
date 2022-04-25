<?php
session_start();
$usuario = $_SESSION['usuario'];
if (isset($_SESSION['usuario'])) {
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">      
        <title>PoKéMoN</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
              crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">   
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
	    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
	    <script src="https://code.jquery.com/jquery-3.6.0.js"
                integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
       <script>
            document.addEventListener("DOMContentLoaded", async (event) => {
               await inicioDasboard();
            });
        </script>
    </head>

    <body>

    <div id="dasboard"  data-usuario="<?php echo $usuario?>">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
            <img class="gif" src="pokemong.gif" alt="funny image">
                <button class="navbar-toggler"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText" >
                    <span class="navbar-nav me-auto mb-2 mb-lg-0" ></span>
                    <span class="navbar-brand" style="color: blue;"> <?php echo $usuario ?></span>
                    <a href="logout.php" class="lead btn navbar-text" style="color: red;" >Cerrar Sesión <i
                                class="fa fa-sign-out-alt "></i></a>
                </div>
            </div>
        </nav>
        </div>
        </div>
        <div class="container-card" id="pokemons-list"> </div>
    <div id="links" class="link">
  </div>
  <div>
    </div>
  <script src="app.js"></script>
 </body>
</html>
<?php
} else {
    header('Location: index.php');
}
?>