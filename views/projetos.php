<?php

$projetos = include base_path('data/projetos.php');

$pageTitle = 'Projetos | Karolkaape Interiores';
$pageDescription = 'Conheça nossos projetos e ambientes.';

include base_path('includes/header.php');

?>

<section class="bg-light py-5 mt-5">

    <div class="container text-center">

        <h1
            class="display-4"
            data-aos="fade-up"
        >
            Nossos Projetos
        </h1>

        <p
            class="lead"
            data-aos="fade-up"
            data-aos-delay="200"
        >
            Ambientes planejados para inspirar.
        </p>

    </div>

</section>

<section class="container py-5">

    <div class="row text-center">

        <div class="col-md-4">

            <h2
                class="purecounter"
                data-purecounter-start="0"
                data-purecounter-end="100"
                data-purecounter-duration="1"
            >
                0
            </h2>

            <p>Projetos Realizados</p>

        </div>

        <div class="col-md-4">

            <h2
                class="purecounter"
                data-purecounter-start="0"
                data-purecounter-end="8"
                data-purecounter-duration="1"
            >
                0
            </h2>

            <p>Anos de Experiência</p>

        </div>

        <div class="col-md-4">

            <h2
                class="purecounter"
                data-purecounter-start="0"
                data-purecounter-end="100"
                data-purecounter-duration="1"
            >
                0
            </h2>

            <p>Clientes Satisfeitos</p>

        </div>

    </div>

</section>

<section class="container pb-5">

    <div class="filters text-center mb-5">

        <button
            class="btn btn-dark"
            data-filter="*"
        >
            Todos
        </button>

        <?php foreach ($projetos as $slug => $item): ?>

            <button
                class="btn btn-outline-dark"
                data-filter=".<?= $slug ?>"
            >

                <?= htmlspecialchars($item['titulo']); ?>

            </button>

        <?php endforeach; ?>

    </div>

    <div class="row gallery-grid">

        <?php foreach ($projetos as $slug => $item): ?>

            <div class="col-12 col-md-6 col-xl-4 mb-4 gallery-item <?= $slug ?>">
                
                <a href="<?= BASE_URL ?>/projetos/<?= $slug ?>"class="text-decoration-none">

                    <div class="card project-card border-0 shadow h-100">
                        <div class="project-image">
                            <img
                                src="<?= BASE_URL . $item['thumb']; ?>"
                                class="card-img-top"
                                alt="<?= htmlspecialchars($item['titulo']); ?>"
                            >
                        </div>

                        <div class="card-body">

                            <h4>

                                <?= htmlspecialchars($item['titulo']); ?>

                            </h4>

                            <p>

                                <?= htmlspecialchars($item['descricao']); ?>

                            </p>

                        </div>

                    </div>

                </a>

            </div>

        <?php endforeach; ?>

    </div>

</section>

<section class="container py-5 text-center">

    <h2 data-aos="fade-up">

        Vamos criar seu próximo projeto?

    </h2>

    <a
        href="https://wa.me/5511999999999"
        class="btn btn-dark btn-lg mt-3"
        target="_blank"
    >

        Falar no WhatsApp

    </a>

</section>

<?php include base_path('includes/footer.php'); ?>