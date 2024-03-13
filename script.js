async function listarDatos(urlAPI) {
  const respuesta = await fetch(urlAPI);
  const datos = await respuesta.json();
  const cuerpoTabla = document.querySelector("tbody");
  cuerpoTabla.innerHTML = "";
  for (const dato of datos) {
    const fila = document.createElement("tr");
    for (const propiedad in dato) {
      const celda = document.createElement("td");
      celda.textContent = dato[propiedad];
      fila.appendChild(celda);
    }
    cuerpoTabla.appendChild(fila);
  }
}
