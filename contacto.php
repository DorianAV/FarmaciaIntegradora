
<?php
session_start();
require_once('p-superior.php');?>
<main class="row justify-content-center">
    <div class="m-5"></div>
    <div class="col-12 text-center"><h1>Contacto</h1></div>
    <div class="col-4 d-none d-md-block">
        <img src="img/hero-image.jpg" class="img-fluid h-auto" alt="">
    </div>
    <div class="col-12 col-md-7">
        <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        Información de contacto
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                    <div class="accordion-body">
                        <strong>Dirección: </strong> Calle del Sabor Exquisito 123, Ciudad delicia, Código Postal 12345.<br>
                        <strong>Teléfono: </strong> +1 234 567 8901 <br>
                        <strong>Correo electrónico: </strong> info@restauranteexquisito.com <br>
                        <strong>Redes sociales: </strong> Síguenos en <a href="https://www.facebook.com/">Facebook</a>, <a
                                href="https://www.instagram.com/">Instagram</a> y <a href="https://www.twitter.com/">Twitter</a> para estar al tanto de nuestras últimas promociones y eventos especiales.
                        <br>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                        Horario de atención:
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" style="">
                    <div class="accordion-body">
                        <strong>Lunes a viernes:</strong> 9:00 p.m. - 9:00 p.m. <br>
                        <strong>Sábados y domingos:</strong> 9:00 a.m. - 9:00 p.m. <br>

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        Servicios adicionales:
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <strong>Estacionamiento:</strong> Contamos con un amplio estacionamiento gratuito para nuestros clientes. <br>
                         <strong>Eventos y caterin:</strong> Organizamos eventos especiales y ofrecemos servicios de catering para celebraciones y reuniones. Ponte en contacto con nosotros para más información y cotizaciones. <br>

                    </div>
                </div>
            </div>
        </div>
        <div class="m-5"><br></div>
    </div>
</main>
<?php require_once('p-inferior.php');?>