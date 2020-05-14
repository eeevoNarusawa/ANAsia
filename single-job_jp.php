<?php get_header('jp'); ?>
  <div class="l-wrap p-job">
    <div class="p-job-single--wrap">
      <div class="p-job-single--date"><?php the_time('Y.m.d') ?> 更新</div>
      <div class="p-job-wrap">
        <div class="p-job-single--conts">
          <div class="p-job-single--ttl"><?php the_title(); ?></div>
          <table class="p-job-single--table">
            <tr>
              <th>業種</th><td><?php the_field('industry'); ?></td>
            </tr>
            <tr>
              <th>基本給</th><td>RM<?php the_field('salary'); ?></td>
            </tr>
            <tr>
              <th>勤務地</th><td><?php the_field('location'); ?></td>
            </tr>
            <tr>
              <th>勤務時間</th><td><?php the_field('hours'); ?></td>
            </tr>
          </table>
          <div class="p-job-single--desc">
            <div><strong>業務内容</strong></div>
            <div><?php the_field('description'); ?></div>
          </div>
          <div class="p-job-single--requirements">
            <div><strong>応募要項</strong></div>
            <div><?php the_field('requirements'); ?></div>
          </div>
          <div class="p-job-single--language">
            <div><strong>必要言語</strong></div>
            <div><?php the_field('language'); ?></div>
          </div>
        </div>
        <div class="p-job-sidebar p-job-sidebar__sp">
          <div class="p-job-sidebar--cat">
            <div class="p-job-sidebar--ttl">カテゴリで探す</div>
            <ul class="p-job-sidebar--list">
              <?php wp_list_categories('title_li=&taxonomy=jobtype_jp'); ?>
            </ul>
          </div>
          <div class="p-job-sidebar--recommend">
            <div class="p-job-sidebar--ttl">他のオススメ求人</div>
            <div>
              <?php
                global $post;
                $term = array_shift(get_the_terms($post->ID, 'jobtype_jp')); //←ここが追加
                $args = array(
                'numberposts' => 3, //８件表示(デフォルトは５件)
                'post_type' => 'job_jp', //カスタム投稿タイプ名
                'taxonomy' => 'jobtype_jp', //タクソノミー名
                'term' => $term->slug, //ターム名 ←ここが追加
                'orderby' => 'date',
                'post__not_in' => array($post->ID) //表示中の記事を除外
                );
              ?>
              <?php $myPosts = get_posts($args); if($myPosts) : ?>
              <?php foreach($myPosts as $post) : setup_postdata($post); ?>
                <a href="<?php the_permalink(); ?>">
                  <div class="p-job-sidebar--recommend--conts">
                    <div class="p-job-sidebar--recommend--ttl"><?php the_title(); ?></div>
                    <div class="p-job-sidebar--recommend--salary">RM<?php the_field('salary'); ?></div>
                    <div class="p-job-sidebar--recommend--location"><?php the_field('location'); ?></div>
                  </div>
                </a>
              <?php endforeach; ?>
              <?php else : ?>
               <p>他のオススメ求人はありません</p>
              <?php endif; wp_reset_postdata(); ?>
            </div>
          </div><!-- /.p-job-sidebar--recommend -->
        </div><!-- /.p-job-sidebar -->
      </div><!-- /.p-job-wrap -->

      <div class="c-contact">
        <div class="c-contact--cont p-job-single--contact--ttl">
         <div class="c-contact--ttl"><span class="c-contact-must"></span>この求人のお申込</div>
         <div class="c-contact--input"><?php the_title(); ?></div>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="132" title="for_single_jp"]'); ?>
      </div>

    </div><!-- /.p-job-single--wrap -->
  </div>
<?php get_footer('jp'); ?>
