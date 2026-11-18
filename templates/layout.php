<!doctype html>
<html lang="da">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= e($meta[0]) ?></title>
<meta name="description" content="<?= e($meta[1]) ?>">
<?php if ($canonical !== '') : ?>
<link rel="canonical" href="<?= e($canonical) ?>">
<?php endif; ?>
<meta property="og:title" content="<?= e($meta[0]) ?>">
<meta property="og:description" content="<?= e($meta[1]) ?>">
<meta property="og:type" content="website">
<meta property="og:locale" content="da_DK">
<meta name="generator" content="Pixnative">
<meta name="author" content="Pixnative">
<meta name="application-name" content="Pixnative Website">
<meta name="project-id" content="73660358-cc59-4934-bb59-cea6df0ef47a">
<meta name="version" content="1.0.0">
<meta name="revision" content="e10e7f98">
<meta name="last-modified" content="<?= e($today) ?>">
<meta name="theme-color" content="#9b2d20">
<link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Crect width='32' height='32' fill='%239b2d20'/%3E%3Ctext x='16' y='23' font-family='Arial' font-weight='700' font-size='19' text-anchor='middle' fill='%23f3e9d2'%3EHR%3C/text%3E%3C/svg%3E">
<link rel="stylesheet" href="/assets/css/style.css">
<script src="/assets/js/site.js" defer></script>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"AutoPartsStore","name":"H. Rasmussen Biler","url":"https://hr-biler-brovst.dk/","telephone":"+4520713121","email":"hr-biler@auto-nord.dk","foundingDate":"1907-04-01","address":{"@type":"PostalAddress","streetAddress":"Vestergade 12","postalCode":"9460","addressLocality":"Brovst","addressCountry":"DK"}}</script>
</head>
<body class="page-<?= e($path === '' ? 'forside' : $path) ?>">
<a class="skip" href="#indhold">Gå til indhold</a>
<header class="site-header">
  <a class="brand" href="/" aria-label="H. Rasmussen Biler, forside">
    <span class="brand-h">H.&nbsp;Rasmussen</span>
    <span class="brand-sub">Biler · Brovst · 1907</span>
  </a>
  <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="hovednav">Menu</button>
  <nav id="hovednav" class="site-nav" aria-label="Hovedmenu">
    <ul>
<?php foreach ($pages as $slug => $p) : if ($slug === '') { continue; } ?>
      <li><a class="tag" href="/<?= e($slug) ?>"<?= $slug === $path ? ' aria-current="page"' : '' ?>><b><?= e($p['shelf']) ?></b><?= e($p['nav']) ?></a></li>
<?php endforeach; ?>
    </ul>
  </nav>
  <a class="call" href="tel:+4520713121"><span aria-hidden="true">☎</span> 20&nbsp;71&nbsp;31&nbsp;21</a>
</header>

<main id="indhold">
<?= $content ?>
</main>

<footer class="site-footer">
  <div class="wrap footer-grid">
    <div>
      <p class="mono">Hylde 1907</p>
      <p class="footer-big">H. Rasmussen Biler</p>
      <address>
        Vestergade 12<br>9460 Brovst<br>
        <a href="tel:+4520713121">Tlf. 20 71 31 21</a><br>
        <a href="mailto:hr-biler@auto-nord.dk">hr-biler@auto-nord.dk</a><br>
        CVR 10 24 95 97
      </address>
    </div>
    <div>
      <p class="mono">Find rundt</p>
      <ul class="footer-links">
        <li><a href="/biler">Biler</a></li>
        <li><a href="/reservedele">Reservedele</a></li>
        <li><a href="/profil">Profil</a></li>
        <li><a href="/kontakt">Kontakt</a></li>
      </ul>
    </div>
    <div>
      <p class="mono">Links</p>
      <ul class="footer-links">
        <li><a href="https://www.jaguar.dk" rel="noopener">Jaguar Danmark</a></li>
        <li><a href="https://www.landrover.dk" rel="noopener">Land Rover Danmark</a></li>
      </ul>
      <p class="note">Værkstedsdriften er pr. 1. august 2021 overtaget af Brovst Autoteknik ApS.</p>
    </div>
  </div>
</footer>

<div class="callbar" role="region" aria-label="Hurtig kontakt">
  <a href="tel:+4520713121">Ring 20 71 31 21</a>
  <a href="mailto:hr-biler@auto-nord.dk">Skriv til os</a>
</div>
</body>
</html>
