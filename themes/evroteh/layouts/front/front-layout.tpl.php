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

  <div class="objects">
    <div class="objects__container">
      <div class="objects__title">Объекты</div>
      <div class="objects__content">
        <?php print views_embed_view('objects', 'block'); ?>
      </div>
    </div>
  </div>

</div>
