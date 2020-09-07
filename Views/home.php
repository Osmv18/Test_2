<script>
  //El problema esta aqui
  window.onload = function () {
    if (!window.location.hash) {
      window.location = window.location + '#loaded';
      window.location.reload();
    }
  }
</script>
<div class="container" id="partBody">
  <div class="row">
    <div class="col-md-6 col-sm-12 col-xs-12">
      <h2><em>¡Bienvenidos a Triki Triki Sport!</em></h2> 
      <p><em>Somos una tienda de deportes dirigida por expertos en el sector con más de 30 años 
	  de trayectoria profesional.</em></p>  
      <h5><em>Nuestra Filosofia</em></h5>
      <p><em>Nuestra filosofía siempre a sido la de dar a nuestros clientes lo que quieren y al mejor precio. 
	  Obviamente, sin nuestros clientes no somos nada, y trabajamos día a día, para darles los mejores productos al
	  mejor precio, junto con los mejores servicios.</em></p>
    </div>
    <!-- Carousel 1186*381-->
    <!--<div class="container-fluid" id="partBody">
      <div class="row" id="carouselGeneral">
	<div class="col-xs-12 col-sm-12 col-md-9">-->
    <div id="carousel" class="col-md-6 col-sm-12 col-xs-12" data-ride="carousel">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
	  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
	</ol>
	<div class="carousel-inner">
	  <div class="carousel-item active" style="witdh: 250px;">
	    <img src="Images/Sport_1.jpg" class="d-block w-100" alt="Imagen">
	  </div>
	  <div class="carousel-item " style="witdh: 250px;">
	    <img src="Images/Sport_2.jpg" class="d-block w-100" alt="Imagen">
	  </div>
	  <div class="carousel-item" style="witdh: 250px;">
	    <img src="Images/Sport_3.jpg" class="d-block w-100" alt="Imagen">
	  </div>
	  <div class="carousel-item" style="witdh: 250px;">
	    <img src="Images/Sport_4.jpg" class="d-block w-100" alt="Imagen">
	  </div>
	</div> 
      </div>
    </div>   
  </div>
</div>
<!--remove items from sales car-->
<script>
  localStorage.removeItem("carrito");
</script>