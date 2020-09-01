<body background='Images/back9.jpg'>
    <?php include 'Views/header.php'; ?>
<div class="container" id="tablaProductos">
  <div class="col-xs-12 col-sm-12 col-md-8">
    <table class="table">
      <thead id="tableRandom">
	<tr>
	  <th scope="col">Código</th>
	  <th scope="col">Producto</th>
	  <th scope="col">Categoria</th>
	  <th scope="col">Precio</th>
	  <th scope="col">Descripción</th>
	</tr>
      </thead>
      <tbody id="tbodysalesList">
      </tbody>
    </table>
    
  </div>
</div>
</body>
<?php include 'Views/footer.php'; ?>
<script>
  var listSales = JSON.parse(localStorage.getItem("carrito"));
  console.log(listSales);
  var table = document.getElementById("tbodysalesList");
  listSales.forEach(function(json){
    //Create table "tr"
    var tr = document.createElement("tr");
    //Get data
    var id_product = document.createElement("th");
    var name_product = document.createElement("th");
    var categorie = document.createElement("th");
    var price = document.createElement("th");
    var description = document.createElement("th");
    //View data in web
    id_product.innerHTML = json.id_product;
    name_product.innerHTML = json.name_product;
    categorie.innerHTML = json.categorie;
    price.innerHTML = json.price;
    description.innerHTML = json.description;
    //add elements
    table.appendChild(tr);
    tr.appendChild(id_product);
    tr.appendChild(name_product);
    tr.appendChild(categorie);
    tr.appendChild(price);
    tr.appendChild(description);
    
  });
  
</script>