<?php

$projetos = include base_path('data/projetos.php');

include base_path('includes/header.php');
?>

<section class="hero-home">

    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>

        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="<?= BASE_URL ?>/assets/imgs/Cozinha/Extras-01.webp" class="d-block w-100" alt="Cozinha planejada">
            </div>

            <div class="carousel-item">
                <img src="<?= BASE_URL ?>/assets/imgs/Banheiro/Banheiro-1.webp" class="d-block w-100" alt="Banheiro planejado">
            </div>

            <div class="carousel-item">
                <img src="<?= BASE_URL ?>/assets/imgs/Dormitorio/KarineCleber-03.webp" class="d-block w-100" alt="Dormitório planejado">
            </div>

            <div class="carousel-item">
                <img src="<?= BASE_URL ?>/assets/imgs/Areas/Area-1.webp" class="d-block w-100" alt="Área planejada">
            </div>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
        </button>

    </div>

    <div class="overlay">

        <div class="container text-center">

            <h1 class="display-2 fw-bold" data-aos="fade-up">
                Karolkaape Interiores
            </h1>

            <p class="lead" data-aos="fade-up" data-aos-delay="200">
                Transformando ambientes em experiências únicas.
            </p>

            <a href="<?= BASE_URL ?>/projetos"
               class="btn btn-light btn-lg mt-3"
               data-aos="zoom-in"
               data-aos-delay="400">
                Ver Projetos
            </a>

        </div>

    </div>

</section>

<section class="container py-5">

    <div class="row">

        <div class="col-12 text-center mb-5">
            <h2 data-aos="fade-up">Ambientes</h2>
        </div>

    </div>

    <div class="row g-4">

        <?php foreach($projetos as $slug => $projeto): ?>

            <div class="col-lg-3 col-md-6" data-aos="fade-up">

                <a href="<?= BASE_URL ?>/projetos/<?= $slug ?>"
                   class="text-decoration-none">

                    <div class="card border-0 shadow home-card">

                        <img src="<?= BASE_URL . $projeto['thumb'] ?>"
                             class="card-img-top"
                             alt="<?= htmlspecialchars($projeto['titulo']) ?>">

                        <div class="card-body">
                            <h5><?= htmlspecialchars($projeto['titulo']) ?></h5>
                        </div>

                    </div>

                </a>

            </div>

        <?php endforeach; ?>

    </div>

</section>

<section class="container py-5">

    <h2 class="text-center mb-5" data-aos="fade-up">
        Projetos em Destaque
    </h2>

    <div class="mosaic-showcase">

        <a href="<?= BASE_URL ?>/assets/imgs/Cozinha/Extras-01.webp" data-fancybox="projetos" data-thumb-src="../public/assets/imgs/Cozinha/Extras-01.webp">
            <img src="<?= BASE_URL ?>/assets/imgs/Cozinha/Extras-01.webp" alt="Cozinha">
        </a>

        <a href="<?= BASE_URL ?>/assets/imgs/Banheiro/Banheiro-1.webp" data-fancybox="projetos">
            <img src="<?= BASE_URL ?>/assets/imgs/Banheiro/Banheiro-1.webp" alt="Banheiro">
        </a>

        <a href="<?= BASE_URL ?>/assets/imgs/Dormitorio/KarineCleber-03.webp" data-fancybox="projetos">
            <img src="<?= BASE_URL ?>/assets/imgs/Dormitorio/KarineCleber-03.webp" alt="Dormitório">
        </a>

        <a href="<?= BASE_URL ?>/assets/imgs/Areas/Area-1.webp" data-fancybox="projetos">
            <img src="<?= BASE_URL ?>/assets/imgs/Areas/Area-1.webp" alt="Área">
        </a>

    </div>

</section>

<?php include base_path('includes/footer.php'); ?>