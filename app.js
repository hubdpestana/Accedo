let pokemonsList = document.getElementById("pokemons-list");
let links = document.getElementById("links");
function updatePokemons(url) {
  if (url) {
    pokemonsList.innerHTML = "";
    fetch(url)
      .then(res => res.json())
      .then(res => {
            for (let i of res.results) {
            fetch(i.url)
            .then(x => x.json())
            .then(x => {
              pokemonsList.innerHTML += `<div class="card">
              <img src="${x.sprites.front_default}" alt="">
              <p>${x.name}</p> 
              </div>`;
            });
        };
        links.innerHTML = (res.previous) ? `<button onclick="updatePokemons('${res.previous}')">Atrás</button>` : "";
        links.innerHTML += (res.next) ? `<button onclick="updatePokemons('${res.next}')">Siguiente</button>` : "";
      });
  }

}
updatePokemons("https://pokeapi.co/api/v2/pokemon");


function validar() {
  var response = grecaptcha.getResponse();
  if (response.length == 0) {
    alert("Debe verificar el Captcha para poder Iniciar Sesión");
    return false;
  } else {
    return true;
  }
}