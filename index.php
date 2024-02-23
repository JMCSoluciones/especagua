<?php include './components/head.php';?>
<?php include './components/header.php';?>
<div id="carouselExample" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
        <div class="carousel-item active">
            <picture class="carousel-item__img">
                <source media="(min-width:1110px)" srcset="./assets/images/Desktop/DesktopSlides-722x1048-1.jpg" />
                <source media="(min-width:768px)" srcset="./assets/images/tablet/tabletSlides-722x1048-1.jpg" /><img
                    class="d-block w-100" src="./assets/images/mobile/mobileSlides-722x1048-1.jpg"
                    alt="Imagen de un aspersor de agua mojando el pasto" />
            </picture>
            <div class="slideContent">
                <div class="slideContent__box">
                    <span class="slideContent__box__span">GARANTIA TOTAL</span>
                    <h2 class="slideContent__box__title">Optimiza <strong>tu sistema de riego</strong></h2>
                    <p class="slideContent__box__text">Nuestro mantenimiento garantiza eficiencia y durabilidad sin complicaciones.</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <picture class="carousel-item__img">
                <source media="(min-width:1110px)" srcset="./assets/images/Desktop/DesktopSlides-722x1048-2.jpg" />
                <source media="(min-width:768px)" srcset="./assets/images/tablet/tabletSlides-722x1048-2.jpg" /><img
                    class="d-block w-100" src="./assets/images/mobile/mobileSlides-722x1048-2.jpg"
                    alt="Imagen de una regadera para baño funcionando" />
            </picture>
            <div class="slideContent">
                <div class="slideContent__box">
                    <h2 class="slideContent__box__title">Transforma tu hogar con nuestros <strong>calentadores solares</strong></h2>
                    <p class="slideContent__box__text">Venta, instalación y mantenimiento impecables para una energía sostenible y agua caliente sin límites.</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <picture class="carousel-item__img">
                <source media="(min-width:1110px)" srcset="./assets/images/Desktop/DesktopSlides-722x1048-3.jpg" />
                <source media="(min-width:768px)" srcset="./assets/images/tablet/tabletSlides-722x1048-3.jpg" /><img
                    class="d-block w-100" src="./assets/images/mobile/mobileSlides-722x1048-3.jpg"
                    alt="Imagen de un aspersor de agua mojando el pasto" />
            </picture>
            <div class="slideContent">
                <div class="slideContent__box">
                    <h2 class="slideContent__box__title">Pureza y suavidad del agua<strong> aseguradas</strong></h2>
                    <p class="slideContent__box__text">Descubre nuestra gama premium de filtros y suavizadores para un riego perfecto.</p>
                </div>
            </div>
        </div>
        <?php include 'modalContacto.php'; ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<section class="content">
    <article class="content__title">
        <h1>Experiencia en instalaciones de agua por <strong>más de 20 Años</strong></h1>
        <h3>Expertos en agua con un legado de excelencia.</h3>
        <a href="http://" target="_blank" rel="">Conócenos</a>
    </article>
    <article class="content__backBox">
        <div class="content__backBox__title">
            <h2>Para nosotros,<strong> tu tranquilidad y bienestar son nuestra prioridad.</strong>  ¿Por qué elegirnos?</h2>
        </div>
        <div class="content__backBox__item">
            <img src="./assets/images/icons/hands.svg" alt="Icono de dos manos estrechandose">
            <h2>Atención personalizada</h2>
            <p>Conoce nuestra gama de productos para riego y mantenimiento de jardines y áreas verdes.Nos adaptamos a tus necesidades para soluciones a medida.</p>
        </div>
        <div class="content__backBox__item">
            <img src="./assets/images/icons/globe.svg" alt="Icono de un globo simulando un planeta">
            <h2>Tecnología de Vanguardia</h2>
            <p>Utilizamos lo último para garantizar eficiencia y calidad.</p>
        </div>
        <div class="content__backBox__item">
            <img src="./assets/images/icons/flower.svg" alt="Icono de una flor">
            <h2>Compromiso Sostenible</h2>
            <p>Contribuimos a un futuro más verde con enfoque en la sostenibilidad.</p>   
        </div>
        <div class="content__backBox__item">
            <img src="./assets/images/icons/check.svg" alt="Icono de un check">
            <h2>Satisfacción Garantizada</h2>
            <p>Tu contento es nuestro éxito. Confía en nosotros para transformar tu experiencia con el agua.</p>
        </div>

    </article>
    <?php include 'equipos.php';?>
</section>
<?php include './components/footer.php'; ?>