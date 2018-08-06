<?php namespace Processwire; ?>

<?php if(!$config->ajax): ?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <?php include_once($config->paths->templates . "common/_head.php"); ?>
</head>

<body>

<div id="sidebar" class="uk-offcanvas">
  <div class="uk-offcanvas-bar">
    <a class="uk-offcanvas-close"></a>
    <div class="uk-offcanvas-bar-inner sidebar">
      <ul class="sidebar__items">
        <li class="sidebar__item"><a href="#">главная</a></li>
        <li class="sidebar__item"><a href="#">схема работы</a></li>
        <li class="sidebar__item"><a href="#">услуги content service</a></li>
        <li class="sidebar__item"><a href="#">кейсы</a></li>
        <li class="sidebar__item"><a href="#">об агенстве</a></li>
        <li class="sidebar__item"><a href="#">бриф</a></li>
        <li class="sidebar__item"><a href="#">контакты</a></li>
      </ul>
      <ul class="sidebar__items sidebar__items_contacts">
        <li class="sidebar__item"><a href="#">оставить заявку</a></li>
        <li class="sidebar__item"><a href="tel:+7961999900">+7961999900</a></li>
      </ul>
    </div>
  </div>
</div>
<div id="callback" class="uk-offcanvas">
  <div class="uk-offcanvas-bar">
    <a class="uk-offcanvas-close"></a>
    <div class="uk-offcanvas-bar-inner callback">
      <h2 class="callback__heading">оставить заявку</h2>
      <form id="callback__form" class="callback__form form" action="/" method="post">
          <div class="form__element form__element_name">
            <label class="label" for="name">Имя</label>
            <input id="name" class="input input_outline js-input" type="text" name="name" value="">
          </div>
          <div class="form__element form__element_phone">
            <label class="label" for="phone">Телефон</label>
            <input id="phone" class="input input_outline js-input js-phone" type="text" name="phone" value="">
          </div>
          <div class="form__element form__element_submit">
            <div class="send">
              <span class="send__text">отправить</span>
              <button id="submit_form" class="send__button" type="submit" name="submit" value="order"></button>
            </div>
          </div>
          <p class="form__text">Нажимая кнопку отправить, вы соглашаетесь на <a href="" target="_blank">обработку персональных данных</a></p>
        </form>
    </div>
  </div>
</div>

<div class="layout">
  <div class="layout__left-bar">
    <div class="hello">
      <h1>Hello</h1>
      <h2>ContentService</h2>
      <p>Создаем продажи в интернете</p>
    </div>
  </div>
  <div class="layout__right-bar">
    <div class="b-services">
      <div class="b-services__grid-wrap">
        <div class="b-services__grid">
          <div class="b-services__cell">
            <div class="b-service">
              <img src="" alt=""/>
              <a href=""></a>
              <div class="b-service__overlay">
                <p class="b-service__title">Создание контента</p>
              </div>
            </div>
          </div>
          <div class="b-services__cell">
            <div class="b-service">
              <img src="" alt=""/>
              <a href=""></a>
              <div class="b-service__overlay">
                <p class="b-service__title">Брендирование</p>
              </div>
            </div>
          </div>
          <div class="b-services__cell">
            <div class="b-service">
              <img src="" alt=""/>
              <a href=""></a>
              <div class="b-service__overlay">
                <p class="b-service__title">Разработка сайта</p>
              </div>
            </div>
          </div>
          <div class="b-services__cell">
            <div class="b-service">
              <img src="" alt=""/>
              <a href=""></a>
              <div class="b-service__overlay">
                <p class="b-service__title">Реклама</p>
              </div>
            </div>
          </div>
          <div class="b-services__cell">
            <div class="b-service">
              <img src="" alt=""/>
              <a href=""></a>
              <div class="b-service__overlay">
                <p class="b-service__title">Реклама</p>
              </div>
            </div>
          </div>
          <div class="b-services__cell">
            <div class="b-service">
              <img src="" alt=""/>
              <a href=""></a>
              <div class="b-service__overlay">
                <p class="b-service__title">Реклама</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php endif; ?>






<?= $templateRender; ?>


<?php if(!$config->ajax): ?>

</body>

</html>

<?php endif?>
