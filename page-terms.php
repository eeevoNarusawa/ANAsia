<?php
/*
Template Name: English Term of Service and Privacy Policy
*/
?>
<?php get_header(); ?>
  <div class="l-wrap">
    <div class="c-conts c-conts__pink">
      <div class="c-center"><div class="c-conts--ttl"><?php the_title(); ?></div></div>
      <div class="l-container">
        <div class="c-conts__list">
          <?php while(have_posts()): the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>
