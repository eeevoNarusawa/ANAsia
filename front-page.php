<?php get_header(); ?>
<div class="l-wrap">
　<div class="p-top-catch">
    <div class="p-top-catch--img"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/top_catch.jpg" alt="マレーシアの就職＆採用ならAN Asia"></div>
    <div class="p-top-catch--img__sp"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sp_top_catch.jpg" alt="マレーシアの就職＆採用ならAN Asia"></div>
    <div class="p-top-catch__copy">
      <h1 class="p-top-catch__text">AN Asia</h1>
      <h3 class="p-top-catch__text">your ideal partner for</h3>
      <h2 class="p-top-catch__text">Company Recruitment & Job-seeker Opportunities</h2>
    </div>
    <div class="p-top-catch--copy__sp">
      <h1 class="p-top-catch__text">AN ASIA your ideal partner</h1>
      <h3 class="p-top-catch__text">for Company Recruitment &</h3>
      <h2 class="p-top-catch__text">Job-seeker Opportunities</h2>
    </div>
  </div>

  <div class="c-conts">
    <div class="c-center"><div class="c-conts--ttl">Why Choose ANAsia</div></div>
    <div class="l-container">
      AN Asia is a recruitment agency that established in 2016 by Malaysian and Japanese who obtain regional knowledge and local market experience. Our founders and consultants who focus on culture and value in Malaysia and Japan to connecting job seekers and employers in the most appropriate way. We offers an unique and professional team to assist finding best solutions to job seekers and employers.
    </div>
    <div class="p-top-why">
      <div class="p-top-why--conts" data-aos="fade-up" data-aos-duration="800" data-aos-offset="80" data-aos-delay="200">
        <div class="p-top-why--icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/top_icon01.png"></div>
        <div class="p-top-why--ttl">Professional recruitment consultancy</div>
        <div>Our skilled consultants help you to find the right job/the right candidate.  We will negotiate the contract to meet your requirement.</div>
      </div>
      <div class="p-top-why--conts" data-aos="fade-up" data-aos-duration="800" data-aos-offset="80" data-aos-delay="400">
        <div class="p-top-why--icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/top_icon02.png"></div>
        <div class="p-top-why--ttl">Jobs in various industries</div>
        <div>We've got jobs in various industries.  We can help you to find a job that fits your career and personal goals.</div>
      </div>
      <div class="p-top-why--conts" data-aos="fade-up" data-aos-duration="800" data-aos-offset="80" data-aos-delay="600">
        <div class="p-top-why--icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/top_icon03.png"></div>
        <div class="p-top-why--ttl">Japanese business etiquettes</div>
        <div>If candidates found the job with us, you have a chance to get JBAA textbook (which you can learn Japanese business etiquettes) and JBAA exam for free.</div>
      </div>
    </div><!-- /.p-top-why -->
  </div><!-- /.c-conts -->

  <div class="c-conts c-conts__pink">
    <div class="c-center"><div class="c-conts--ttl">Jobs</div></div>
    <div class="l-container">
      <?php $args = array(
        "post_type" => "job_en",
        'orderby'          => 'date',  //日付順
        'order'            => 'DESC', //降順
        'meta_key' => 'show_index', //カスタムフィールドのキー
        'meta_value' => 'show', //カスタムフィールドの値
        'meta_compare' => 'LIKE' //'meta_value'のテスト演算子
          );
      $my_query = new WP_Query($args);
      if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
      ?>
        <a href="<?php the_permalink(); ?>">
          <div class="c-conts__list c-job" data-aos="fade-up" data-aos-duration="800" data-aos-offset="80" data-aos-delay="200">
            <div class="c-job--ttl" data-aos="fade-left" data-aos-duration="800" data-aos-offset="80" data-aos-delay="500"><?php the_title(); ?></div>
            <div class="c-job--details">
              <div class="c-job--fee">RM <?php the_field('salary'); ?></div>
              <div class="c-job--location"><?php the_field('location'); ?></div>
            </div>
            <div class="c-job--desc"><?php the_field('top_description'); ?></div>
          </div>
        </a>
      <?php endwhile; endif; wp_reset_postdata(); ?>
      <div class="c-conts--more"><a href="<?php echo home_url(); ?>/job/">view more</a></div>
    </div><!-- /.l-container -->
  </div><!-- /.c-conts -->

  <div class="c-conts">
    <div class="c-center"><div class="c-conts--ttl">Latest Articles</div></div>
    <div class="l-container">
      <?php query_posts('posts_per_page=3&cat=1&paged='.$paged); ?>
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
            <div><?php the_excerpt(); ?></div>
          </div>
        </div>
      </a>
      <?php
        endwhile;
      else:
      ?>
      <p>No articles yet</p>
      <?php
        endif;
      ?>
      <div class="c-conts--more"><a href="<?php echo home_url(); ?>/column/">more articles</a></div>
    </div><!-- /.l-container -->
  </div><!-- /.c-conts -->

  <div class="c-conts c-conts__pink">
    <div class="c-center"><div class="c-conts--ttl">Contact Form</div></div>
    <div class="c-contact">
      <?php echo do_shortcode('[contact-form-7 id="67" title="for_top_en"]'); ?>
    </div>
  </div>

</div><!-- /.l-wrap -->

<?php get_footer(); ?>
