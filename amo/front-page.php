<?php

get_header(); ?>

<section class="main-section">
  <div class="container">
    <div class="main-section-inside flex fadeInUp animated">
      <?php the_field('text_1_1'); ?>
      <?php the_field('text_1_2'); ?>
      <button data-toggle="modal" data-target="#myModalK" class="btn-style transition"><?php
                  if ( qtrans_getLanguage() == 'ru' ) { ?>
                    Открыть доступ
                  <?php
                  }
                  elseif ( qtrans_getLanguage() == 'ua' ) { ?>
                    Відкрити доступ
                  <?php
                    }
      ?><img class="transition" src="<?php bloginfo("template_directory"); ?>/img/key.png" alt=""></button>
    </div>
  </div>
</section>

<section class="amo-slider__section">
    <div class="container">
      <div class="row">
        <h1 class="ttl-style fadeInUp wow" data-wow-offset="100">Відкрий доступ до 4 кейсів</h1>
      </div>

      <div class="slider-block  fadeInUp">
        <div class="amo-slider row">

          <div class="amo-slider__slide">
            <div class="container">

              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><h2 class="sub-ttl-style fadeInUp wow" data-wow-offset="100">Кейс пекельної автоматизації відділу
        продажу квитків на конференцію Lviv SMM Forum</h2></div>
              </div>

              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 amo-slide__image amo-slide__image_01" style="background-image: url(<?php bloginfo("template_directory"); ?>/img/amo-slider__img_01.jpg); background-repeat: no-repeat; background-size: cover;">
                  <img src="<?php bloginfo("template_directory"); ?>/img/lviv-forum__img.jpg" class="lviv-forum__img" alt="">
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 amo-slide__info">
                  <ul class="what-made"> Що було зроблено?
                    <li>Встановлення телефонії</li>
                    <li>Автоматизація бізнес-процесів та взаємодії з клієнтом</li>
                    <li>SMS-віджет власної розробки</li>
                    <li>Додаткова інтеграція платіжної системи та Telegram-чату</li>
                  </ul>

                  <h3 class="result_h3">
                    Результат:
                  </h3>

                  <div class="result_div">
                    <p class="result_p">Lviv SMM Forum - конференція про маркетинг у соціальних мережах, яка проводиться на регулярній основі. Організувала цю конференцію команда молодих маркетологів</p>
                    <div class="visible-text"><img src="<?php bloginfo("template_directory"); ?>/img/visible-text.png" alt=""></div>
                  </div>

                  <h1 class="get-access">Отримайте доступ до реальних цифр і показників</h1>

                  <button data-toggle="modal" data-target="#myModalK" class="btn-style transition dark fadeInUp wow" data-wow-offset="100">
                              <?php
                                  if ( qtrans_getLanguage() == 'ru' ) { ?>
                                    Открыть доступ
                                  <?php
                                  }
                                  elseif ( qtrans_getLanguage() == 'ua' ) { ?>
                                    Відкрити доступ
                                  <?php
                                    }
                              ?>
                              <img class="transition" src="<?php bloginfo("template_directory"); ?>/img/key.png" alt=""></button>
                </div>
              </div>
            </div>
          </div>

          <div class="amo-slider__slide">
            <div class="container">

              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><h2 class="sub-ttl-style fadeInUp wow" data-wow-offset="100">Побудова відділу продажу з нуля із використанням AmoCRM для Адвокатського
