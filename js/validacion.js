export function valida(input) {
    const tipoInput = input.dataset.tipo;
    if (validadores[tipoInput]) {
        validadores[tipoInput](input);
    }

    console.log(input.parentElement);

    if (input.validity.valid) {
        // Código para un input válido
        console.log("Input válido");
    } else {
        // Código para un input inválido
        console.log("Input inválido");
    }
}
