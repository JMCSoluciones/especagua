<?php 
include './components/head.php';
include './components/header.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!-- Slide Principal -->
<main class="empresa">
    <section class="empresa__banner">
        <div class="empresa__banner__box">
            <h1 class="empresa__banner__box__title">Nuestra Empresa</h1>
            <p class="empresa__banner__box__description">
                Somos una empresa con más de 20 años de experiencia en el tratamiento de agua.
                Nuestro mantenimiento garantiza eficiencia y durabilidad sin complicaciones.
            </p>
           
        </div>
        <div class="ctaForm">
                <?php include 'modalContacto.php';?>
            </div>
            <div class="formContact">
                <?php include 'formContact.php'; ?>
            </div>
    </section>
    <section class="empresa__content">
        <div class="empresa__content__title">
            <h2>
                Expertos en instalaciones de agua por más de 20 Años
               
            </h2>
        </div>
        <div class="empresa__content__description">
            <p>
            En ESPECAGUA, celebramos <strong>más de dos décadas proporcionando servicios especializados en agua</strong>. Nos enorgullece ofrecer instalaciones y mantenimientos profesionales de sistemas de agua con un enfoque centrado en el cliente.</p>
            <p><strong>Nuestra dedicación va más allá de la técnica; creemos en construir relaciones sólidas y duraderas con cada cliente.</strong> Únete a nosotros para experimentar la excelencia en cada gota.
            </p>
        </div>
        <section class="empresa__content__items">
            <article class="empresa__content__items__item">
                <div class="empresa__content__items__item__text">
                    <h3>Nuestra Visión</h3>
                    <p>ESPECAGUA busca ser líder en soluciones hídricas, brindando tecnología innovadora. <strong>Nuestra visión es crear comunidades sostenibles</strong>, proporcionando servicios de alta calidad y superando las expectativas del cliente.</p>
                </div>
            </article>
        <article class="empresa__content__items__item">
            <div class="empresa__content__items__item__text">
                <h3>Misión</h3>
                <p><strong>Nos comprometemos a ofrecer servicios hídricos excepcionales.</strong> Nos centramos en la <strong>calidad del servicio, la innovación y la satisfacción del cliente.</strong> Buscamos mejorar la vida a través de soluciones hídricas eficientes y sostenibles.</p>
            </div>
        </article>
        <article class="empresa__content__items__item">
            <div class="empresa__content__items__item__text">
                <h3>Objetivos a Corto Plazo</h3>
                <p>Priorizamos la excelencia en la instalación y mantenimiento. Nuestro objetivo a corto plazo es <strong>fortalecer aún más la satisfacción del cliente, adaptándonos a las necesidades cambiantes y manteniendo estándares de calidad inigualables.</strong>
</p>
            </div>
        </article>
        <article class="empresa__content__items__item">
            <div class="empresa__content__items__item__text">
                <h3>Objetivos a Largo Plazo</h3>
                <p>Con una mirada al futuro, aspiramos a expandir nuestro impacto, ofreciendo soluciones hídricas avanzadas a nivel nacional. Nuestro objetivo a largo plazo es <strong>ser reconocidos como referentes en la industria, manteniendo la calidad y la atención al cliente como pilares fundamentales.</strong></p>
            </div>
        </article>
        </section>
       
    </section>
    <section class="empresa__testimonios">
        <div class="empresa__testimonios__title">
            <h2>Testimonios que avalan la calidad de nuestros servicios </h2>
        </div>
        <div class="empresa__testimonios__content">
            <div class="empresa__testimonios__content__item">
                <div class="empresa__testimonios__content__item__text">
                    <p>“ESPECAGUA ha sido un socio confiable en el tratamiento de agua para mi empresa. Su equipo es profesional y siempre está dispuesto a ayudar. ¡Recomendados!”</p>
                </div>
                <div class="empresa__testimonios__content__item__author">
                    <p>— Juan Pérez, CEO de Agroindustrias Pérez</p>
                </div>
            </div>
            <div class="empresa__testimonios__content__item">
                <div class="empresa__testimonios__content__item__text">
                    <p>“ESPECAGUA ha sido un socio confiable en el tratamiento de agua para mi empresa. Su equipo es profesional y siempre está dispuesto a ayudar. ¡Recomendados!”</p>
                </div>
                <div class="empresa__testimonios__content__item__author">
                    <p>— Juan Pérez, CEO de Agroindustrias Pérez</p>
                </div>
            </div>
            <div class="empresa__testimonios__content__item">
                <div class="empresa__testimonios__content__item__text">
                    <p>“ESPECAGUA ha sido un socio confiable en el tratamiento de agua para mi empresa. Su equipo es profesional y siempre está dispuesto a ayudar. ¡Recomendados!”</p>
                </div>
                <div class="empresa__testimonios__content__item__author">
                    <p>— Juan Pérez, CEO de Agroindustrias Pérez</p>
                </div>
            </div>
            <div class="empresa__testimonios__content__item">
                <div class="empresa__testimonios__content__item__text">
                    <p>“ESPECAGUA ha sido un socio confiable en el tratamiento de agua para mi empresa. Su equipo es profesional y siempre está dispuesto a ayudar. ¡Recomendados!”</p>
                </div>
                <div class="empresa__testimonios__content__item__author">
                    <p>— Juan Pérez, CEO de Agroindustrias Pérez</p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include './components/footer.php'?>