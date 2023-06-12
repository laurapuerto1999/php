
//almacenar referencias a elementos DOM

const form = document.getElementById(form);
const nombreImput = document.getElementById(nombre);
const apellidosInput = document.getElementById(apelllidos);
const emailInput = document.getElementById(email);

//Agregar el evento submit al formulario
form.addEventListener('submit', function(event){
    event.preventDefault(); //evitar el envio por defecto
    validateForm();
});

// Función de validación de formulario
function validateForm(){
    const nombre = nombreInput.value.trim();
    const apellidos =apellidosInput.value.trim();
    const email = emailInput.value.trim();

    if(nombre === '' || apellidos === '' || email === '' ){
        alert('Completar campos'); // Mostrar mensaje de error si hay algún campo vacío
    } else{
        alert('Enviado');
        form.reset();
    }
}