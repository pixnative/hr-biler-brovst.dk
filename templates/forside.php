<section class="hero">
  <div class="hero-photo">
    <?= img('facade', 'Murstensbygningen på Vestergade 12 i Brovst med en sort Porsche, en Land Rover og en rød Jaguar foran', 1280, 460, true) ?>
  </div>
  <div class="wrap hero-copy">
    <p class="label label-red reveal">Siden 1. april 1907 · Brovst</p>
    <h1 class="reveal">Har&nbsp;vi <em>den</em> på&nbsp;lager?<span class="h1-sub">Som regel&nbsp;ja.</span></h1>
    <p class="lead reveal">Reservedele til Jaguar, Land Rover, MG og Rover – fra et lager, der er samlet hylde for hylde gennem 40 år.</p>
    <p class="hero-actions reveal">
      <a class="btn btn-primary" href="tel:+4520713121">Ring 20 71 31 21</a>
      <a class="btn" href="/reservedele">Se lageret</a>
    </p>
  </div>
</section>

<section class="picker wrap" aria-labelledby="picker-h">
  <h2 id="picker-h" class="mono">Find din hylde</h2>
  <div class="picker-grid">
    <div class="picker-buttons" role="group" aria-label="Vælg mærke">
      <button type="button" class="tag" data-make="Jaguar" data-code="J" aria-pressed="true"><b>J</b>Jaguar</button>
      <button type="button" class="tag" data-make="Land Rover" data-code="L" aria-pressed="false"><b>L</b>Land Rover</button>
      <button type="button" class="tag" data-make="MG" data-code="M" aria-pressed="false"><b>M</b>MG</button>
      <button type="button" class="tag" data-make="Rover" data-code="R" aria-pressed="false"><b>R</b>Rover</button>
    </div>
    <div class="ticket" aria-live="polite">
      <p class="mono">Varenr. <span data-out="code">J</span>-1907</p>
      <p class="ticket-make" data-out="make">Jaguar</p>
      <p>Ring og sig årgang og model – vi kigger på hylden, eller finder delen hos vores netværk.</p>
      <a class="btn btn-primary" href="tel:+4520713121">Ring 20 71 31 21</a>
    </div>
  </div>
</section>

<section class="band band-kraft">
  <div class="wrap split">
    <div class="split-img tilt reveal"><?= img('hylde', 'Nærbillede af hylde med papkasser og røde varemærkater på lageret', 750, 500, true) ?></div>
    <div class="reveal">
      <p class="label">Hylde B · Reservedele</p>
      <h2>Også til 80’er- og 90’er-modellerne.</h2>
      <p>Lageret er bygget op gennem mange års omhyggelig indsamling og opkøb fra ophørte værksteder og importører. Har vi ikke delen selv, finder vi den i vores netværk – eller får den fra importøren inden for 24 timer.</p>
      <p><a class="link-arrow" href="/reservedele">Læs om lageret</a></p>
    </div>
  </div>
</section>

<section class="numbers wrap" aria-label="H. Rasmussen i tal">
  <div class="num reveal"><span class="big">1907</span><span>grundlagt i Brovst af Svend Hulthin Rasmussen</span></div>
  <div class="num reveal"><span class="big">3</span><span>generationer i den samme familie</span></div>
  <div class="num reveal"><span class="big">40</span><span>år med at fylde lageret op</span></div>
  <div class="num reveal"><span class="big">24 t</span><span>til originale dele fra importøren</span></div>
</section>

<section class="details" aria-label="Detaljer">
  <figure class="detail reveal"><?= img('jaguar', 'Rød Jaguar parkeret foran værkstedsbygningen', 460, 400, true) ?><figcaption class="label">Jaguar</figcaption></figure>
  <figure class="detail reveal"><?= img('landrover', 'Land Rover set forfra foran de store ruder', 500, 375, true) ?><figcaption class="label">Land Rover</figcaption></figure>
  <figure class="detail reveal"><?= img('skilt', 'Skiltet Brugte Biler ved døren', 560, 320, true) ?><figcaption class="label">Brugte biler</figcaption></figure>
</section>

<section class="band band-dark">
  <div class="wrap split split-rev">
    <div class="reveal">
      <p class="label label-red">Hylde C · Profil</p>
      <h2>Cykler, knallerter, elværk, teglværk – og biler.</h2>
      <p>Alt det, firmaet har lavet siden 1907, har haft samme kendetegn: høj faglighed og personlig service med kunden i centrum.</p>
      <p><a class="link-arrow" href="/profil">Læs historien</a></p>
    </div>
    <div class="split-img tilt-r reveal"><?= img('portraet', 'Indrammet portræt af tidligere ejer på kontorets væg', 570, 630, true) ?></div>
  </div>
</section>

<section class="wrap cta">
  <h2>Brug for en bestemt del?</h2>
  <p>Ring til Hans eller Tina på <a href="tel:+4520713121">20&nbsp;71&nbsp;31&nbsp;21</a> eller skriv til <a href="mailto:hr-biler@auto-nord.dk">hr-biler@auto-nord.dk</a>.</p>
</section>
