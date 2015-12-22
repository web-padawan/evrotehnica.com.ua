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

  <div class="about">
    <div class="about__container">
      <h2 class="about__title">О компании</h2>
      <div class="about__content">
        <p class="about__text">Компания «Евротехника» на рынке бытовой и климатической техники с 1995 года.</p>
        <p class="about__text">
          <span>Уже более 20 лет наша компания работает в направлении климатического оборудования, отопительной,</span>
          <span>бытовой и встраиваемой техники ведущих мировых брендов. Сегодня Евротехника является дилером многих торговых марок.</span>
          <span>Занимается оптовой продажей, имеет розничную сеть, сервисный центр и интернет-магазин.</span>
          <span>Сертифицированные сотрудники сервисного центра имеют большой опыт работы на технически сложных объектах.</span>
        </p>
        <p class="about__text">Индивидуальный подход к каждому клиенту!</p>
      </div>
      <h2 class="about__title">Евротехника это</h2>
      <ul class="about__list">
        <li class="about__item">
          <div class="about__icon about__icon--lamp">&nbsp;</div>
          <div class="about__descr about__descr--lamp">Инновационное оборудование</div>
        </li>
        <li class="about__item">
          <div class="about__icon about__icon--shield">&nbsp;</div>
          <div class="about__descr about__descr--shield">Гарантия от производителя</div>
        </li>
        <li class="about__item">
          <div class="about__icon about__icon--lorry">&nbsp;</div>
          <div class="about__descr about__descr--lorry">Поставка в любую точку Украины</div>
        </li>
        <li class="about__item">
          <div class="about__icon about__icon--man">&nbsp;</div>
          <div class="about__descr about__descr--man">Большой опыт<br>работы на технически сложных объектах</div>
        </li>
        <li class="about__item">
          <div class="about__icon about__icon--service">&nbsp;</div>
          <div class="about__descr about__descr--service">Сервисный центр</div>
        </li>
        <li class="about__item">
          <div class="about__icon about__icon--master">&nbsp;</div>
          <div class="about__descr about__descr--master">Опыт. Надежность. Качество</div>
        </li>
      </ul>
    </div>
  </div>

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
