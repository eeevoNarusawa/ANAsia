<?php get_template_part('head'); ?>
<header class="l-header">
  <div class="l-header--conts l-header--conts__left">
    <div class="l-header--logo"><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/anasia.svg" alt="AN Asia"></a></div>
    <ul class="l-header--navi l-header--navi__global">
      <a href="<?php echo home_url(); ?>/overview/"><li class="l-header--navi__global--item">About us</li></a>
      <a href="<?php echo home_url(); ?>/job/"><li class="l-header--navi__global--item">Jobs</li></a>
      <a href="<?php echo home_url(); ?>/column/"><li class="l-header--navi__global--item">Articles</li></a>
    </ul>
  </div>
  <div class="l-header--conts l-header--conts__right">
    <div class="l-header--navi l-header--navi__M">
      <a href="<?php echo home_url(); ?>/b-contact/"><div class="c-btn c-btn__pink l-header--btn">For Company</div></a>
      <a href="<?php echo home_url(); ?>/c-contact/"><div class="c-btn c-btn__pink l-header--btn">For Job Seeker</div></a>
    </div>
    <ul class="l-header--navi l-header--navi__lang">
      <li class="l-header--navi__lang--item l-header--active">ENG</li>
      <li>|</li>
      <li class="l-header--navi__lang--item"><a href="<?php echo home_url(); ?>/jp/">JPN</a></li>
    </ul>
  </div>
</header>
