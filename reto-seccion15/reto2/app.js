const cantidad = document.getElementById("cantidad");
const form = document.querySelector("form");
const calcularCantidad = document.querySelector("#calcular");
const productsDiv = document.querySelector(".products");

calcularCantidad.addEventListener("click", () => {
    if (cantidad.value) {
        createElementInput(cantidad.value);
        calcularCantidad.disabled = true;
    } else {
        return;
    }
});

const createElementInput = (cant) => {
    for (let i = 1; i <= cant; i++) {
        const inputAncho = document.createElement("input");
        const inputAltura = document.createElement("input");
        const divPadre = document.createElement("div");
        const divHijo1 = document.createElement("div");
        const divHijo2 = document.createElement("div");
        const labelAncho = document.createElement("label");
        const labelAltura = document.createElement("label");
        const productTitle = document.createElement("p");

        productTitle.innerText = `Producto ${i}`;
        labelAncho.innerText = "Ancho";
        labelAltura.innerText = "Altura";

        labelAncho.setAttribute("for", `ancho-${i}`);
        labelAltura.setAttribute("for", `altura-${i}`);

        inputAncho.setAttribute("class", "products-input");
        inputAncho.setAttribute("id", `ancho-${i}`);
        inputAncho.setAttribute("name", `ancho-${i}`);

        inputAltura.setAttribute("class", "products-input");
        inputAltura.setAttribute("id", `altura-${i}`);
        inputAltura.setAttribute("name", `altura-${i}`);

        productsDiv.appendChild(divPadre);
        divPadre.append(productTitle, divHijo1, divHijo2);
        divHijo1.append(labelAncho, inputAncho);
        divHijo2.append(labelAltura, inputAltura);
        // <div>
        //                             <p>Producto 1</p>
        //                             <div>
        //                                 <label for="">Ancho</label>
        //                                 <input type="text" class="products-input" product1-ancho>
        //                             </div>
        //                             <div>

        //                                 <label for="">Alto</label>
        //                                 <input type="text" class="products-input" product1-altura>
        //                             </div>

        //                         </div>
    }
    const buttonSubmit = document.createElement("button");
    const divButton = document.createElement("div");
    buttonSubmit.innerText = "Enviar Resultado";
    buttonSubmit.setAttribute("type", "submit");
    productsDiv.append(divButton);
    divButton.append(buttonSubmit);
    // <button type="submit">Enviar Resultado</button>
};
