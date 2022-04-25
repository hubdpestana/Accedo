<!DOCTYPE html>
<html lang="es">
<title>PoKéMoN Api</title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleindex.css"/>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script language="javascript">
        function validar() {
      var response = grecaptcha.getResponse();
      if (response.length == 0) {
        alert("Debe verificar el Captcha para poder Iniciar Sesión");
        return false;
      } else {
        return true;
      }
    }
    
    function mostrarPassword() {
      var cambio = document.getElementById("password");
      if (cambio.type == "password") {
        cambio.type = "text";
        $(".icon").removeClass("fa fa-eye-slash").addClass("fa fa-eye");
      } else {
        cambio.type = "password";
        $(".icon").removeClass("fa fa-eye").addClass("fa fa-eye-slash");
      }
    }
    
    
        </script>
    

</head>
<body>



<br><br>
<img src="logo2.png" class="logo" alt="">
<div class="contenedor">
    
    <form class="form" action="logear.php" method="post">

            <div class="input-group mb-3">
            <input type="email" name="usuario" id="usuario" class="form-control" placeholder="username" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
            <span class="input-group-text" id="basic-addon2">@example.com</span>
          </div>
          
          
          <div class="input-group mb-3">
            <input type="password" name="password" id="password" class="form-control" placeholder="password" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
                 
          </div> 
          
                            

          <center>
          <div class="g-recaptcha" name="grecaptcha" id="grecapcha"
                         data-sitekey="6Ld-EqAeAAAAAOFwDsSr-ddOncoiBUqbLT2GPYLg" data-callback="callback">>
                    </div>
                </center>
                <br>
           <input type="submit" class="text-white btn bg-success" OnClick="return validar();" value="Ingresar">

           <a href="registro.php" class="alert-link">Regístrese aquí</a>
    </form>
</div>
</body>
</html>