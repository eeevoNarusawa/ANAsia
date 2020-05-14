<?php get_header(); ?>
<div class="l-wrap p-job">
  <div class="c-conts__page p-job-catch">
    <div class="c-conts__page--ttl">Jobs</div>
  </div>
  <div class="p-job-wrap">
    <div class="p-job-conts">

      <?php
      $paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
      $args =	array(
      		'posts_per_page'   => 5,
      		'orderby'          => 'date',
      		'order'            => 'DESC',
      		'post_type'        => 'job_en',
      		'tax_query' => array(
      			array(
      				'taxonomy' => 'jobtype_en', //タクソノミー名
      				'field' => 'slug',
      				'terms' => $term //タームのスラッグ
      				)
      			),
      		'post_status'      => 'publish',
      		'caller_get_posts' => 1,
      		'paged'            =>  $paged
      );
      $wp_query = new WP_Query($args);
      while ($wp_query->have_posts()) : $wp_query->the_post();
      ?>
      <a href="<?php the_permalink(); ?>">
        <div class="c-conts__list c-job">
          <div class="c-job--ttl"><?php the_title(); ?></div>
          <div class="c-job--details">
            <div class="c-job--fee">RM <?php the_field('salary'); ?></div>
            <div class="c-job--location"><?php the_field('location'); ?></div>
          </div>
          <div class="c-job--desc"><?php the_field('top_description'); ?></div>
        </div>
      </a>
      <?php endwhile; ?>

      <!-- pagenation -->
      <?php
        global $wp_rewrite;
        $paginate_base = get_pagenum_link(1);
        if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){
        $paginate_format = '';
        $paginate_base = add_query_arg('paged','%#%');
        }
        else{
        $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
        user_trailingslashit('page/%#%/','paged');;
        $paginate_base .= '%_%';
        }
        echo paginate_links(array(
        'base' => $paginate_base,
        'format' => $paginate_format,
        'total' => $wp_query->max_num_pages,
        'type'  => 'list', //ul liで出力
        'mid_size' => 1, //カレントページの前後
        'end_size' => 0,
        'current' => ($paged ? $paged : 1),
        'prev_text' => '◀︎',
        'next_text' => '▶︎',
        ));
      ?>
    </div><!-- /.p-job-conts -->
    <div class="p-job-sidebar">
      <div class="p-job-sidebar--cat">
        <div class="p-job-sidebar--ttl">JOB LIST</div>
        <ul class="p-job-sidebar--list">
          <?php wp_list_categories('title_li=&taxonomy=jobtype_en'); ?>
        </ul>
      </div>
    </div><!-- /.p-job-sidebar -->
  </div><!-- /.p-job-wrap -->

</div><!-- /.l-wrap -->
<?php get_footer(); ?>
