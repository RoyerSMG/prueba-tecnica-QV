document.addEventListener('DOMContentLoaded', function() {          //se dispara cuando todo el html este cargado
    //obtenemos el id del input
    const inputNombre = document.getElementById('nombre');   
    //obtenemos la clase del span para el mensaje   
    const mensajeValidacionNombre = document.querySelector('.mensaje-validacion-nombre');  
    //Validamos que exista el input    
    if (inputNombre) {      
        validarEnTiempoReal(inputNombre, mensajeValidacionNombre);
    }

    //obtenemos el id del input
    const inputApellido = document.getElementById('apellido');   
    //obtenemos la clase del span para el mensaje
    const mensajeValidacionApellido = document.querySelector('.mensaje-validacion-apellido'); 
    //Validamos que exista el input  y llamamos a la funcion
    if (inputApellido) {   
        validarEnTiempoReal(inputApellido, mensajeValidacionApellido);
    }
});

function validarEnTiempoReal(input, mensajeValidacion) {
    if (!input) {
        return; // Salir si el input no existe
    }

    const regex = /^[A-Za-z]+$/;  // validamos que solo sean letras

    input.addEventListener('input', function(event) {
        const valor = input.value;
        const esValido = regex.test(valor);

        if (!esValido) { // si no es valido no manda un mensaje de error
            input.classList.add('error');
            mensajeValidacion.textContent = 'Solo se permiten letras.';
        } else {   // si insertamos algo valido remueve el mensaje y permite escribir
            input.classList.remove('error');
            mensajeValidacion.textContent = '';
        }

        // Evitar la inserción de números
        if (/[\d]/.test(valor)) {
            input.value = valor.replace(/\d/g, '');
        }
    });
}

// validar contraseas
function validarContraseña() {
    //Obtenemos los elementos que vamos a utilizar por medio de id y su clase
    const inputPassword = document.getElementById('password');                                          
    const inputConfirmarPassword = document.getElementById('confirmar_password');
    const mensajeValidacionPassword = document.querySelector('.mensaje-validacion-password');
    const mensajeValidacionConfirmacion = document.querySelector('.mensaje-validacion-confirmacion');

    //Se encargara de actualizar los mensajes y colores 
    function actualizarMensajes(sonIguales) {
        if (sonIguales) {
            inputPassword.classList.remove('error');
            inputConfirmarPassword.classList.remove('error');
            mensajeValidacionPassword.textContent = 'Contraseñas coinciden.';
            mensajeValidacionPassword.style.color = 'green';

            mensajeValidacionConfirmacion.textContent = 'Contraseñas coinciden.';
            mensajeValidacionConfirmacion.style.color = 'green';
        } else {
            inputPassword.classList.add('error');
            inputConfirmarPassword.classList.add('error');
            mensajeValidacionPassword.textContent = 'Las contraseñas no coinciden.';
            mensajeValidacionPassword.style.color = 'red';

            mensajeValidacionConfirmacion.textContent = 'Las contraseñas no coinciden.';
            mensajeValidacionConfirmacion.style.color = 'red';
        }
    }

    // se añade un escuchador para cuando se ingrese algo en el input y se actualiza mensaje
    inputPassword.addEventListener('input', function(event) {
        const valorPassword = inputPassword.value;
        const valorConfirmarPassword = inputConfirmarPassword.value;

        // Validación de ambas contraseñas
        const sonIguales = valorPassword === valorConfirmarPassword;
        actualizarMensajes(sonIguales);
    });

    inputConfirmarPassword.addEventListener('input', function(event) {
        const valorPassword = inputPassword.value;
        const valorConfirmarPassword = inputConfirmarPassword.value;

        // Validación de ambas contraseñas
        const sonIguales = valorPassword === valorConfirmarPassword;
        actualizarMensajes(sonIguales);
    });
}