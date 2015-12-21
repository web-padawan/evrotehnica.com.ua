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
   <?php print render($page['header']); ?>
  </header>

  <?php if ($page['navigation']): ?>
    <nav class="nav">
      <div class="nav__container">
        <?php print render($page['navigation']); ?>
      </div>
    </nav>
  <?php endif ?>

  <div class="main">
    <div class="main__container">
      <div class="content" role="main">
        <?php print render($page['highlighted']); ?>

        <a id="main-content"></a>

        <?php print render($title_prefix); ?>

        <?php if ($title): ?>
        <div class="content__row">
          <h1 class="content__title"><?php print $title; ?></h1>
        </div>
        <?php endif; ?>

        <?php print render($title_suffix); ?>

        <?php if ($messages): ?>
        <div class="content__row">
          <?php print $messages; ?>
        </div>
        <?php endif; ?>

        <?php if ($action_links): ?>
          <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>

        <?php print render($page['content']); ?>
      </div>

      <div class="sidebar">
        <?php print render($page['sidebar']); ?>
      </div>
    </div>
  </div>

  <footer class="footer">
    <div class="footer__container">
      <?php print render($page['footer']); ?>
    </div>
  </footer>
</div>
