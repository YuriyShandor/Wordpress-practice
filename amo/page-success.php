<?php
/*
Template Name: Сторінка подяки
*/

get_header('thanks'); ?>


<section class="main-section other-page">
  <div class="container">
    <div class="main-section-inside flex">
      <div class="h1"><?php the_field('ttl_7'); ?></div>
      <h2><?php the_field('subttl_7'); ?></h2>
      <div class="btn-block">
        <a href="<?php the_field('file_link'); ?>"  target="_blank"  class="btn-style transition"><?php  
                  if ( qtrans_getLanguage() == 'ru' ) { ?>
                    Смотреть презентацию
                  <?php
                  }
                  elseif ( qtrans_getLanguage() == 'ua' ) { ?>
                    Дивитись презентацію
                  <?php
                    }
              ?></a>
        <a href="<?php the_field('file'); ?>" target="_blank" class="dark btn-style transition"><?php  
                  if ( qtrans_getLanguage() == 'ru' ) { ?>
                    Скачать презентацию
                  <?php
                  }
                  elseif ( qtrans_getLanguage() == 'ua' ) { ?>
                    Завантажити презентацію
                  <?php
                    }
              ?></a>  
      </div>
      <div class="add-block">
        <?php  
                  if ( qtrans_getLanguage() == 'ru' ) { ?>
                    Остались вопросы?
                  <?php
                  }
                  elseif ( qtrans_getLanguage() == 'ua' ) { ?>
                    Залишились запитання?
                  <?php
                    }
              ?> <br>
        <a class="phone" href="tel:<?php the_field('phone','option'); ?>"><?php the_field('phone','option'); ?></a>
      </div>
    </div>
  </div>
</section>


<?php
get_footer('other');
