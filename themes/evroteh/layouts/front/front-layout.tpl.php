<?php
  render($page['content']['metatags']);
?>
<div<?php print $attributes; ?>>

  <nav class="navbar">
    <div class="navbar__container">
      <h1 class="navbar__logo">Евротехника</h1>
      <label for="toggle" class="navbar__toggle">&nbsp;</label>
      <input id="toggle" type="checkbox" class="navbar__trigger" />
      <ul class="navbar__nav">
        <li class="navbar__item navbar__item--1"><a href="#about" class="navbar__link">О компании</a></li>
        <li class="navbar__item navbar__item--2"><a href="#industries" class="navbar__link">Наши направления</a></li>
        <li class="navbar__item navbar__item--3"><a href="#objects" class="navbar__link">Объекты</a></li>
        <li class="navbar__item navbar__item--4"><a href="#clients" class="navbar__link">Клиенты</a></li>
        <li class="navbar__item navbar__item--5"><a href="#contacts" class="navbar__link">Контакты</a></li>
      </ul>
      <a href="#" class="navbar__feedback">Обратная связь</a>
      <a href="#" class="navbar__subscribe">Стать дилером</a>
    </div>
  </nav>

  <header class="header">
    <?php print views_embed_view('slider', 'block'); ?>
  </header>

  <div id="industries" class="industries">
    <div class="industries__container">
      <h2 class="industries__title">Наши направления</h2>
      <div class="industries__content">
      <?php
        $block = module_invoke('block', 'block_view', '1');
        print render($block['content']);
      ?>
      </div>
    </div>
  </div>

  <div id="about" class="about">
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
      <h2 class="about__title">Евротехника это:</h2>
      <ul class="about__list">
        <li class="about__item">
          <div class="about__img">
            <div class="about__icon about__icon--lamp">&nbsp;</div>
          </div>
          <div class="about__descr about__descr--lamp">Инновационное оборудование</div>
        </li>
        <li class="about__item">
          <div class="about__img">
            <div class="about__icon about__icon--shield">&nbsp;</div>
          </div>
          <div class="about__descr about__descr--shield">Гарантия от производителя</div>
        </li>
        <li class="about__item">
          <div class="about__img">
            <div class="about__icon about__icon--lorry">&nbsp;</div>
          </div>
          <div class="about__descr about__descr--lorry">Поставка в любую точку Украины</div>
        </li>
        <li class="about__item">
          <div class="about__img">
            <div class="about__icon about__icon--man">&nbsp;</div>
          </div>
          <div class="about__descr about__descr--man">Большой опыт<br>работы на технически сложных объектах</div>
        </li>
        <li class="about__item">
          <div class="about__img">
            <div class="about__icon about__icon--service">&nbsp;</div>
          </div>
          <div class="about__descr about__descr--service">Сервисный центр</div>
        </li>
        <li class="about__item">
          <div class="about__img">
            <div class="about__icon about__icon--master">&nbsp;</div>
          </div>
          <div class="about__descr about__descr--master">Опыт. Надежность. Качество</div>
        </li>
      </ul>
    </div>
  </div>

  <div id="clients" class="clients">
    <div class="clients__container">
      <h2 class="clients__title">Наши клиенты</h2>
      <ul class="clients__list">
        <li class="clients__item"><span class="clients__link clients__link--mts">&nbsp;</span></li>
        <li class="clients__item"><span class="clients__link clients__link--vega">&nbsp;</span></li>
        <li class="clients__item"><span class="clients__link clients__link--reikartz">&nbsp;</span></li>
        <li class="clients__item"><span class="clients__link clients__link--atb">&nbsp;</span></li>
        <li class="clients__item"><span class="clients__link clients__link--uz">&nbsp;</span></li>
        <li class="clients__item"><span class="clients__link clients__link--eva">&nbsp;</span></li>
        <li class="clients__item"><span class="clients__link clients__link--prostor">&nbsp;</span></li>
        <li class="clients__item"><span class="clients__link clients__link--brusnichka">&nbsp;</span></li>
        <li class="clients__item"><span class="clients__link clients__link--abk">&nbsp;</span></li>
        <li class="clients__item"><span class="clients__link clients__link--garvis">&nbsp;</span></li>
      </ul>
    </div>
  </div>

  <div id="objects" class="objects">
    <div class="objects__container">
      <h2 class="objects__title">Объекты</h2>
      <div class="objects__content">
        <?php print views_embed_view('objects', 'block'); ?>
      </div>
    </div>
  </div>

  <div class="subscribe">
    <div class="subscribe__container">
      <div class="subscribe__left">
        <h2 class="subscribe__title">Хочешь стать дилером?</h2>
        <div class="subscribe__text">Заполни форму<br>и отправь свои данные</div>
        <a class="subscribe__toggle" href="#">Заполни форму</a>
      </div>
      <div class="subscribe__form">
        <?php
          $block = module_invoke('webform', 'block_view', 'client-block-11');
          echo render($block['content']);
        ?>
      </div>
    </div>
  </div>

  <div id="contacts" class="contacts">
    <div class="contacts__container">
      <h2 class="contacts__title">Контакты</h2>
      <div class="contacts__left">
        <div class="contacts__card contacts__card--1">
          <div class="contacts__adr">Украина, г. Днепропетровск, ул.&nbsp;Володи&nbsp;Дубинина, 14</div>
          <div class="contacts__tel">(0562) 34-16-43, (0562) 31-85-97</div>
        </div>
        <div class="contacts__card contacts__card--2">
          <div class="contacts__adr">Отдел продаж климатического и&nbsp;отопительного оборудования</div>
          <div class="contacts__tel">(050) 420-11-41, (050) 931-15-15</div>
        </div>
        <div class="contacts__card contacts__card--3">
          <div class="contacts__adr">Отдел продаж бытовой и&nbsp;встраиваемой&nbsp;техники</div>
          <div class="contacts__tel">(050) 420-13-14, (050) 420-13-12</div>
        </div>
        <div class="contacts__card contacts__card--4">
          <div class="contacts__adr">Розничные продажи</div>
          <div class="contacts__tel">(056) 745-24-90, (050) 488-27-03</div>
        </div>
        <div class="contacts__card contacts__card--5">
          <div class="contacts__adr">Сервисное обслуживание</div>
          <div class="contacts__tel">(0562) 36-87-62,63 (050) 487-54-90</div>
        </div>
      </div>
      <div class="contacts__right">
        <div class="contacts__map">
          <iframe class="contacts__iframe" frameborder="0" scrolling="no" width="894" height="490" src="https://maps.google.com/maps?hl=ua&q=днепропетровск ул. володи дубинина, 14&z=16&output=embed">></iframe>
        </div>
      </div>
      <div class="contacts__bottom">
        <a class="contacts__eshop" href="http://condition.com.ua" target="_blank">
          <span>Интернет-магазин</span>
          <b>condition.com.ua</b>
        </a>
        <div class="contacts__social">
          <h3 class="contacts__sochead">Мы в соц. сетях:</h3>
          <a class="contacts__link contacts__link--facebook" href="https://www.facebook.com/Евротехника-интернет-магазин-бытовой-техники-1494970517441419/" title="Facebook">&nbsp;</a>
          <a class="contacts__link contacts__link--vkontakte" href="http://vk.com/club70521286" title="Вконтакте">&nbsp;</a>
          <a class="contacts__link contacts__link--google"href="https://plus.google.com/+ConditionUa/about" title="Google+">&nbsp;</a>
        </div>
      </div>
    </div>
  </div>

  <div class="details">
    <div class="details__container">
      <div class="details__content details__content--half-shown">
        <h1 class="details__title">Идеальная техника для комфортной жизни по лучшим ценам!</h1>
        <p class="details__text">
          <strong>Интернет-магазин бытовой и климатической техники</strong>
          <span>в Украине Evrotehnica предлагает большой выбор разнообразных приборов и оборудования,</span>
          <span>помогающих облегчить жизнь, сделать ее более комфортной, привнести в ваш дом уют!</span>
        </p>
        <p class="details__text">
          <span>У нас представлена различная</span>
          <strong>бытовая и климатическая техника, купить</strong>
          <span>которую вы без проблем сможете как онлайн, так и позвонив нам в магазин.:</span>
        </p>
        <p class="details__text">
          <span>В частности, мы предлагаем современные, эффективные, надежные и простые в эксплуатации:</span>
        </p>
        <ul class="details__list">
          <li class="details__item">кондиционеры;</li>
          <li class="details__item">тепловые насосы</li>
          <li class="details__item">солнечные коллекторы;</li>
          <li class="details__item">разнообразное отопительное оборудование.</li>
        </ul>
        <p class="details__text">
          <span>Evrotehnica является крупнейшей оптово-розничной компанией Днепропетровска</span>
          <span>и Украины, предлагающей качественную климатическую технику.</span>
          <span><strong>Климатическая техника для дома в Украине</strong></span>
          <span>поможет преобразить Ваше пространство в сказку.</span>
        </p>
        <p class="details__text">Мы официальные дилеры многих известных брендов, среди которых:</p>
        <ul class="details__list">
          <li class="details__item">Cooper&amp;Hunter;</li>
          <li class="details__item">Mitsubishi Electric;</li>
          <li class="details__item">Panasonic;</li>
          <li class="details__item">Toshiba;</li>
          <li class="details__item">Neoclima;</li>
          <li class="details__item">Zanussi и другие.</li>
        </ul>
        <h2 class="details__title">Для домов, квартир и общественных помещений</h2>
        <p class="details__text">
          <span>В интернет-магазине Evrotehnica <strong>лучшая бытовая и встраиваемая техника</strong>, </span>
          <span>высококачественная, надежная, позволяющая решать различные задачи.</span>
          <span>Подойдет для квартир, частных домов, а также – кафе, ресторанов, баров. </span>
          <span>А для клиентов, которые желают приобрести эксклюзивную технику – </span>
          <span>мы подберем и привезем под заказ! В частности, у нас вы сможете заказать:</span>
        </p>
        <ul class="details__list">
          <li class="details__item">варочные поверхности и духовые шкафы;</li>
          <li class="details__item">стиральные и сушильные машины;</li>
          <li class="details__item">посудомоечные машины;</li>
          <li class="details__item">холодильники и морозильные камеры;</li>
          <li class="details__item">винные холодильники;</li>
          <li class="details__item">микроволновые печи;</li>
          <li class="details__item">кухонные мойки и многое другое.</li>
        </ul>
        <p class="details__text">
          <span>Мы гарантируем, что вы останетесь довольны сделанными покупками</span>
          <span>в нашем магазине, а вся техника долгие годы будет радовать вас</span>
          <span>своей функциональностью и надежностью.</span>
        </p>
        <h2 class="details__title">Лучшая цифровая техника</h2>
        <p class="details__text">
          <span>Если вас интересует <strong>цифровая техника в Украине</strong>, у нас вы сможете</span>
          <span>приобрести мобильные телефоны и смартфоны от различных производителей.</span>
          <span><strong>Интернет-магазин цифровой техники</strong> EVROTEHNICA поможет в этом.</span>
        </p>
        <p class="details__text">Особо стоит выделить:</p>
        <ul class="details__list">
          <li class="details__item">телевизоры;</li>
          <li class="details__item">ноутбуки и компьютеры</li>
          <li class="details__item">планшеты;</li>
          <li class="details__item">телефоны и смартфоны;</li>
          <li class="details__item">разнообразные аксессуары, компоненты и так далее.</li>
        </ul>
        <p class="details__text">
          <span>Это как простые телефоны, имеющие минимум функций, оснащенные большими кнопками</span>
          <span>и громким звуком, так и многофункциональные, невероятно удобные в эксплуатации и</span>
          <span>производительные смартфоны. <strong>Современная цифровая техника</strong></span>
          <span>- станетвашим настоящими помощником в решении рабочих вопросов,</span>
          <span>позволять развлечься в дороге или просто скоротать время.</span>
        </p>
        <p class="details__text">Также в каталоге представлено множество моделей телевизоров:</p>
        <ul class="details__list">
          <li class="details__item">разных производителей;</li>
          <li class="details__item">с разной длинной диагонали экрана;</li>
          <li class="details__item">с разнообразными функциями.</li>
        </ul>
        <p class="details__text">
          <span>Или вас интересуют компьютеры, ноутбуки – например, для учебы или работы, геймерские</span>
          <span>или для простейших задач? Мы не только предоставляем большой выбор различного</span>
          <span>компьютерного оборудования, но и поможем выбрать конкретную модель в зависимости</span>
          <span>от ваших требований к компьютерной технике и сопутствующим аксессуарам, компонентам.</span>
        </p>
        <p class="details__text">
          <span>Магазин Evrotehnica – только фирменная техника с </span>
          <span>официальной гарантией производителя и по доступным ценам!</span>
        </p>
      </div>
      <a id="expand" class="details__expand" href="javascript:void(0);">Показать полностью</a>
    </div>
  </div>

  <!--noinex-->
  <div class="jqmWindow" id="popup-subscribe">
    <div class="jqmContentWrapper">
      <div class="jqmContent clearfix">
        <div class="modal">
          <?php
            $block = module_invoke('webform', 'block_view', 'client-block-11');
            echo render($block['content']);
          ?>
        </div>
      </div>
      <a href="javascript:void(0);" class="jqmClose" title="Закрыть окно"></a>
    </div>
  </div>

  <div class="jqmWindow" id="popup-feedback">
    <div class="jqmContentWrapper">
      <div class="jqmContent clearfix">
        <div class="modal">
          <?php
            $block = module_invoke('webform', 'block_view', 'client-block-12');
            echo render($block['content']);
          ?>
        </div>
      </div>
      <a href="javascript:void(0);" class="jqmClose" title="Закрыть окно"></a>
    </div>
  </div>

  <?php if (!empty($messages)): ?>
    <div class="jqmWindow" id="popup-messages">
      <div class="jqmContentWrapper">
        <div class="jqmContent clearfix">
          <?php print $messages; ?>
        </div>
        <a href="javascript:void(0);" class="jqmClose" title="Закрыть окно"></a>
      </div>
    </div>
  <?php endif ?>
  <!--/noindex-->

</div>
