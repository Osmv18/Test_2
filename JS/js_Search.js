$(search_products());
function search_products(request) {
  $.ajax({
    url: 'Controller/controller_search_product.php',
    type: 'POST',
    dataType: 'html',
    data: {request: request},
  })
  .done(function (answer) {
    $("#Datos").html(answer);
  })
  .fail(function () {
    console.log("Error");
  })
}