<!DOCTYPE html>
<html lang="es">
<title>PoKéMoN Api</title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleindex.css"/>
    <script language="javascript">
	function validarpassw()
       {
      var p1 = document.getElementById("password").value;
      var p2 = document.getElementById("comfirm-password").value;
      var e1 = document.getElementById("usuario").value;
      var e2 = document.getElementById("comfirm-email").value;
      if (p1 != p2) {
        alert("las contraseñas no coinciden");
      return false;
      } else {
       return true; 
      }
      }
      
      if (e1 != e2) {
        alert("Los Emails no Coinciden");
      return false;
      } else {
       return true; 
      }
      
      </script>
</head>
<body>
</div>
<br> <br>
<img src="logo2.png" class="logo" alt="">
<div class="contenedor">
    <form class="form" action="accion.php" method="post">
            <div class="input-group mb-3">
            <input type="email" name="usuario" id="usuario" class="form-control" placeholder="username" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
            <span class="input-group-text" id="basic-addon2">@example.com</span>
          </div>
          <div class="input-group mb-3">
            <input type="email" name="confirm-email" id="confirm-email" class="form-control" placeholder="confirme-email" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
            <span class="input-group-text" id="basic-addon2">@example.com</span>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" id="password" class="form-control" placeholder="password" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="comfirm-password" id="comfirm-password" class="form-control" placeholder="confirme password" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
          </div>
           <button class="text-white btn bg-success" id="button" OnClick="return validarpassw();" >registrarse</button>
    </form>
</div>
</div>
</body>
</html>