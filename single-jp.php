<?php get_header('jp'); ?>
  <div class="p-column-single--conts">
    <div class="p-column-single--date"><?php the_time('Y.m.d'); ?></div>
    <div class="p-column-single--catch">
      <?php if( get_field('catch') ) { ?>
      <?php $imgid = get_field('catch');
        $img = wp_get_attachment_image_src( $imgid , 'full' ); ?>
      <img src="<?php echo $img[0]; ?>" width="<?php echo $img[1]; ?>" height="<?php echo $img[2]; ?>" alt="<?php the_title_attribute(); ?>">
      <?php } ?>
    </div>
    <div class="p-column-single--ttl"><?php the_title(); ?></div>
    <div class="p-column-single--cont">
      <?php while(have_posts()): the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
    </div>
<!-- 同cat 最新記事表示(現ページ除く) -->
    <?php
    $cats = get_the_category();
    //記事が２つ以上の場合表示
    if(($cats[0]->count) > 1 ):
    ?>
    <div class="p-column-single__recomend">
      <div class="p-column-single__recomend--ttl">最新情報</div>
      <div class="p-column-single__recomend--wrap">
        <?php
          $posts = get_posts('numberposts=4&exclude='.get_the_ID().'&category='.$cats[0]->term_id);
          if($posts): foreach($posts as $post) : setup_postdata($post);
        ?>
        <div class="p-column-single__recomend--conts">
          <a href="<?php the_permalink() ?>">
            <div class="p-column-single__recomend--img">
              <?php if(has_post_thumbnail()): ?>
                <?php the_post_thumbnail(array(202,202)); ?>
              <?php else: ?>
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/no_image.jpg" alt="<?php the_title(); ?>">
              <?php endif; ?>
            </div>
            <div class="p-column-single__recomend--conts--date"><?php the_time('Y.m.d'); ?></div>
            <div><?php the_title(); ?></div>
          </a>
        </div>
        <?php endforeach; endif; ?>
      </div>
    </div><!-- /.p-column-single__recomend -->
    <?php endif; ?>

  </div><!-- /.p-column-single--conts -->
<?php get_footer('jp'); ?>
