<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<title>Document</title>
</head>
<body>
<?php include 'header.php' ?> <!-- Подключение php -->

<!-- начало слайдера -->
<div class="carousel">
  <div class="carousel-inner">
    <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
    <div class="carousel-item">
      <img src="image/slider3.jpg">
    </div>
    <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
    <div class="carousel-item">
      <img src="image/slider2.png">
    </div>
    <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
    <div class="carousel-item">
      <img src="image/slider1.png">
    </div>
    <label for="carousel-3" class="carousel-control prev control-1">‹</label>
    <label for="carousel-2" class="carousel-control next control-1">›</label>
    <label for="carousel-1" class="carousel-control prev control-2">‹</label>
    <label for="carousel-3" class="carousel-control next control-2">›</label>
    <label for="carousel-2" class="carousel-control prev control-3">‹</label>
    <label for="carousel-1" class="carousel-control next control-3">›</label>
    <ol class="carousel-indicators">
      <li>
        <label for="carousel-1" class="carousel-bullet">•</label>
      </li>
      <li>
        <label for="carousel-2" class="carousel-bullet">•</label>
      </li>
      <li>
        <label for="carousel-3" class="carousel-bullet">•</label>
      </li>
    </ol>
  </div>
</div>
<!-- конец слайдера -->

<!-- Блок с полезной информацией -->
<section class="section" id="works">
        <div class="container">
            <div class="section__header"> <!-- Размер блока с предусловием перед полезной информацией -->
                <h3 class="section__suptitle">Все выбирают нас</h3> <!-- Настройка текста -->
                <h2 class="section__title">Почему именно мы?</h2> <!-- Настройка текста -->
                <div class="section__text"> <!-- Настройка текста -->
                    <p>Мы являемся одними из лучших представителей по продаже авто-транспорта.</p>
                </div>
            </div>
        </div>

        <div class="works">
            <div class="works__col">
                <div class="works__item">
                    <img class="works__image" src="image/news6.jpg" alt="">
                    <div class="works__info">
                        <div class="works__title">Новые модели</div>
                        <div class="works__text">Возможность приобретения новой модели, которой еще нет в городе.</div>
                    </div>
                </div>
                <div class="works__item">
                    <img class="works__image" src="image/news7.jpg" alt="">
                    <div class="works__info">
                        <div class="works__title">Стань первым</div>
                        <div class="works__text">Возможность стать первым и единственным собственником транспортного средства.
</div>
                    </div>
                </div>
            </div>

            <div class="works__col">
                <div class="works__item">
                    <img class="works__image" src="image/news8.jpg" alt="">
                    <div class="works__info">
                        <div class="works__title">Документы</div>
                        <div class="works__text">Оформление документов не занимает много времени.</div>
                    </div>
                </div>
                <div class="works__item">
                    <img class="works__image" src="image/news9.jpg" alt="">
                    <div class="works__info">
                        <div class="works__title">Оформление страховки</div>
                        <div class="works__text">При покупке автомобиля в автосалоне, потребителю будет предложено оформить страховку на месте.
</div>
                    </div>
                </div>
            </div>

            <div class="works__col">
                <div class="works__item">
                    <img class="works__image" src="image/news10.jpg" alt="">
                    <div class="works__info">
                        <div class="works__title">Автокредитование</div>
                        <div class="works__text">Возможность получения выгодных предложений от автосалона, лизинга или программы автокредитования.
</div>
                    </div>
                </div>
                <div class="works__item">
                    <img class="works__image" src="image/news6.jpg" alt="">
                    <div class="works__info">
                        <div class="works__title">Плохая история</div>
                        <div class="works__text">Наши диллеры предлагают только лучшие автомобили, без криминального прошлого.</div>
                    </div>
                </div>
            </div>

            <div class="works__col">
                <div class="works__item">
                    <img class="works__image" src="image/news11.jpg" alt="">
                    <div class="works__info">
                        <div class="works__title">Скидки на техобслуживание</div>
                        <div class="works__text">Попали в ДТП в первыю неделю? Мы покроем все расходы на восстановление автомобиля.</div>
                    </div>
                </div>
                <div class="works__item">
                    <img class="works__image" src="image/news12.jpg" alt="">
                    <div class="works__info">
                        <div class="works__title">Юридическая чистота</div>
                        <div class="works__text">Мы проверяем каждый автомобиль перед покупкой.</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.works -->
    </section>


<?php include 'footer.php' ?> <!-- Подключение php -->
</body>
</html>