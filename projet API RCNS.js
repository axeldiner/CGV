var id = Math.floor(Math.random() * 800);

  $.getJSON("https://pokeapi.co/api/v2/pokemon/" + id, function(data){
  $.getJSON("https://pokeapi.co/api/v2/pokemon-species/" + id, function(poke){

var name = "Name : " + data.name.charAt(0).toUpperCase() + data.name.slice(1);
var sprite = data.sprites.front_default;
var type = "Type : " + data.types[0].type.name.charAt(0).toUpperCase() + data.types[0].type.name.slice(1);
var weight = "Weight : " + data.weight / 10 + " kg";
var size = "Height : " + data.height / 10 + " meters";

if (poke.flavor_text_entries[0].language.name.indexOf("en") >= 0) {
  var description = "Description : " + poke.flavor_text_entries[0].flavor_text;
} else if (poke.flavor_text_entries[1].language.name.indexOf("en") >= 0) {
  var description = "Description : " + poke.flavor_text_entries[1].flavor_text;
} else if (poke.flavor_text_entries[2].language.name.indexOf("en") >= 0) {
  var description = "Description : " + poke.flavor_text_entries[2].flavor_text;
} else if (poke.flavor_text_entries[3].language.name.indexOf("en") >= 0) {
  var description = "Description : " + poke.flavor_text_entries[3].flavor_text;
} else if (poke.flavor_text_entries[4].language.name.indexOf("en") >= 0) {
  var description = "Description : " + poke.flavor_text_entries[4].flavor_text;
} else  {
  var description = "No description available";
}

$('.pokemon-sprite').attr("src", sprite);
$('.pokemon-name').append(name);
$('.pokemon-weight').append(weight);
$('.pokemon-size').append(size);
$('.pokemon-type').append(type);
$('.pokemon-description').append(description);
});
})
