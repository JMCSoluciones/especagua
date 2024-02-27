<footer class="footer">
    <header class="footer__header">
        <div class="footer__header__item">
            <img src="./assets/images/icons/phone.svg" alt="Icono de un sobre">
            <div class="footer__header__item__text">
                <p><strong>Whatsapp </strong>449-201-7286</p>
                <a class="footer__header__item__text-link" href="#">Enviar mensaje</a>
            </div>
        </div>
        <div class="footer__header__item">
            <img src="./assets/images/icons/email.svg" alt="Icono de un sobre">
            <div class="footer__header__item__text">
                <a href="#">contacto@especagua.com</a>
            </div>
        </div>
    </header>
    <section class="footer__body">
        <div class="footer__body__logo">
            <img src="./assets/images/logo-blanco.svg" alt="Logo de ESPECAGUA color blanco">
        </div>
        <div class="footer__body__enlaces">
            <p class="footer__body__enlaces-title">
                <strong>Enlaces Directos</strong>
            </p>
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="empresa.php">Empresa</a></li>
                <li><a href="servicios.php">Equipos y Servicios</a></li>
                <li><a href="consejos.php">Consejos Hídricos</a></li>
                <li><a href="privacidad.php">Aviso de Privacidad</a></li>
            </ul>
        </div>
        <div class="footer__body__schedule">
            <p class="footer__body__schedule-title"><strong>Horarios de atención</strong></p>
            <div class="footer__body__schedule-hours">
                <div class="footer__body__schedule-hours-item">
                    <p>Lunes a Viernes: </p>
                    <p>9:00am - 6:00 pm</p>
                </div>
                <div class="footer__body__schedule-hours-item">
                    <p>Sábado: </p>
                    <p>9:00am - 2:00 pm</p>
                </div>
                <div class="footer__body__schedule-hours-item">
                    <p>Domingo: </p>
                    <p>Cerrado</p>
                </div>
            </div>
        </div>
        <div class="footer__body__redes">
            <p class="footer__body__redes-title">
                SÍGUENOS
            </p>
            <a href="#">
                <img src="./assets/images/icons/facebook.svg" alt="">
            </a>
        </div>
    </section>
    <footer class="footer__footer">
        <p><strong>  <?php
        $year = date("Y");
        echo $year;
        ?></strong></p>
       
        <p>Desarrollado por <a href="https://jmcsoluciones.com"><strong>JMC Soluciones</strong></a></p>
        <img src="https://jmcsoluciones.com/assets/images/isoJMC.svg" alt="Logotipo de JMC">
    </footer>
</footer>
<script src="./js/app-dist.js"></script>
<script src="./js/script.js"></script>


</body>
</html>