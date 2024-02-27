function desplazar(idCaja, boton, icono){
        let icono_vermas = document.getElementById(icono);
        let caja = document.getElementById(idCaja);
        let btnVerMas = document.getElementById(boton);
         caja.classList.toggle('hide');
         caja.classList.toggle('show');
         
         if (caja.classList.contains('show')) {
             btnVerMas.innerHTML = 'Ver menos';
             //cambia la ruta de la imagen icono_vermas
             icono_vermas.src = './assets/images/icons/arrow-up.svg';
             btnVerMas.appendChild(icono_vermas);
         }
         else {
             btnVerMas.innerHTML = 'Ver más';
             icono_vermas.src = './assets/images/icons/arrow-down.svg';
             btnVerMas.appendChild(icono_vermas);
 
         }
 
     
 }
