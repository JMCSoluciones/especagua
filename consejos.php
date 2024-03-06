<?php 
include './components/head.php';
include './components/header.php';
?>
<!-- Slide Principal -->
<main class="consejos">
    <section class="consejos__banner">
        <div class="consejos__banner__box">
            <h1 class="consejos__banner__box__title">Saber es cuidar</h1>
            <p class="consejos__banner__box__description">
                <strong>Consejos Infalibles para el uso consciente del agua.</strong>
            </p>
            <p class="consejos__banner__box__description_sub">
                Descubre las Claves para Preservar Nuestro Recurso más Preciado.        
            </p>
            <div class="ctaForm slideUp">
                <?php include 'modalContacto.php';?>
            </div>
            <div class="formContact slideUp">
                <?php include 'formContact.php'; ?>
            </div>
        </div>
    </section>
    <section class="consejos__content">
        <div class="consejos__content__title">
            <span>Aquí y Ahora</span>
            <h2>Descubre Consejos Esenciales para el Ahorro y Uso Inteligente del Agua. </h2>
        </div>
        <div class="consejos__content__description">
            <p>
            <!-- Resumen de los equipos y consejos que ofrecemos-->
            En ESPECAGUA, ofrecemos una amplia gama de consejos de instalación y mantenimiento de sistemas de agua. Nuestro equipo de expertos se especializa en la instalación y mantenimiento de sistemas de agua para la industria, comercio y hogar. <strong>¡Optimiza Tu Consumo con Nuestras Recomendaciones Expertas!</strong>
            </p>
        </div>
        <section class="consejos__content__items">
            <!-- Consejo 1 -->
            <article class="consejos__content__items__item" id="c1">
                <div class="consejos__content__items__item__text">
                    <div class="consejos__content__items__item__text__extract">
                        <h3>Riego Eficiente para un Mañana Sostenible</h3>
                        <p>El riego eficiente es un pilar para una agricultura sostenible. La sobreirrigación y la subirrigación pueden llevar a pérdidas de agua significativas y afectar la salud de las plantas. La ciencia detrás de esto radica en optimizar el suministro de agua según las necesidades específicas de cada cultivo.</p>
                    </div>
                    <div class="consejos__content__items__item__text__content hide" id="content_c1">
                        <p>Investigaciones agronómicas indican que la sobreirrigación puede provocar la lixiviación de nutrientes del suelo, mientras que la subirrigación puede resultar en estrés hídrico. Ajustar el tiempo y la frecuencia de riego según la evapotranspiración de la región y las necesidades específicas de cada planta es esencial. La implementación de sensores de humedad del suelo mejora aún más la precisión del riego, evitando desperdicios.
                        Adoptar prácticas de riego eficientes no solo conserva agua, sino que también optimiza la salud de los cultivos y preserva la sostenibilidad a largo plazo de la agricultura.</p>
                    </div>
                    
                </div>
                <button type="button" class="btn-mas" id="btnc1" onclick="desplazar('content_c1','btnc1','vericon1')">Ver más
                        <img id="vericon1" src="./assets/images/icons/arrow-down.svg" alt="icono de una flecha que apunta hacia abajo">
                    </button>
            </article>
            <!-- Consejo 2 -->
            <article class="consejos__content__items__item" id="c2">
                <div class="consejos__content__items__item__text">
                    <div class="consejos__content__items__item__text__extract">
                        <h3>Filtros Limpios, Agua Pura"</h3>
                        <p>La calidad del agua es esencial para la salud humana y la durabilidad de equipos. La ciencia detrás de los filtros de agua se basa en la retención de partículas y contaminantes. Un filtro obstruido reduce la eficacia del proceso y compromete la calidad del agua.</p>
                    </div>
                    <div class="consejos__content__items__item__text__content hide" id="content_c2">
                        <p>Los estudios de la Organización Mundial de la Salud destacan la eficacia de los filtros en la eliminación de bacterias, sedimentos y compuestos químicos. Un filtro de carbón activado, por ejemplo, adsorbe contaminantes orgánicos. Mantener los filtros limpios asegura una filtración efectiva y mejora la calidad del agua, protegiendo tanto la salud como la funcionalidad de los equipos.
                        La limpieza regular de los filtros es esencial para mantener la eficacia del proceso de filtración, proporcionando agua pura y protegiendo la salud y la integridad de los sistemas.
                        </p>
                    </div>
                    
                </div>
                <button type="button" class="btn-mas" id="btnc2" onclick="desplazar('content_c2','btnc2','vericon2')">Ver más
                        <img id="vericon2" src="./assets/images/icons/arrow-down.svg" alt="icono de una flecha que apunta hacia abajo">
                    </button>
            </article>
            <!-- Consejo 3 -->
            <article class="consejos__content__items__item" id="c3">
                <div class="consejos__content__items__item__text">
                    <div class="consejos__content__items__item__text__extract">
                        <h3>Tuberías Sin Fugas, Agua Sin Pérdida</h3>
                        <p>Las fugas en las tuberías son una amenaza silenciosa para la eficiencia hídrica. La ciencia detrás de las fugas se vincula con la presión y la integridad estructural del sistema. Una pequeña fuga puede indicar problemas más grandes.</p>
                    </div>
                    <div class="consejos__content__items__item__text__content hide" id="content_c3">
                        <p>Estudios hidráulicos resaltan que incluso una pequeña fuga puede resultar en la pérdida significativa de agua a lo largo del tiempo. La implementación de tecnologías como sensores de fugas y análisis termográficos facilita la detección temprana. Reparar las fugas de inmediato no solo conserva agua, sino que también evita daños estructurales y costosas reparaciones a largo plazo.
                        La inspección regular y la pronta reparación de fugas son prácticas cruciales para conservar el agua y mantener la integridad de la infraestructura hídrica.
                        </p>
                    </div>
                    
                </div>
                <button type="button" class="btn-mas" id="btnc3" onclick="desplazar('content_c3','btnc3','vericon3')">Ver más
                        <img id="vericon3" src="./assets/images/icons/arrow-down.svg" alt="icono de una flecha que apunta hacia abajo">
                    </button>
            </article>
            <!-- Consejo 4 -->
            <article class="consejos__content__items__item" id="c4">
                <div class="consejos__content__items__item__text">
                    <div class="consejos__content__items__item__text__extract">
                        <h3>Suaviza tu Agua, Protege tu Hoga</h3>
                        <p>La dureza del agua, causada por minerales como el calcio y el magnesio, puede tener impactos negativos en los electrodomésticos y las tuberías. La ciencia detrás de los suavizadores radica en el intercambio iónico para reducir estos minerales.</p>
                    </div>
                    <div class="consejos__content__items__item__text__content hide" id="content_c4">
                        <p>Investigaciones en ingeniería química han demostrado que los suavizadores de agua utilizando resinas de intercambio iónico eliminan eficazmente la dureza del agua. Esto no solo previene la acumulación de sarro en electrodomésticos, sino que también mejora la eficiencia de detergentes al reducir la dureza del agua. Mantener estos suavizadores en funcionamiento óptimo es esencial para maximizar estos beneficios.
                        El suavizado del agua no solo protege tus electrodomésticos y tuberías, sino que también mejora la eficiencia y prolonga la vida útil de estos componentes.</p>
                    </div>
                    
                </div>
                <button type="button" class="btn-mas" id="btnc4" onclick="desplazar('content_c4','btnc4','vericon4')">Ver más
                        <img id="vericon4" src="./assets/images/icons/arrow-down.svg" alt="icono de una flecha que apunta hacia abajo">
                    </button>
            </article>
            <!-- Consejo 5 -->
            <article class="consejos__content__items__item" id="c5">
                <div class="consejos__content__items__item__text">
                    <div class="consejos__content__items__item__text__extract">
                        <h3>Instalación de Sistemas de Osmosis Inversa para Agua Pura</h3>
                        <p>La osmosis inversa es una tecnología probada para obtener agua pura. La ciencia detrás de este proceso se basa en la presión y la semipermeabilidad de las membranas.
                        </p>
                    </div>
                    <div class="consejos__content__items__item__text__content hide" id="content_c5">
                        <p>Estudios en ingeniería de membranas confirman que la osmosis inversa utiliza membranas semipermeables para eliminar eficientemente impurezas, bacterias y microorganismos del agua. Instalar estos sistemas garantiza que tu suministro de agua potable sea seguro y de alta calidad. La ciencia respalda la eficacia y fiabilidad de este método.
                        La inversión en sistemas de osmosis inversa no solo proporciona agua pura, sino que también reduce la dependencia de agua embotellada, promoviendo la sostenibilidad y la reducción de residuos plásticos.</p>
                    </div>
                    
                </div>
                <button type="button" class="btn-mas" id="btnc5" onclick="desplazar('content_c5','btnc5','vericon5')">Ver más
                    <img id="vericon5" src="./assets/images/icons/arrow-down.svg" alt="icono de una flecha que apunta hacia abajo">
                </button>
            </article>
            <!-- Consejo 6 -->
            <article class="consejos__content__items__item" id="c6">
                <div class="consejos__content__items__item__text">
                    <div class="consejos__content__items__item__text__extract">
                        <h3>Calentadores Solares para Albercas: Eficiencia y Sostenibilidad</h3>
                        <p>Los calentadores solares son una solución eficiente y sostenible para mantener la temperatura del agua de las piscinas. La ciencia detrás de esto se relaciona con la absorción de energía solar.</p>
                    </div>
                    <div class="consejos__content__items__item__text__content hide" id="content_c6">
                        <p>Investigaciones en energía solar demuestran que los paneles solares absorben la energía del sol y la transfieren al agua de la piscina. Este método es respetuoso con el medio ambiente y ahorra costos operativos a largo plazo. La ciencia solar respalda la eficiencia y sostenibilidad de esta tecnología.
                        Optar por calentadores solares no solo brinda una experiencia de piscina cálida durante todo el año, sino que también contribuye a la conservación de recursos y la reducción de la huella de carbono.</p>
                    </div>
                    
                </div>
                <button type="button" class="btn-mas" id="btnc6" onclick="desplazar('content_c6','btnc6','vericon6')">Ver más
                        <img id="vericon6" src="./assets/images/icons/arrow-down.svg" alt="icono de una flecha que apunta hacia abajo">
                    </button>
            </article>
            <!-- Consejo 7 -->
            <article class="consejos__content__items__item" id="c7">
                <div class="consejos__content__items__item__text">
                    <div class="consejos__content__items__item__text__extract">
                        <h3>Equipos Hidroneumáticos: Garantizando una Presión Óptima</h3>
                        <p>La presión del agua es esencial para el rendimiento eficiente de sistemas de agua. La ciencia detrás de los equipos hidroneumáticos implica el equilibrio entre la capacidad de bombeo y el almacenamiento de presión.</p>
                    </div>
                    <div class="consejos__content__items__item__text__content hide" id="content_c7">
                        <p>Estudios de ingeniería hidráulica indican que estos equipos combinan una bomba y un tanque de presión para mantener una presión constante. Mantener estos equipos en buen estado es crucial para evitar problemas de presión y garantizar un rendimiento óptimo de sistemas de riego y suministro de agua.
                        La inversión en equipos hidroneumáticos no solo asegura una presión adecuada, sino que también previene daños a electrodomésticos y garantiza la eficiencia de sistemas de agua en toda tu propiedad.</p>
                    </div>
                    
                </div>
                <button type="button" class="btn-mas" id="btnc7" onclick="desplazar('content_c7','btnc7','vericon7')">Ver más
                        <img id="vericon7" src="./assets/images/icons/arrow-down.svg" alt="icono de una flecha que apunta hacia abajo">
                    </button>
            </article>
            <!-- Consejo 8 -->
            <article class="consejos__content__items__item" id="c8">
                <div class="consejos__content__items__item__text">
                    <div class="consejos__content__items__item__text__extract">
                        <h3>Equipos de Velocidad Variable: Eficiencia Energética y Rendimiento Óptimo</h3>
                        <p>Los equipos de velocidad variable son fundamentales para la eficiencia energética de sistemas de agua. La ciencia detrás de esto implica la adaptabilidad de la velocidad según la demanda.</p>
                    </div>
                    <div class="consejos__content__items__item__text__content hide" id="content_c8">
                        <p>Investigaciones en ingeniería eléctrica confirman que estos equipos ajustan automáticamente su velocidad de funcionamiento, reduciendo el consumo de energía en momentos de baja demanda. La eficiencia energética se traduce en ahorros significativos a lo largo del tiempo y una menor huella ambiental. La ciencia respalda la optimización de estos equipos.

                        Adoptar equipos de velocidad variable no solo mejora la eficiencia, sino que también contribuye a la conservación de recursos al minimizar el uso innecesario de energía.</p>
                    </div>
                    
                </div>
                <button type="button" class="btn-mas" id="btnc8" onclick="desplazar('content_c8','btnc8','vericon8')">Ver más
                        <img id="vericon8" src="./assets/images/icons/arrow-down.svg" alt="icono de una flecha que apunta hacia abajo">
                    </button>
            </article>
            <!-- Consejo 9 -->
            <article class="consejos__content__items__item" id="c9">
                <div class="consejos__content__items__item__text">
                    <div class="consejos__content__items__item__text__extract">
                        <h3>Filtración con Luz Ultravioleta: Protección contra Contaminantes Invisibles</h3>
                        <p>La filtración con luz ultravioleta es una barrera efectiva contra microorganismos que pueden pasar desapercibidos. La ciencia detrás de esto involucra la desactivación de microorganismos mediante radiación ultravioleta.</p>
                    </div>
                    <div class="consejos__content__items__item__text__content hide" id="content_c9">
                        <p>Estudios en microbiología confirman que la radiación ultravioleta utilizada en estos sistemas desactiva eficazmente bacterias, virus y otros patógenos. La instalación de sistemas de filtración UV es esencial para garantizar la pureza del agua potable y la protección de la salud. La ciencia respalda la eficacia de esta tecnología.
                        La inversión en sistemas de filtración con luz ultravioleta es una medida esencial para asegurar la pureza del agua en tu hogar, proporcionando una barrera efectiva contra contaminantes invisibles.</p>
                    </div>
                    
                </div>
                <button type="button" class="btn-mas" id="btnc9" onclick="desplazar('content_c9','btnc9','vericon9')">Ver más
                        <img id="vericon9" src="./assets/images/icons/arrow-down.svg" alt="icono de una flecha que apunta hacia abajo">
                    </button>
            </article>
            <!-- Consejo 10 -->
            <article class="consejos__content__items__item" id="c10">
                <div class="consejos__content__items__item__text">
                    <div class="consejos__content__items__item__text__extract">
                        <h3>Cuida el Agua, Cuida el Futuro</h3>
                        <p>La conciencia del uso del agua es crucial para la sostenibilidad del planeta. La ciencia detrás de pequeñas acciones, como cerrar grifos, se relaciona con la física del flujo y la química del tratamiento del agua.</p>
                    </div>
                    <div class="consejos__content__items__item__text__content hide" id="content_c10">
                        <p>La física del flujo de agua indica que cerrar los grifos mientras no se usan reduce significativamente el desperdicio. Además, estudios químicos subrayan que el tratamiento del agua y la recolección de agua de lluvia son prácticas esenciales para conservar este recurso vital. Pequeñas acciones cotidianas tienen un impacto acumulativo significativo.

                        Cada esfuerzo individual en la conservación del agua es una contribución valiosa hacia un futuro sostenible. Cuidar el agua hoy es esencial para asegurar un mañana próspero y equitativo.</p>
                    </div>
                    
                </div>
                <button type="button" class="btn-mas" id="btnc2" onclick="desplazar('content_c10','btnc10','vericon10')">Ver más
                        <img id="vericon10" src="./assets/images/icons/arrow-down.svg" alt="icono de una flecha que apunta hacia abajo">
                    </button>
            </article>
            </section>
    </section>
   
</main>


<?php include './components/footer.php'?>
