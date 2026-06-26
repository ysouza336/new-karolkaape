<?php

// 📦 Carrega projetos
$projetos = include base_path('data/projetos.php');

// 🔥 Slug vindo da URL
$slug = $_GET['slug'] ?? null;

// 🚨 Validação
if (!$slug || !isset($projetos[$slug])) {
    http_response_code(404);
    require base_path('views/404.php');
    exit;
}

$projeto = $projetos[$slug];

// SEO
$pageTitle = $projeto['titulo'] . ' | Karolkaape Interiores';
$pageDescription = $projeto['descricao'];

// 📁 Pasta física das imagens deste ambiente
$pastaImagens = base_path('public/assets/imgs/' . $projeto['pasta']);

// 📸 Imagens (filesystem)
$imagens = glob($pastaImagens . '/*.{jpg,jpeg,png,webp}', GLOB_BRACE);

sort($imagens);

// 🔥 Converte caminho físico em URL pública, relativa a /public
function imagemParaUrl($caminhoFisico)
{
    $relativo = str_replace(base_path('public'), '', $caminhoFisico);
    return BASE_URL . $relativo;
}

// Header
include base_path('includes/header.php');

?>

<section class="project-hero">

    <img
        src="<?= BASE_URL . $projeto['thumb']; ?>"
        alt="<?= htmlspecialchars($projeto['titulo']); ?>"
    >

    <div class="overlay">

        <div class="container text-center">

            <h1 class="display-3 fw-bold" data-aos="fade-up">
                <?= htmlspecialchars($projeto['titulo']); ?>
            </h1>

            <p class="lead" data-aos="fade-up" data-aos-delay="200">
                <?= htmlspecialchars($projeto['descricao']); ?>
            </p>

        </div>

    </div>

</section>

<section class="container py-4 section-project">

    <nav aria-label="breadcrumb">

        <ol class="breadcrumb">

            <li class="breadcrumb-item">
                <a href="<?= BASE_URL ?>/">Home</a>
            </li>

            <li class="breadcrumb-item">
                <a href="<?= BASE_URL ?>/projetos">Projetos</a>
            </li>

            <li class="breadcrumb-item active">
                <?= htmlspecialchars($projeto['titulo']); ?>
            </li>

        </ol>

    </nav>

</section>

<section class="container pb-5">

    <div class="row justify-content-center">

        <div class="col-lg-8 text-center" data-aos="fade-up">

            <h2>Sobre este Projeto</h2>

            <p class="lead">
                <?= htmlspecialchars($projeto['descricao']); ?>
            </p>

        </div>

    </div>

</section>

<section class="container pb-5 section-project">

    <?php if (empty($imagens)): ?>

        <p class="text-center text-muted">
            Em breve, novas fotos deste ambiente.
        </p>

    <?php else: ?>

        <div class="masonry-gallery">

            <?php foreach ($imagens as $imagem): ?>

                <?php $imgUrl = imagemParaUrl($imagem); ?>

                <a href="<?= $imgUrl ?>" data-fancybox="galeria" data-aos="zoom-in">

                    <img
                        src="<?= $imgUrl ?>"
                        loading="lazy"
                        alt="<?= htmlspecialchars($projeto['titulo']); ?>"
                    >

                </a>

            <?php endforeach; ?>

        </div>

    <?php endif; ?>

</section>

<section class="container py-5">

    <div class="text-center" data-aos="fade-up">

        <h2>Gostou deste projeto?</h2>

        <p>Entre em contato para transformar seu ambiente.</p>

        <a
            href="https://wa.me/5511999999999?text=<?= urlencode('Olá, tenho interesse nos projetos de ' . $projeto['titulo']); ?>"
            class="btn btn-dark btn-lg"
            target="_blank"
        >
            Solicitar Orçamento
        </a>

    </div>

</section>

<section class="container py-5">

    <div class="text-center mb-5">
        <h2 data-aos="fade-up">Outros Ambientes</h2>
    </div>

    <div class="row g-4">

        <?php foreach ($projetos as $slugRelacionado => $item): ?>

            <?php if ($slugRelacionado === $slug) continue; ?>

            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up">

                <a href="<?= BASE_URL ?>/projetos/<?= $slugRelacionado ?>" class="text-decoration-none">

                    <div class="card projeto-card border-0 shadow-sm h-100">

                        <img
                            src="<?= BASE_URL . $item['thumb']; ?>"
                            class="card-img-top"
                            alt="<?= htmlspecialchars($item['titulo']); ?>"
                        >

                        <div class="card-body">
                            <h5><?= htmlspecialchars($item['titulo']); ?></h5>
                        </div>

                    </div>

                </a>

            </div>

        <?php endforeach; ?>

    </div>

</section>

<script type="application/ld+json">
{
 "@context": "https://schema.org",
 "@type": "CreativeWork",
 "name": "<?= htmlspecialchars($projeto['titulo'], ENT_QUOTES); ?>",
 "description": "<?= htmlspecialchars($projeto['descricao'], ENT_QUOTES); ?>",
 "image": "<?= BASE_URL . $projeto['thumb']; ?>"
}
</script>

<?php include base_path('includes/footer.php'); ?>