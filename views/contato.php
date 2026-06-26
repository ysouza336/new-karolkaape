<?php

$pageTitle = 'Contato | Karolkaape Interiores';
$pageDescription = 'Entre em contato e solicite um orçamento para o seu projeto.';

include base_path('includes/header.php');

?>

<section class="bg-light py-5 mt-5">

    <div class="container text-center">

        <h1 class="display-4" data-aos="fade-up">
            Vamos Conversar?
        </h1>

        <p class="lead" data-aos="fade-up" data-aos-delay="200">
            Conte um pouco sobre o seu projeto e entraremos em contato.
        </p>

    </div>

</section>

<section class="container py-5">

    <div class="row justify-content-center text-center g-4">

        <div class="col-md-4" data-aos="fade-up">
            <i class="fa-brands fa-whatsapp fa-2x mb-3"></i>
            <h5>WhatsApp</h5>
            <p>
                <a href="https://wa.me/5511999999999" target="_blank" class="text-decoration-none">
                    (11) 99999-9999
                </a>
            </p>
        </div>

        <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <i class="fa-solid fa-envelope fa-2x mb-3"></i>
            <h5>E-mail</h5>
            <p>
                <a href="mailto:contato@karolkaape.com.br" class="text-decoration-none">
                    contato@karolkaape.com.br
                </a>
            </p>
        </div>

        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <i class="fa-solid fa-location-dot fa-2x mb-3"></i>
            <h5>Localização</h5>
            <p>São Paulo - SP</p>
        </div>

    </div>

</section>

<section class="container pb-5 text-center">

    <a
        href="https://wa.me/5511999999999?text=<?= urlencode('Olá, gostaria de solicitar um orçamento.'); ?>"
        class="btn btn-dark btn-lg"
        target="_blank"
        data-aos="zoom-in"
    >
        Solicitar Orçamento pelo WhatsApp
    </a>

</section>

<?php include base_path('includes/footer.php'); ?>
