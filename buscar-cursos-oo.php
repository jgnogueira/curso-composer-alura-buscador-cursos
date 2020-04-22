<?php

require_once 'vendor/autoload.php';

use Alura\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client  = new Client(['verify' => false, 'base_uri' => 'https://www.alura.com.br/']);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos   = $buscador->buscar('/cursos-online-programacao/php');

foreach ($cursos as $key => $curso) {
    echo exibeMensagem($curso);
}