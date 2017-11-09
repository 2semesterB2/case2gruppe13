// https://stackoverflow.com/questions/901115/how-can-i-get-query-string-values-in-javascript

// instant invoked function
$(function(){

  var products = [
      {"id":"radiator", "name":"Radiatorer,", "location":"HYLDE 1103", "imageUrl": "images/plan-radiator.png"},
      {"id":"ventilation", "name":"Ventilation,", "location":"GANG 13, HYLDE 1050 - 1052", "imageUrl": "images/plan-vvs-artikler.png"},
      {"id":"fil", "name":"Fil,", "location":"HYLDE 1054", "imageUrl": ""},
	  
	  
	  {"id":"vandvarmere", "name":"Vandvarmere,", "location":"GANG 13, HYLDE 1049", "imageUrl": "images/plan-vandvarmere.png"},
	  {"id":"gulvvarme", "name":"Gulvvarme,", "location":"GANG 14, HYLDE 1059", "imageUrl": "images/plan-gulvvarme.png"},
	  {"id":"udendorshaner", "name":"Udendørshaner,", "location":"GANG 13, HYLDE 1057", "imageUrl": "images/plan-udendorshaner.png"},
	  {"id":"cirkulation", "name":"Cirkulationspumper,", "location":"GANG 12, HYLDE 1041", "imageUrl": "images/plan-cirkulation.png"},
	  {"id":"varmegenvinding", "name":"Varmegenvinding,", "location":"GANG 12, HYLDE 1041", "imageUrl": "images/plan-cirkulation.png"},
	  {"id":"varmekabler", "name":"Varmekabler,", "location":"GANG 12, HYLDE 1041", "imageUrl": "images/plan-cirkulation.png"},
	  
  ];

var selectedProducts = {};
var product = getParameterByName('product');
for (var i = 0; i < products.length; i++) { //så længe at der er items i arrayet
  if (products[i].id == product) {
    $("#product-image").attr("src", products[i].imageUrl);
    $("#product-name").html(products[i].name + " " + products[i].location);
    //$("#product-location").html(products[i].location);//
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
