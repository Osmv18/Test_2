<script>
  //El problema esta aqui
  window.onload = function () {
    if (!window.location.hash) {
      window.location = window.location + '#loaded';
      window.location.reload();
    }
  }
</script>
<body background="Images/cyclin.jpg">
  <div class="container" id="partBody">
    <div class="row justify-content-center pt-5 mt-5 m-1">
      <div class="col-md-6 col-sm-8 col-xl-4 col-lg-5 form1">
	<form method="POST" action="?c=controller_users_exists">
	  <div class="form-group text-center pt-3">
	    <h1 class="text-light">INICIAR SESIÓN</h1>
	  </div>
	  <div class="form-group mx-sm-4 pt-3">
	    <input type="text" name="email" required="" class="form-control" placeholder="Digite su correo">
	  </div>
	  <div class="form-group mx-sm-4 pb-3">
	    <input type="password" name="password" required="" class="form-control" placeholder="Digite su contraseña">
	  </div>
	  <div class="form-group mx-sm-4 pb-2">
	    <input type="submit" class="btn btn-block enter" value="INGRESAR">
	  </div>
	  <div class="form-group text-center">
	    <span><a href="?c=controller_register" class="forgot">REGISTRARSE</a></span>
	  </div>
	</form>
      </div>
    </div>
  </div>
</body>
