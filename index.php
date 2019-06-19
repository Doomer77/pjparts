<!DOCTYPE html>
<html>
<head>
  <title>P.J.Parts</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/validate.js/0.11.1/validate.min.js"></script>
  <link href="assets/css/style.css" rel="stylesheet">
  <meta name="robots" content="index, follow"/>
  <meta name="description" content="Обслуживание дизельных генераторов FG Wilson, SDMO, Caterpillar, Cummins"/>
  <meta name="keywords" content="Обслуживание дизельных генераторов FG Wilson, SDMO, Caterpillar, Cummins"/>
  <link href="favicon.ico" rel="shortcut icon" type="image/x-icon"/>
  <meta name="yandex-verification" content="56b1fb2eac182864"/>
</head>
<body>
  <?php include("include/analyticstracking.php");?>
  <?php include("include/yandex-metrika.php");?>
	<?php include("include/block-header.php");?>
	<div class="modal js-modal">
    <div class="modal__wrap">
      <div class="modal__header">
        <a href="/" class="modal__logo">
          <img src="assets/img/logo.svg" alt="">
        </a>
        <a href="" class="modal__close js-btn-close">
          <span>Закрыть</span>
          <img src="assets/img/close.svg" alt="">
        </a>
      </div>
      <input class="modal__input js-input-search" placeholder="Начинайте вводить название детали" type="text">
      <div class="modal__content-result">
      </div>
    </div>
  </div>
  <div class="intro">
    <div class="container">
      <div class="intro__info">
        <h1>Сервис дизельных генераторов</h1>
        <p>
          Мы выполняем пуско-наладочные работы, техническое обслуживание и ремонт дизельных генераторов <strong><span class="brand-style">SDMO, FG Wilson, Cummins, Gesan, Caterpillar, Lister Petter</span></strong>.</p>
          <p>Осуществляем поставки расходных материалов и запасныч частей для двигателей <strong><span class="brand-style">Perkins, Kubota, John Deere, Scania, Mitsubishi, Duetz</span></strong>.</p>
		<p>При проведении технического обслуживания дизельных генераторов, мы используем только качественые и оригинальные расходные материалы.</p>
      </div>
      <div class="intro__form js-intro-form">
        <h2>Оформить заявку на ТО:</h2>
        <form action="" class="js-form">
          <input type="text" name="name" placeholder="Ваше имя" required>
          <input type="email" name="email" class="email-input js-email" placeholder="E-mail">
          <input type="tel" name="tel" maxlength="12" class="js-phone" placeholder="8 (915) 555-55-55" required>
          <textarea name="message" id="" cols="30" rows="10" placeholder="Дополнительная информация"></textarea>
          <button class="btn btn-send js-submit" type="submit" disabled>Отправить</button>
        </form>
      </div>
      <div class="intro__submit-form js-submit-form">
        <h2>Спасибо!</h2>
        <p>Наши специалисты свяжутся с вами в ближайшее время!</p>
      </div>
    </div>
    <div class="promo">
      <div class="container">
        <?php include("include/block-table.php");?>
      </div>
    </div>
  </div>

  <div class="clients">
    <div class="container">
      <h1>Мы обслуживаем:</h1>
      <div class="clients__wrap">
        <img src="assets/img/brand1.svg" alt="" class="clients__item">
        <img src="assets/img/brand2.svg" alt="" class="clients__item">
        <img src="assets/img/brand3.svg" alt="" class="clients__item">
        <img src="assets/img/brand4.svg" alt="" class="clients__item">
        <img src="assets/img/brand5.svg" alt="" class="clients__item">
        <img src="assets/img/brand6.svg" alt="" class="clients__item">
        <img src="assets/img/brand7.svg" alt="" class="clients__item">
      </div>
    </div>
  </div>
  <div class="advantages">
    <div class="container">
      <h1>Наши преимущества</h1>
      <div class="advantages__wrap">
        <div class="advantages__item">
          <img src="assets/img/icon1.svg" alt="" class="advantages__img">
          <p class="advantages__about">Заключение договора и выдача отчетной документации</p>
        </div>

        <div class="advantages__item">
          <img src="assets/img/icon2.svg" alt="" class="advantages__img">
          <p class="advantages__about">Обслуживание частного сектора и выезд в ближайшие регионы</p>
        </div>

        <div class="advantages__item">
          <img src="assets/img/icon3.svg" alt="" class="advantages__img">
          <p class="advantages__about">Допуски к работам с напряжением до 1000v</p>
        </div>

        <div class="advantages__item">
          <img src="assets/img/icon4.svg" alt="" class="advantages__img">
          <p class="advantages__about">Техническая поддержка 24 / 7</p>
        </div>

        <div class="advantages__item">
          <img src="assets/img/icon5.svg" alt="" class="advantages__img">
          <p class="advantages__about">Использование качественных расходных материалов</p>
        </div>

        <div class="advantages__item">
          <img src="assets/img/icon6.svg" alt="" class="advantages__img">
          <p class="advantages__about">Доступная цена</p>
        </div>
      </div>
    </div>
  </div>
  <div class="contacts">
    <div class="container">
      <h1>Контакты</h1>
      <p class="contacts__address">Наш адрес: Россия, Москва, Верхняя Красносельская улица, 2/1. Ориентир - кафе
        "Советские времена".</p>
      <p class="contacts__details">Реквизиты: ОГРНИП: 317502700048886</p>
      <span>Телефон: <a class="contacts__phone" href="tel:84993916031">+7 (499) 391-60-31</a></span>
      <span>
            Телефоны сервисной службы 24/7: <a href="tel:+79267360018" class="contacts__phone">+7 (926) 736-00-18</a>,
            <a href="tel:89853330232" class="contacts__phone">+7 (985) 333-02-32</a>
        </span>
    </div>
  </div>
  <div id="map">


  </div>
  <?php include("include/block-footer.php");?>
</body>

<script src="assets/js/fetch.js?"></script>
<script src="assets/js/scripts.js?"></script>
</html>
