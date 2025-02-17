const items = document.getElementById("Items");
const templateCard = document.getElementById("template-card").content;
const fragmento = document.createDocumentFragment();

const fetchData = async () => {
  try {
    const res = await fetch("api.json");
    const data = await res.json();
    mostrarProductos(data);
  } catch (error) {
    console.log(error);
  }
};

document.addEventListener("DOMContentLoaded", () => {
  fetchData();
});

const mostrarProductos = (data) => {
  data.forEach((producto) => {
    const clone = templateCard.cloneNode(true);

    clone.querySelector("h3").textContent = `Album ${producto.id}`;
    clone.querySelector("p").textContent = `Precio ${producto.id}`;
    clone.querySelector("img").setAttribute("src", producto.ThumbnailUrl);

    fragmento.appendChild(clone);
  });

  items.appendChild(fragmento);
};