об’єднання “Бачинський, Коломієць та партнери”</h2></div>
              </div>

              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 amo-slide__image amo-slide__image_02" style="background: url(<?php bloginfo("template_directory"); ?>/img/amo-slider__img_02.jpg); background-repeat: no-repeat; background-size: cover;">
                  <img src="<?php bloginfo("template_directory"); ?>/img/Bachinsky__img.jpg" class="bachinsky__img" alt="">
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 amo-slide__info">
                  <ul class="what-made"> Що було зроблено?
                    <li>Підключена віртуальна телефонія Binotel</li>
                    <li>Інтеграція усіх джерел надходження заявок</li>
                    <li>Налаштування аналітики</li>
                    <li>Побудова відділу продажу</li>
                  </ul>

                  <h3 class="result_h3">
                    Результат:
                  </h3>

                  <div class="result_div">
                    <p class="result_p">Як збільшити кількість заявок та продажів у Вашому бізнесі за допомогою нових технологій реклами у Facebook, які ще не використовуюють 95% ваших клієнтів</p>
                    <div class="visible-text"><img src="<?php bloginfo("template_directory"); ?>/img/visible-text.png" alt=""></div>
                  </div>

                  <h1 class="get-access">Отримайте доступ до реальних цифр і показників</h1>

                  <button data-toggle="modal" data-target="#myModalK" class="btn-style transition dark fadeInUp wow" data-wow-offset="100">
                              <?php
                                  if ( qtrans_getLanguage() == 'ru' ) { ?>
                                    Открыть доступ
                                  <?php
                                  }
                                  elseif ( qtrans_getLanguage() == 'ua' ) { ?>
                                    Відкрити доступ
                                  <?php
                                    }
                              ?>
                              <img class="transition" src="<?php bloginfo("template_directory"); ?>/img/key.png" alt=""></button>
                </div>
              </div>
            </div>
          </div>

          <div class="amo-slider__slide">
            <div class="container">

              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><h2 class="sub-ttl-style fadeInUp wow" data-wow-offset="100">Кейс пекельної автоматизації відділу
        продажу квитків на конференцію Lviv SMM Forum</h2></div>
              </div>

              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 amo-slide__image amo-slide__image_03" style="background: url(<?php bloginfo("template_directory"); ?>/img/amo-slider__img_01.jpg); background-repeat: no-repeat; background-size: cover;">
                  <img src="<?php bloginfo("template_directory"); ?>/img/lviv-forum__img.jpg" class="lviv-forum__img" alt="">
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 amo-slide__info">
                  <ul class="what-made"> Що було зроблено?
                    <li>Встановлення телефонії</li>
                    <li>Автоматизація бізнес-процесів та взаємодії з клієнтом</li>
                    <li>SMS-віджет власної розробки</li>
                    <li>Додаткова інтеграція платіжної системи та Telegram-чату</li>
                  </ul>

                  <h3 class="result_h3">
                    Результат:
                  </h3>

                  <div class="result_div">
                    <p class="result_p">Lviv SMM Forum - конференція про маркетинг у соціальних мережах, яка проводиться на регулярній основі. Організувала цю конференцію команда молодих маркетологів</p>
                    <div class="visible-text"><img src="<?php bloginfo("template_directory"); ?>/img/visible-text.png" alt=""></div>
                  </div>

                  <h1 class="get-access">Отримайте доступ до реальних цифр і показників</h1>

                  <button data-toggle="modal" data-target="#myModalK" class="btn-style transition dark fadeInUp wow" data-wow-offset="100">
                              <?php
                                  if ( qtrans_getLanguage() == 'ru' ) { ?>
                                    Открыть доступ
                                  <?php
                                  }
                                  elseif ( qtrans_getLanguage() == 'ua' ) { ?>
                                    Відкрити доступ
                                  <?php
                                    }
                              ?>
                              <img class="transition" src="<?php bloginfo("template_directory"); ?>/img/key.png" alt=""></button>
                </div>
              </div>
            </div>
          </div>

          <div class="amo-slider__slide">
            <div class="container">

              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><h2 class="sub-ttl-style fadeInUp wow" data-wow-offset="100">Кейс пекельної автоматизації відділу
        продажу квитків на конференцію Lviv SMM Forum</h2></div>
              </div>

              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 amo-slide__image amo-slide__image_04" style="background: url(<?php bloginfo("template_directory"); ?>/img/amo-slider__img_01.jpg); background-repeat: no-repeat; background-size: cover;">
                  <img src="<?php bloginfo("template_directory"); ?>/img/lviv-forum__img.jpg" class="lviv-forum__img" alt="">
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 amo-slide__info">
                  <ul class="what-made"> Що було зроблено?
                    <li>Встановлення телефонії</li>
                    <li>Автоматизація бізнес-процесів та взаємодії з клієнтом</li>
                    <li>SMS-віджет власної розробки</li>
                    <li>Додаткова інтеграція платіжної системи та Telegram-чату</li>
                  </ul>

                  <h3 class="result_h3">
                    Результат:
                  </h3>

                  <div class="result_div">
                    <p class="result_p">Lviv SMM Forum - конференція про маркетинг у соціальних мережах, яка проводиться на регулярній основі. Організувала цю конференцію команда молодих маркетологів</p>
                    <div class="visible-text"><img src="<?php bloginfo("template_directory"); ?>/img/visible-text.png" alt=""></div>
                  </div>

                  <h1 class="get-access">Отримайте доступ до реальних цифр і показників</h1>

                  <button data-toggle="modal" data-target="#myModalK" class="btn-style transition dark fadeInUp wow" data-wow-offset="100">
                              <?php
                                  if ( qtrans_getLanguage() == 'ru' ) { ?>
                                    Открыть доступ
                                  <?php
                                  }
                                  elseif ( qtrans_getLanguage() == 'ua' ) { ?>
                                    Відкрити доступ
                                  <?php
                                    }
                              ?>
                              <img class="transition" src="<?php bloginfo("template_directory"); ?>/img/key.png" alt=""></button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="amo-slider__arrows">
          <div class="amo-slider__arrow amo-slider__arrow-prew"><img src="<?php bloginfo("template_directory"); ?>/img/slider__next-arrow.png" alt=""></div>
          <div class="amo-slider__arrow amo-slider__arrow-next"><img src="<?php bloginfo("template_directory"); ?>/img/slider__next-arrow.png" alt=""></div>
        </div>
      </div>

    </div>
  </section>

