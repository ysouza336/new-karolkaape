<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $pageTitle ?? 'Karolkaape Interiores'; ?></title>

    <meta name="description" content="<?= $pageDescription ?? ''; ?>">
    <meta property="og:title" content="<?= $pageTitle ?? ''; ?>">
    <meta property="og:description" content="<?= $pageDescription ?? ''; ?>">
    <meta property="og:image">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox/fancybox.css"/>
    <!-- CSS (corrigido para funcionar no router) -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/main.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>


<header class="cabecalho container-fluid">
    <div class="row">
        <nav class="col-12 d-flex align-items-center justify-content-between justify-content-md-center">

           <i class="fa-solid fa-bars menu-toggle"></i>

            <img class="img-fluid" src="#" alt="">

            <ul class="menu-principal">

                <li><a href="<?= BASE_URL ?>/">Home</a></li>
                <li><a href="<?= BASE_URL ?>/projetos">Projetos</a></li>
                <li><a href="<?= BASE_URL ?>/contato">Contato</a></li>

            </ul>
            <div class="overlay-menu"></div>
        </nav>
    </div>
</header>