<div<?php print $attributes; ?>>

  <nav class="navbar">
    <div class="navbar__container">
      <h1 class="navbar__logo">Евротехника</h1>
      <ul class="navbar__nav">
        <li class="navbar__item"><a href="#" class="navbar__link">О компании</a></li>
        <li class="navbar__item"><a href="#" class="navbar__link">Наши направления</a></li>
        <li class="navbar__item"><a href="#" class="navbar__link">Объекты</a></li>
        <li class="navbar__item"><a href="#" class="navbar__link">Клиенты</a></li>
        <li class="navbar__item"><a href="#" class="navbar__link">Контакты</a></li>
      </ul>
      <a href="#" class="navbar__subscribe">Стать дилером</a>
      <a href="#" class="navbar__feedback">Обратная связь</a>
    </div>
  </nav>

  <header class="header">
    <?php print views_embed_view('slider', 'block'); ?>
  </header>

  <div class="clients">
    <div class="clients__container">
      <h2 class="clients__title">Наши клиенты</h2>
      <ul class="clients__list">
        <li class="clients__item"><a class="clients__link clients__link--mts" href="#">&nbsp;</a></li>
        <li class="clients__item"><a class="clients__link clients__link--vega" href="#">&nbsp;</a></li>
        <li class="clients__item"><a class="clients__link clients__link--reikartz" href="#">&nbsp;</a></li>
        <li class="clients__item"><a class="clients__link clients__link--atb" href="#">&nbsp;</a></li>
        <li class="clients__item"><a class="clients__link clients__link--uz" href="#">&nbsp;</a></li>
        <li class="clients__item"><a class="clients__link clients__link--eva" href="#">&nbsp;</a></li>
        <li class="clients__item"><a class="clients__link clients__link--prostor" href="#">&nbsp;</a></li>
        <li class="clients__item"><a class="clients__link clients__link--brusnichka" href="#">&nbsp;</a></li>
        <li class="clients__item"><a class="clients__link clients__link--abk" href="#">&nbsp;</a></li>
        <li class="clients__item"><a class="clients__link clients__link--garvis" href="#">&nbsp;</a></li>
      </ul>
    </div>
  </div>

  <div class="objects">
    <div class="objects__container">
      <h2 class="objects__title">Объекты</h2>
      <div class="objects__content">
        <?php print views_embed_view('objects', 'block'); ?>
      </div>
    </div>
  </div>

</div>