<section class="second-section">
  <div class="container">
    <div class="ttl-style fadeInUp wow" data-wow-offset="100"><?php the_field('text_2_1'); ?></div>
    <div class="sub-ttl-style fadeInUp wow" data-wow-offset="100"><?php the_field('text_2_2'); ?></div>
  </div>
  <div class="second-section-slide fadeInUp wow" data-wow-offset="100">
    <img src="<?php bloginfo("template_directory"); ?>/img/slide.jpg" alt="">
  </div>
  <button data-toggle="modal" data-target="#myModalK" class="btn-style transition dark fadeInUp wow" data-wow-offset="100">
              <?php
                  if ( qtrans_getLanguage() == 'ru' ) { ?>
                    Открыть доступ
                  <?php
                  }
                  elseif ( qtrans_getLanguage() == 'ua' ) { ?>
                    Відкрити доступ
                  <?php
                    }
              ?>
              <img class="transition" src="<?php bloginfo("template_directory"); ?>/img/key.png" alt=""></button>
</section>

<section class="third">
  <div class="container">
    <div class="ttl-style mb-big fadeInUp wow" data-wow-offset="100"><?php the_field('text_3_1'); ?></div>
    <div class="third-container flex">
      <img src="<?php bloginfo("template_directory"); ?>/img/moq.png" class="moq transX" alt="img">
      <div class="third-container-column">
        <div class="third-container-column-item item-1 fadeInUp wow" data-wow-offset="100">
          <div class="third-container-column-item-ttl">
            <?php the_field('ttl_3_2_1'); ?>
            <img src="<?php bloginfo("template_directory"); ?>/img/dot.png">
          </div>
          <p><?php the_field('text_3_2_1'); ?></p>
          <img src="<?php bloginfo("template_directory"); ?>/img/i1.png" alt="icon">
        </div>
        <div class="third-container-column-item item-2 fadeInUp wow" data-wow-offset="100">
          <div class="third-container-column-item-ttl">
            <?php the_field('ttl_3_2_2'); ?>
            <img src="<?php bloginfo("template_directory"); ?>/img/dot.png">
          </div>
          <p><?php the_field('text_3_2_2'); ?></p>
          <img src="<?php bloginfo("template_directory"); ?>/img/i2.png" alt="icon">
        </div>
      </div>
      <div class="third-container-column">
        <div class="third-container-column-item item-3 fadeInUp wow" data-wow-offset="100">
          <div class="third-container-column-item-ttl">
            <?php the_field('ttl_3_2_3'); ?>
            <img src="<?php bloginfo("template_directory"); ?>/img/dot.png">
          </div>
          <p><?php the_field('text_3_2_3'); ?></p>
          <img src="<?php bloginfo("template_directory"); ?>/img/i3.png" alt="icon">
        </div>
        <div class="third-container-column-item item-4 fadeInUp wow" data-wow-offset="100">
          <div class="third-container-column-item-ttl">
           <?php the_field('ttl_3_2_4'); ?>
            <img src="<?php bloginfo("template_directory"); ?>/img/dot.png">
          </div>
          <p><?php the_field('text_3_2_4'); ?></p>
          <img src="<?php bloginfo("template_directory"); ?>/img/i4.png" alt="icon">
        </div>
        <div class="third-container-column-item item-5 fadeInUp wow" data-wow-offset="100">
          <div class="third-container-column-item-ttl">
            <?php the_field('ttl_3_2_5'); ?>
            <img src="<?php bloginfo("template_directory"); ?>/img/dot.png">
          </div>
          <p><?php the_field('text_3_2_4'); ?></p>
          <img src="<?php bloginfo("template_directory"); ?>/img/i5.png" alt="icon">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="fourth-section">
  <div class="container">
    <div class="ttl-style mb-big fadeInUp wow" data-wow-offset="100"><?php the_field('text_4'); ?></div>
    <div class="fourth-section-row">
      <div class="clearfix"></div>
      <div class="fourth-section-row-item fadeInUp wow" data-wow-offset="100">
        <div class="fourth-section-row-item-inside">
          <img src="<?php bloginfo("template_directory"); ?>/img/01.png" alt="">
          <?php the_field('text_4_2_1'); ?>
        </div>
      </div>
      <div class="fourth-section-row-item fadeInUp wow" data-wow-offset="100">
        <div class="fourth-section-row-item-inside">
          <img src="<?php bloginfo("template_directory"); ?>/img/02.png" alt="">
          <?php the_field('text_4_2_2'); ?>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="fourth-section-inside fadeInUp wow" data-wow-offset="100" >
      <div class="ttl-style"><?php the_field('text_4_3'); ?>  </div>
      <div class="sub-ttl-style"><?php the_field('text_4_4'); ?>  </div>
      <button data-toggle="modal" data-target="#myModalK" class="btn-style transition"><?php
                  if ( qtrans_getLanguage() == 'ru' ) { ?>
                    Открыть доступ
                  <?php
                  }
                  elseif ( qtrans_getLanguage() == 'ua' ) { ?>
                    Відкрити доступ
                  <?php
                    }
              ?> <img class="transition" src="<?php bloginfo("template_directory"); ?>/img/key.png" alt=""></button>
    </div>

  </div>
