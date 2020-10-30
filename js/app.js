//selectores del formulario
const formulario = document.querySelector('#formulario');

document.addEventListener('DOMContentLoaded', () => {
    formulario.addEventListener('submit', validarFormulario);
})



function validarFormulario(e) {

    e.preventDefault();

    const nombre = document.querySelector('#nombre').value;
    const correo = document.querySelector('#correo').value;
    const mensaje = document.querySelector('#mensaje').value;

    if (nombre.length == 0 || correo.length == 0 || mensaje.length == 0) {
        alerta('Todos los Campos son Obligatorios');

        return;
    }
    
    this.submit();
}


function alerta(mensaje) {


    const alerta = document.createElement('p');

    alerta.classList.add('alert', 'alert-warning', 'text-center');
    alerta.textContent = mensaje;
    formulario.appendChild(alerta);


    setTimeout(() => {
        alerta.remove();
    }, 3000);

}




// scroll reveal animation
AOS.init({
    duration: 1000
});