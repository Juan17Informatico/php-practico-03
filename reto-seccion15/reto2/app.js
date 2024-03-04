const cantidad = document.getElementById("cantidad");
const form = document.querySelector("form");
const calcularCantidad = document.querySelector("#calcular");
const productsDiv = document.querySelector(".products");

calcularCantidad.addEventListener("click", () => {
    if (cantidad.value) {
        createElementInput(cantidad.value);
    }else{
        return;
    }
});

const createElementInput = (cant) => {
    for (let i = 1; i <= cant; i++) {
        const input = document.createElement("input");
        const label = document.createElement("label");
        const div = document.createElement("div");
        input.setAttribute("id", `product${i}`);
        input.setAttribute("name", `product${i}`);
        input.setAttribute("class", `products-input`);
        label.setAttribute("for", `product${i}`);
        label.innerText = `Producto ${i}`;

        productsDiv.append(div);
        div.appendChild(label);
        div.appendChild(input);
    }

    // <button type="submit">Enviar Resultado</button>



};
