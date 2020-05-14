<?php get_template_part('head'); ?>
<div class="jp">
  <header class="l-header">
    <div class="l-header--conts l-header--conts__left">
      <div class="l-header--logo"><a href="<?php echo home_url(); ?>/jp/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/anasia.svg" alt="AN Asia"></a></div>
      <ul class="l-header--navi l-header--navi__global">
        <a href="<?php echo home_url(); ?>/jp/overview/"><li class="l-header--navi__global--item">企業概要</li></a>
        <a href="<?php echo home_url(); ?>/jp/job/"><li class="l-header--navi__global--item">新着求人</li></a>
        <a href="<?php echo home_url(); ?>/jp/column/"><li class="l-header--navi__global--item">コラム</li></a>
      </ul>
    </div>
    <div class="l-header--conts l-header--conts__right">
      <div class="l-header--navi l-header--navi__M">
        <a href="<?php echo home_url(); ?>/jp/b-contact/"><div class="c-btn c-btn__pink l-header--btn">企業様はこちら</div></a>
        <a href="<?php echo home_url(); ?>/jp/c-contact/"><div class="c-btn c-btn__pink l-header--btn">求職者様はこちら</div></a>
      </div>
      <ul class="l-header--navi l-header--navi__lang">
        <li class="l-header--navi__lang--item"><a href="<?php echo home_url(); ?>">ENG</a></li>
        <li>|</li>
        <li class="l-header--navi__lang--item l-header--active">JPN</li>
      </ul>
    </div>
  </header>
