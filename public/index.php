<?php

require __DIR__ . '/../includes/helpers.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/* =========================
   CONFIGURAÇÃO GLOBAL
========================= */

// RAIZ DO PROJETO (NUNCA MEXER)
// define('BASE_PATH', dirname(__DIR__));

// BASE URL (para links)
define('BASE_URL', '/karolkaape/public');

/* =========================
   ROUTER
========================= */

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$baseFolder = '/karolkaape/public';

$request = str_replace($baseFolder, '', $uri);
$request = trim($request, '/');

/* =========================
   VIEW HELPER
========================= */

function view($file)
{
    $path = BASE_PATH . '/views/' . $file;

    if (!file_exists($path)) {
        http_response_code(500);
        exit("View não encontrada em: " . $path);
    }

    require $path;
}

/* =========================
   ROTAS
========================= */

switch (true) {

    case $request === '':
        view('home.php');
        break;

    case $request === 'projetos':
        view('projetos.php');
        break;

    case preg_match('/^projetos\/([a-z0-9-]+)$/', $request, $matches):
        $_GET['slug'] = $matches[1];
        view('projeto.php');
        break;

    case $request === 'contato':
        view('contato.php');
        break;

    default:
        http_response_code(404);
        view('404.php');
        break;
}