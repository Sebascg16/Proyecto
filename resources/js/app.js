const menu = document.querySelector('.sitiosturisticos');
const navegacion = document.querySelector('.navegacion');
const imagenes = document.querySelectorAll('img');
const btn = document.querySelector('.btn__suscripcion');

document.addEventListener('DOMContentLoaded', ()=>{
    eventos();
});

const eventos = () =>{
    menu.addEventListener('click',abrirMenu);
}

const abrirMenu = () =>{
    navegacion.classList.remove('ocultar');
    botonCerrar();

} 

const botonCerrar = () =>{
    const btnCerrar = document.createElement('p');
    const overlay = document.createElement('div');
    overlay.classList.add('pantalla-completa');
    const body = document.querySelector('body');
    if(document.querySelectorAll('.pantalla-completa').length > 0) return;
    body.appendChild(overlay);
    btnCerrar.textContent = 'x';
    btnCerrar.classList.add('btn-cerrar');

    while(navegacion.children[5]){
        navegacion.removeChild(navegacion.children[5]);
    }
    navegacion.appendChild(btnCerrar);
    cerrarMenu(btnCerrar,overlay);
}


imagenes.forEach(imagen=>{
    
    imagen.src = imagen.dataset.src;
});


const cerrarMenu = (boton,overlay) =>{
    boton.addEventListener('click',()=>{
        navegacion.classList.add('ocultar');
        overlay.remove();
    });

    overlay.onclick = function(){
        overlay.remove();
        navegacion.classList.add('ocultar');
    }


}

btn.addEventListener('click',()=>{
    Notification.requestPermission()
    .then(resultado => console.log(resultado));
});


if(Notification.permission === 'granted'){
    new Notification('Esto es una notificacion',{     
        icon: src='/imagenes/Logo.png',
        body: 'Aprendiendo JavaScrip'
    });
}