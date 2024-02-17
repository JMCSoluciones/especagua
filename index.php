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
<?php include './components/footer.php'; ?>