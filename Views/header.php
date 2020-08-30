<!-- Header-->
<header class="container-fluid" id="header">
  <nav class="navbar navbar-expand-lg container">
    <a class="navbar-brand" href="index.php">
      <img src="Images/logo.png" style="width: 92px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><img src="Images/menuHamburger.png"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

	<li class="nav-item active">
	  <a class="nav-link" href="index.php" >Principal<span class="sr-only">(current)</span></a>
	</li>

	<li class="nav-item dropdown">
	  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    Tienda
	  </a>
	  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	    <a class="dropdown-item" href="?c=controller_view_products">Ver productos</a>
	    <a class="dropdown-item" href="?c=controller_add_car">Ver Carrito</a>
	    <div class="dropdown-divider"></div>
	    <a class="dropdown-item" href="#">Something else here</a>
	  </div>
	</li>
      </ul>  
      <li class="nav-item form-inline my-2 my-lg-0" id="login_position" >
	  <a class="nav-link" href="?c=controller_login">Login</a>
	</li>
    </div>
  </nav>  
</header>