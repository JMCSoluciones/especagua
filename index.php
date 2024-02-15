<?php
include './components/head.php';
include './components/header.php';
?>
<div id="carouselExampleFade" class="carousel slide carousel-fade">
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
                    <p>Optimiza</p>
                    <h2 class="slideRight">tu <strong>sistema de riego</strong></h2>
                    <p>Nuestro mantenimiento garantiza eficiencia y durabilidad sin complicaciones.</p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> Escíbenos
                    </button>
                </div>

            </div>
        </div>
        <!-- <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
        </div> -->
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>

</div>
<?php include 'modalContacto.php'; ?>


<?php include './components/footer.php' ?>