</section>

<section class="fifth">
  <div class="container">
    <div class="ttl-style fadeInUp wow" data-wow-offset="100"><?php the_field('text_5_1'); ?> </div>
    <div class="sub-ttl-style fadeInUp wow" data-wow-offset="100"><?php the_field('text_5_2'); ?></div>
    <div class="ttl-style fadeInUp wow" data-wow-offset="100"><?php the_field('text_5_3'); ?></div>
    <div class="row">
      <?php if( have_rows('rep_5') ): ?>
        <?php while( have_rows('rep_5') ): the_row();
                   // vars
            $rep51 = get_sub_field('rep_5_1');
            $rep52 = get_sub_field('rep_5_2');
            $rep53 = get_sub_field('rep_5_3');

         ?>

          <div class="col-xs-12 col-sm-4 fifth-item fadeInUp wow" data-wow-offset="100">
            <img src="<?php echo $rep51; ?>" alt="">
            <div class="fifth-item-ttl"><?php echo $rep52; ?></div>
            <p><?php echo $rep53; ?></p>
          </div>

        <?php endwhile; ?>
      <?php endif; ?>

    </div>
    <div class="fifth-row">
      <div class="ttl-style fadeInUp wow" data-wow-offset="100"><?php the_field('text_5_4'); ?></div>
      <div class="sub-ttl-style fadeInUp wow" data-wow-offset="100"><?php the_field('text_5_5'); ?></div>
      <button data-toggle="modal" data-target="#myModalK" class="btn-style transition dark fadeInUp wow" data-wow-offset="100"><?php
                  if ( qtrans_getLanguage() == 'ru' ) { ?>
                    Открыть доступ
                  <?php
                  }
                  elseif ( qtrans_getLanguage() == 'ua' ) { ?>
                    Відкрити доступ
                  <?php
                    }
              ?><img class="transition" src="<?php bloginfo("template_directory"); ?>/img/key.png" alt=""></button>
    </div>
  </div>
</section>

<?php
get_footer();
