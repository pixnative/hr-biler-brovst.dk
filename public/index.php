<?php

declare(strict_types=1);

ini_set('display_errors', '0');

const ROOT = __DIR__ . '/..';

$pages = [
    '' => ['file' => 'forside', 'shelf' => '', 'nav' => 'Forside'],
    'biler' => ['file' => 'biler', 'shelf' => 'A', 'nav' => 'Biler'],
    'reservedele' => ['file' => 'reservedele', 'shelf' => 'B', 'nav' => 'Reservedele'],
    'profil' => ['file' => 'profil', 'shelf' => 'C', 'nav' => 'Profil'],
    'kontakt' => ['file' => 'kontakt', 'shelf' => 'D', 'nav' => 'Kontakt'],
];

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function img(string $name, string $alt, int $w, int $h, bool $eager = false): string
{
    $loading = $eager ? 'fetchpriority="high"' : 'loading="lazy"';
    return '<img src="/assets/img/' . e($name) . '.jpg" alt="' . e($alt) . '" width="' . $w
        . '" height="' . $h . '" ' . $loading . ' decoding="async">';
}

$path = trim((string) parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH), '/');

if (!array_key_exists($path, $pages)) {
    http_response_code(404);
    $page = ['file' => '404', 'shelf' => '', 'nav' => ''];
    $path = '404';
} else {
    $page = $pages[$path];
}

$meta = [
    '' => ['H. Rasmussen Biler i Brovst – reservedele til Jaguar, Land Rover, MG og Rover', 'Siden 1907 i Brovst. Specialværksted-lager med reservedele til Jaguar, Land Rover, MG og Rover – også til 80’er- og 90’er-modeller. Ring 20 71 31 21.'],
    'biler' => ['Brugte biler – H. Rasmussen Biler, Brovst', 'Se de brugte biler hos H. Rasmussen Biler i Brovst. Specialist i Jaguar, Land Rover, MG og Rover.'],
    'reservedele' => ['Reservedele til Jaguar, Land Rover, MG og Rover – H. Rasmussen Biler', 'Et lager opbygget gennem 40 år med reservedele til engelske mærker. Vi finder delen eller får den hjem inden for 24 timer.'],
    'profil' => ['Profil og historie siden 1907 – H. Rasmussen Biler, Brovst', 'Tre generationer og 110+ år: cykler, knallerter, elværk, teglværk og biler. Mød familien bag H. Rasmussen Biler.'],
    'kontakt' => ['Kontakt H. Rasmussen Biler – Vestergade 12, 9460 Brovst', 'Ring 20 71 31 21 eller skriv til hr-biler@auto-nord.dk. H. Rasmussen Biler, Vestergade 12, 9460 Brovst. CVR 10 24 95 97.'],
    '404' => ['Siden findes ikke – H. Rasmussen Biler', 'Siden blev ikke fundet.'],
][$path];

$canonical = $path === '404' ? '' : 'https://hr-biler-brovst.dk/' . $path;
$today = '2026-11-18';

ob_start();
require ROOT . '/templates/' . $page['file'] . '.php';
$content = (string) ob_get_clean();

require ROOT . '/templates/layout.php';
