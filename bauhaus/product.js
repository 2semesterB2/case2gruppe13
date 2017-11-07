// https://stackoverflow.com/questions/901115/how-can-i-get-query-string-values-in-javascript

// instant invoked function
$(function(){

  var products = [
      {"id":"radiator", "name":"Radiatorer", "location":"HYLDE 1103", "imageUrl": "images/plantegning.png"},
      {"id":"skruetrækker", "name":"Skruetrækker", "location":"HYLDE 1034", "imageUrl": "images/lucky.jpg"},
      {"id":"fil", "name":"Fil", "location":"HYLDE 1054", "imageUrl": ""}
  ];

var selectedProducts = {};
var product = getParameterByName('product');
for (var i = 0; i < products.length; i++) { //så længe at der er items i arrayet
  if (products[i].id == product) {
    $("#product-image").attr("src", products[i].imageUrl);
    $("#product-name").html(products[i].name);
    $("#product-location").html(products[i].location);
  }
}

  function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}
});
