<head>
  <title>REGISTER</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body background="Images/cyclin.jpg">
  <div class="container" id="partBody">
    <div class="row justify-content-center pt-5 mt-5 m-1">
      <div class="col-md-6 col-sm-8 col-xl-4 col-lg-5 form1">
	<form method="POST" action="?c=controller_create_users">
	  <div class="form-group text-center pt-3">
	    <h1 class="text-light">REGISTRARSE</h1>
	  </div>
	  <div class="form-group mx-sm-4 pt-3">
	    <input type="text" name="name" class="form-control" placeholder="Nombre">
	  </div>
	  <div class="form-group mx-sm-4 pb-3">
	    <input type="text" name="last_name" class="form-control" placeholder="Apellido">
	  </div>
	  <div class="form-group mx-sm-4 pb-3">
	    <input type="text" name="email" class="form-control" placeholder="Correo electronico" >
            
	  </div>
	  <div class="form-group mx-sm-4 pb-3">
	    <input type="text" name="password" class="form-control" placeholder="Contraseña">
	  </div>
	  <div class="form-group text-center">
              <button type="submit" class="forgot">REGISTRATE</button>
	  </div>
	</form>
      </div>
    </div>
  </div>
</body>
