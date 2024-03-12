
<?php
session_start();
require_once('p-superior.php');?>
    <main class="container">
        <div class="row">
            <h1>Hola ajaja</h1>
            <h1>ksjkajshda</h1>
            <div class="p-5"></div>
            <div class="col-12 Mensaje text-center">
                <h1>Visitanos</h1>
                <h1>Ya agarra</h1>
                <p>Somos una Gran opcion para que disfrutes de una gran comida a cualquier hora del dia</p>
            </div>
            <div class="col-12 col-md-6">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/gallery/gallery-1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/gallery/gallery-2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/gallery/gallery-3.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 align-content-center Mensaje text-center">
                <div class="card mb-3" style="max-width: 100%;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/hero-image.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <br>
                                <h5 class="card-title">Somos la mejor opcion</h5>
                                <br>
                                <p class="card-text">Descubre la excelencia culinaria en nuestro restaurante, donde sabores exquisitos y servicio impecable se unen para brindarte una experiencia memorable. ¡Ven y disfruta de lo mejor en gastronomía!
                                    Si busca deleitar su paladar con la mejor opción culinaria, no busque más.</p>
                                <br>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card text-bg-light mb-3" style="max-width: 100%; height: auto">
                    <div class="card-header">Reconocimientos</div>
                    <div class="card-body">
                        <h5 class="card-title">Somos excelencia</h5>
                        <p class="card-text">Contamos con varios reconocimientos que respaldan nuestra experiencia</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php require_once('p-inferior.php');?>
