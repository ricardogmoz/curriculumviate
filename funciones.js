// cuadros.js

class CuadroDeTexto {
  constructor(ancho, textoPlaceholder) {
    this.ancho = ancho;
    this.textoPlaceholder = textoPlaceholder;
  }

  crearCuadro() {
    const div = document.createElement("div");
    div.classList.add("cuadro");

    const input = document.createElement("input");
    input.type = "text";
    input.placeholder = this.textoPlaceholder;

    div.appendChild(input);
    document.body.appendChild(div);

    // Establece el ancho del cuadro
    div.style.width = this.ancho;
  }
}

export default CuadroDeTexto;
