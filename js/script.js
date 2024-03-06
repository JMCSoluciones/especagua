  // Obtener el formulario utilizando el valor de infoId
  const form = document.querySelector('#formularioC');
  // Escuchar el evento submit del formulario
  form.addEventListener('submit', function (event){
  event.preventDefault();
 
  const xhr = new XMLHttpRequest();

   // Crear un objeto FormData y agregar los datos del formulario
    const formData = new FormData();
    formData.append('nombre', form.nombre.value);
    formData.append('telefono', form.telefono.value);
    formData.append('email', form.email.value);
    formData.append('mensaje', form.mensaje.value);
    formData.append('oculto', form.oculto.value);
    // Agregar el valor del campo reCAPTCHA
    const recaptchaResponse = grecaptcha.getResponse();
    formData.append('g-recaptcha-response', recaptchaResponse);
 
    //WAITING PROGRESS
     //Crear un elemento de imagen y establecer su atributo src en la URL de la imagen GIF
    var img = $('<img>', { src: 'assets/images/wait.gif' });
    $(`#mensaje_Contacto`).removeClass('alert-danger');
    $(`#mensaje_Contacto`).removeClass('alert-success');
    $('#mensaje-imagen').remove();
    $(`#mensaje_Contacto`).html(img);

  xhr.upload.onprogress = function(event){       
    // Actualizar el contenido de la imagen de carga
  img.attr('src', 'assets/images/wait.gif');
  };

  // Enviar los datos con AJAX
    xhr.open('POST', 'process.php');
    xhr.onload = function () {
    //   $(`#formulario`).addClass('slideDown');
      if (xhr.status === 200) {
        $(`#mensaje_Contacto`).empty();
        var mensaje = xhr.responseText;
        $(`#mensaje_Contacto`).html(mensaje);
        var botonCerrar = $('<button>');
          botonCerrar.attr({
            type: "button",
            class: "btn-close",
            "data-bs-dismiss": "alert",
            "aria-label": "Close"
          });
        if(mensaje.includes('Error')){
          $(`#mensaje_Contacto`).addClass('alert-dismissible');
          $(`#mensaje_Contacto`).addClass('alert');
          $(`#mensaje_Contacto`).addClass('fade');
          $(`#mensaje_Contacto`).addClass('show');
          $(`#mensaje_Contacto`).addClass('alert-danger');
          $(`#mensaje_Contacto`).removeClass('alert-success');
          $(`#mensaje_Contacto`).attr("role", 'alert');
          $(`#mensaje_Contacto`).append(botonCerrar);      
        }else if(mensaje.includes('exitosa')){
          $(`#mensaje_Contacto`).addClass('alert');
          $(`#mensaje_Contacto`).addClass('alert-dismissible');
          $(`#mensaje_Contacto`).addClass('fade');
          $(`#mensaje_Contacto`).addClass('show');
          $(`#mensaje_Contacto`).removeClass('alert-danger');
          $(`#mensaje_Contacto`).addClass('alert-success');
          $(`#mensaje_Contacto`).attr("role", 'alert');
          $(`#mensaje_Contacto`).append(botonCerrar);      
          $(`#formContact`)[0].reset();
        }
      
  };
  }
  xhr.send(formData);
  });


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
 
    