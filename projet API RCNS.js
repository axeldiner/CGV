var id = "827905522";

  $.getJSON("https://entreprise.data.gouv.fr/api/rncs/v1/fiches_identite/" + id, function(data){




var name = "Name : " + data.name.charAt(0).toUpperCase() + data.name.slice(1);
var sprite = data.sprites.front_default;
var type = "Type : " + data.types[0].type.name.charAt(0).toUpperCase() + data.types[0].type.name.slice(1);
var weight = "Weight : " + data.weight / 10 + " kg";
var size = "Height : " + data.height / 10 + " meters";
