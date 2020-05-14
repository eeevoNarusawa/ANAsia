<?php
/*
Template Name: Japanese Column
*/
?>
<?php get_header('jp'); ?>
  <div class="l-wrap">
    <div class="c-conts__page p-column-catch">
      <div class="c-conts__page--ttl">マレーシア<br class="sp">お役立ち情報</div>
    </div>
    <div class="l-container p-column-conts">
      <?php query_posts('posts_per_page=3&cat=2&paged='.$paged); ?>
      <?php
        if (have_posts()) :
          while (have_posts()) :
            the_post();
      ?>
      <a href="<?php the_permalink(); ?>">
        <div class="c-conts__list c-article" data-aos="fade-up" data-aos-duration="800" data-aos-offset="80" data-aos-delay="200">
          <div class="c-article--catch">
            <?php if(has_post_thumbnail()): ?>
              <?php the_post_thumbnail(); ?>
            <?php else: ?>
              <img src="<?php bloginfo('stylesheet_directory'); ?>/images/no_image.jpg" alt="<?php the_title(); ?>">
            <?php endif; ?>
          </div>
          <div class="c-article--details">
            <div class="c-article--ttl"><?php the_title(); ?></div>
            <div class="c-article--date"><?php the_time('Y/m/d'); ?></div>
            <div class="c-article--desc"><?php the_excerpt(); ?></div>
          </div>
        </div>
      </a>
      <?php
        endwhile;
      else:
      ?>
      <p>新着お役立ち情報はありません</p>
      <?php
        endif;
      ?>
      <?php if (function_exists("pagination")) {
        pagination($additional_loop->max_num_pages);
      } ?>
    </div><!-- /.l-container /.p-column-conts-->
  </div>
<?php get_footer('jp'); ?>
