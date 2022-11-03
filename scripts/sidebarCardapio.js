var button = document.getElementById("btn-cardapio");
var buttonDestaques = document.getElementById("btn-destaques");

button.addEventListener("click", function () {
  var boxCardapio = document.getElementById("boxCardapio");

  if (boxCardapio.style.display === "none") {
    boxCardapio.style.display = "block";
  } else {
    boxCardapio.style.display = "none";
  }
});

var buttonDestaques = document.getElementById("btn-destaques");

buttonDestaques.addEventListener("click", function () {
  var boxCardapio = document.getElementById("boxCardapio");

  if (boxCardapio.style.display == "block") {
    boxCardapio.style.display = "none";
  } else {
    boxCardapio.style.display = "block";
  }
});
