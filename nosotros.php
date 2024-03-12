<?php
session_start();
require_once('p-superior.php');?>
<main class="row justify-content-around">
    <div class="m-5"></div>
    <div class="col-12 Mensaje text-center">
        <h1>Nosotros</h1>
        <p>Bienvenidos a un oasis culinario donde la pasión por la comida se encuentra con la hospitalidad excepcional</p>
    </div>
    <div class="col-12 col-md-5 m-3">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/about.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/about-us.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/about-2.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="col-12 col-md-5 m-3">
        <div class="card text-bg-light mb-3" style="max-width: 100%;">
            <div class="card-header">Nuestra Historia</div>
            <div class="card-body">
                <br>
                <h5 class="card-title">Somos excelencia</h5>
                <br>
                <p class="card-text">Nos enorgullece utilizar ingredientes frescos y de alta calidad para crear platos que deleiten los paladares más exigentes. Nuestro talentoso equipo de chefs expertos combina técnicas innovadoras con recetas tradicionales, creando una fusión de sabores que es una verdadera delicia para los sentidos.</p>
                <p>No solo nos esforzamos por ofrecer una experiencia culinaria excepcional, sino que también valoramos la comodidad y la satisfacción de nuestros clientes. Nuestro elegante y acogedor ambiente ha sido cuidadosamente diseñado para crear un espacio donde puedas relajarte y disfrutar de cada momento. Además, nuestro equipo de personal amable y atento está listo para brindarte un servicio impecable y personalizado.</p>
            </div>
        </div>
    </div>
    <div class="m-5"></div>
</main>
<?php require_once('p-inferior.php');?>
