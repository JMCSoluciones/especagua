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
    <article class="content__products">
        <h2 class="content__products__title"><strong>Innovación en Cada Gota</strong> Descubre Nuestra Colección de Equipos de Última Generación para Transformar Tu Experiencia Hídrica.</h2>
        
        <!-- Item Filtros Suazizadores -->
        <div class="content__products__item" id="filtros_suavizadores">
            <h3 class="content__products__item__title">Filtros Suavizadores</h3>
            <img loading="lazy" class="content__products__item__img" src="./assets/images/products/filtro-suavizador.jpg" alt="Imagen de un filtro de agua">
            <div class="content__products__item__text">
                <p class="content__products__item__text-title">
                    Transforma tu agua
                </p>
                <p class="content__products__item__text-description">
                <strong>Filtros suavizadores de última generación</strong> eliminan impurezas, protegiendo tus electrodomésticos y ofreciendo una experiencia de agua suave y pura.
                </p>
            </div>
            <div class="content__products__item__link">
                <a href="http://" target="_blank" rel="">Más Información</a>
            </div>
        </div>
        <!-- Item Filtros de Carbón Multicama -->
        <div class="content__products__item" id="filtros_carbonMulticama">
            <h3 class="content__products__item__title">Filtros de Carbón Activado y Multicama</h3>
            <img loading="lazy" class="content__products__item__img" src="./assets/images/products/filtro-suavizador.jpg" alt="Imagen de un filtro de agua">
            <div class="content__products__item__text">
                <p class="content__products__item__text-title">
                    Pura excelencia
                </p>
                <p class="content__products__item__text-description">
                Nuestros filtros de carbón activado y multicama eliminan contaminantes, 
                <strong>garantizando agua cristalina y saludable para tu hogar</strong> 
                </p>
            </div>
            <div class="content__products__item__link">
                <a href="http://" target="_blank" rel="">Más Información</a>
            </div>
        </div>
         <!-- Item Equipos Priificadores de Luz Ultravioleta -->
         <div class="content__products__item" id="filtros_carbonMulticama">
            <h3 class="content__products__item__title">Equipos Priificadores de Luz Ultravioleta</h3>
            <img loading="lazy" class="content__products__item__img" src="./assets/images/products/filtro-suavizador.jpg" alt="Imagen de un filtro de agua">
            <div class="content__products__item__text">
                <p class="content__products__item__text-title">
                    Luz purificadora
                </p>
                <p class="content__products__item__text-description">
                Defiende tu salud con nuestros equipos UV. La tecnología de luz ultravioleta  
                <strong>elimina bacterias y virus, asegurando agua limpia y segura.</strong> 
                </p>
            </div>
            <div class="content__products__item__link">
                <a href="http://" target="_blank" rel="">Más Información</a>
            </div>
        </div>
         <!-- Item Osmosis inversa -->
         <div class="content__products__item" id="filtros_carbonMulticama">
            <h3 class="content__products__item__title">Osmosis Inversa</h3>
            <img loading="lazy" class="content__products__item__img" src="./assets/images/products/filtro-suavizador.jpg" alt="Imagen de un filtro de agua">
            <div class="content__products__item__text">
                <p class="content__products__item__text-title">
                 Pureza al revés
                </p>
                <p class="content__products__item__text-description">
                Descubre la perfección del agua con nuestra osmosis inversa.  
                <strong>Elimina impurezas y sabores, proporcionando un agua de calidad inigualable.</strong> 
                </p>
            </div>
            <div class="content__products__item__link">
                <a href="http://" target="_blank" rel="">Más Información</a>
            </div>
        </div>
         <!-- Item Calentadores Solares de Albercas -->
         <div class="content__products__item" id="filtros_carbonMulticama">
            <h3 class="content__products__item__title">Calentadores Solares de Albercas</h3>
            <img loading="lazy" class="content__products__item__img" src="./assets/images/products/filtro-suavizador.jpg" alt="Imagen de un filtro de agua">
            <div class="content__products__item__text">
                <p class="content__products__item__text-title">
                Energía sostenible
                </p>
                <p class="content__products__item__text-description">
                Con nuestros calentadores solares, <strong>disfruta de albercas cálidas y eficiencia energética,</strong> fusionando confort y responsabilidad ambiental.
                </p>
            </div>
            <div class="content__products__item__link">
                <a href="http://" target="_blank" rel="">Más Información</a>
            </div>
        </div>
         <!-- Item Equipos para albercas -->
         <div class="content__products__item" id="filtros_carbonMulticama">
            <h3 class="content__products__item__title">Equipos para albercas</h3>
            <img loading="lazy" class="content__products__item__img" src="./assets/images/products/filtro-suavizador.jpg" alt="Imagen de un filtro de agua">
            <div class="content__products__item__text">
                <p class="content__products__item__text-title">
                Albercas impecables
                </p>
                <p class="content__products__item__text-description">
                Ofrecemos equipos de vanguardia para <strong>mantener tu oasis en perfecto estado, garantizando diversión sin preocupaciones durante todo el año.</strong>
                </p>
            </div>
            <div class="content__products__item__link">
                <a href="http://" target="_blank" rel="">Más Información</a>
            </div>
        </div>
         <!-- Item Equipos Hidroneumáticos -->
         <div class="content__products__item" id="filtros_carbonMulticama">
            <h3 class="content__products__item__title">Equipos Hidroneumáticos</h3>
            <img loading="lazy" class="content__products__item__img" src="./assets/images/products/filtro-suavizador.jpg" alt="Imagen de un filtro de agua">
            <div class="content__products__item__text">
                <p class="content__products__item__text-title">
                Presión perfecta
                </p>
                <p class="content__products__item__text-description">
                Nuestros equipos hidroneumáticos ofrecen un suministro de agua constante y eficiente, <strong>garantizando un flujo perfecto en todo momento.</strong>
                </p>
            </div>
            <div class="content__products__item__link">
                <a href="http://" target="_blank" rel="">Más Información</a>
            </div>
        </div>
         <!-- Item Equipos de Velocidad Variable -->
         <div class="content__products__item" id="filtros_carbonMulticama">
            <h3 class="content__products__item__title">Equipos de Velocidad Variable</h3>
            <img loading="lazy" class="content__products__item__img" src="./assets/images/products/filtro-suavizador.jpg" alt="Imagen de un filtro de agua">
            <div class="content__products__item__text">
                <p class="content__products__item__text-title">
                Control total
                </p>
                <p class="content__products__item__text-description">
                Experimenta la eficiencia con nuestros equipos de velocidad variable. <strong>Optimiza el rendimiento y ahorra energía para un sistema de agua inteligente.</strong>
                </p>
            </div>
            <div class="content__products__item__link">
                <a href="http://" target="_blank" rel="">Más Información</a>
            </div>
        </div>
    </article>
    <article class="content__brands">
        <h2 class="content__brands__title"><strong>Excelencia Garantizada</strong> con Marcas de Renombre</h2>
        <p class="content__brands__text">Trabajamos con las mejores marcas, asegurando <strong>calidad y rendimiento inigualables</strong> en cada solución hídrica que ofrecemos.</p>
        <div class="content__brands__logos">
            <img loading="lazy" src="./assets/images/brands/purikor.jpg" alt="Logo de la marca putikor">
            <img loading="lazy" src="./assets/images/brands/altamira.jpg" alt="Logo de la marca altamira">
            <img loading="lazy" src="./assets/images/brands/franklin.jpg" alt="Logo de la marca franklin">
            <img loading="lazy" src="./assets/images/brands/aquapak.jpg" alt="Logo de la marca aquapak">
            <img loading="lazy" src="./assets/images/brands/espa.jpg" alt="Logo de la marca espa">
            <img loading="lazy" src="./assets/images/brands/hidrocontrol.jpg" alt="Logo de la marca hidrocontrol">

        </div>
    </article>
</section>
<?php include './components/footer.php'; ?>