<div class="FormularioContacto">
    <h2>
        Solicita una Cotización
    </h2>
    <p> Descubre soluciones hídricas a medida. <br> <strong>¡Llena el formulario ahora! </strong><br> Tu bienestar comienza con una comunicación personalizada.</p>
    <form action="process.php" method="POST" id="formulario">
        <div class="form-floating mb-3">
            <input class="form-control form-control-lg" placeholder="Ingrese su nombre completo" type="text" name="nombre"
                aria-describedby="nombre" maxlength="30" minlength="3" required id="nombre_form"
                pattern="[A-Za-z0-9_-]{3,30}" />
            <label for="nombre_form">Nombre Completo</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control form-control-lg" type="tel" name="telefono" minlength="10" maxlength="10"
                aria-describedby="telefono" required placeholder="Ingrese su télefono" id="telefono_form" />
            <label for="telefono_form">Teléfono a 10 dígitos</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control form-control-lg" type="email" name="email" aria-describedby="email"
                placeholder="Email válido" id="email_form" />
            <label for="email_form" required>Email válido</label>
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control form-control-lg" type="text" name="mensaje" aria-describedby="mensje"
                placeholder="Ingrese su mensaje" id="mensaje_form" maxlength="360"></textarea>
            <label for="mensaje_form">Mensaje</label>
        </div>
        <div class="form-floating mb-3">
            <div class="g-recaptcha" data-sitekey="6LeYiHYpAAAAAG0zMG_SNrvLTZv1NL1wZeSEKsEb"></div>
        </div>
        <div class="modal-body__buttons modal-footer">
            <button class="btn btn-primary btn-lg" onclick="" type="submit">
                Enviar
            </button>
        </div>
        <input type="hidden" name="oculto" value="1" />
        <div class="form-floating mb-3">
            <div class="" id="mostrar_mensaje"></div>
        </div>
    </form>
</div>