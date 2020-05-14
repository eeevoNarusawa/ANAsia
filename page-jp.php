<?php get_header('jp'); ?>
  <div class="l-wrap">
  　<div class="p-top-catch">
      <div class="p-top-catch--img"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/top_catch.jpg" alt="マレーシアの就職＆採用ならAN Asia"></div>
      <div class="p-top-catch--img__sp"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sp_top_catch.jpg" alt="マレーシアの就職＆採用ならAN Asia"></div>
      <div class="p-top-catch__copy">
        <h3 class="p-top-catch__text">マレーシアの</h3>
        <h2 class="p-top-catch__text">就職＆採用ならAN Asia</h2>
      </div>
    </div>

    <div class="c-conts">
      <div class="c-center"><div class="c-conts--ttl">ANAsiaが選ばれる理由</div></div>
      <div class="l-container">AN Asiaは、日本在住歴が長いマレーシア人と、マレーシア在住歴が長い日本人が2016年に立ち上げた人材紹介会社です。マレーシアと日本、双方の文化と価値を大切にする創業者とキャリアコンサルタントたちが、マレーシアと日本の求職者様と企業様が最適な形で出会えるよう、全力でお手伝いいたします。AN Asiaは、大手人材紹介企業とはまったく異なる価値を求職者様、企業様双方にご提供いたします。</div>
      <div class="p-top-why">
        <div class="p-top-why--conts" data-aos="fade-up" data-aos-duration="800" data-aos-offset="80" data-aos-delay="200">
          <div class="p-top-why--icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/top_icon01.png"></div>
          <div class="p-top-why--ttl">マレーシア⇔日本双方向の就職をサポート</div>
          <div>現在日本在住でマレーシア就職を目指している方、現在マレーシアで働いているが日本に帰国して就職することを目指している方、両方の就職をサポート。</div>
        </div>
        <div class="p-top-why--conts" data-aos="fade-up" data-aos-duration="800" data-aos-offset="80" data-aos-delay="400">
          <div class="p-top-why--icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/top_icon04.png"></div>
          <div class="p-top-why--ttl">安心!日本人とマレーシア人のリクルーターが担当</div>
          <div>マレーシア在住歴が長い日本人アドバイザーが担当するので安心！また、経験豊富なマレーシア人コンサルタントが面接や履歴書についてアドバイスします。</div>
        </div>
        <div class="p-top-why--conts" data-aos="fade-up" data-aos-duration="800" data-aos-offset="80" data-aos-delay="600">
          <div class="p-top-why--icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/top_icon02.png"></div>
          <div class="p-top-why--ttl">多種多様な職種の求人案件あり</div>
          <div>マレーシア/日本での、さまざまな業界、職種、キャリアの求人案件をご用意しております。4大卒の新卒の方にご紹介できる案件もあります。</div>
        </div>
      </div><!-- /.p-top-why -->
    </div><!-- /.c-conts -->

    <div class="c-conts c-conts__pink">
      <div class="c-center"><div class="c-conts--ttl">新着求人</div></div>
      <div class="l-container">
        <?php $args = array(
          "post_type" => "job_jp",
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
        <div class="c-conts--more"><a href="<?php echo home_url(); ?>/jp/job/">新着求人をもっと見る</a></div>
      </div><!-- /.l-container -->
    </div><!-- /.c-conts -->

    <div class="c-conts">
      <div class="c-center"><div class="c-conts--ttl">マレーシア就職<br class="sp">お役立ち情報</div></div>
      <div class="l-container">
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
              <div><?php the_excerpt(); ?></div>
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
        <div class="c-conts--more"><a href="<?php echo home_url(); ?>/jp/column/">お役立ち情報をもっと見る</a></div>
      </div><!-- /.l-container -->
    </div><!-- /.c-conts -->

    <div class="c-conts c-conts__pink">
      <div class="c-center"><div class="c-conts--ttl">お問い合わせ</div></div>
      <div class="c-contact">
        <?php echo do_shortcode('[contact-form-7 id="106" title="for_top_jp"]'); ?>
      </div>
    </div>

    <div class="c-conts__pink p-top-desc">
      <div class="l-container">
        <div class="p-top-desc--ttl">マレーシア⇔日本の就職＆転職をサポート</div>
        <div class="p-top-desc--text">
          <p>AN Asiaは、マレーシア就職/転職はもちろん、マレーシアから日本へのUターン就職/転職もサポートいたします。</p>
          <p>マレーシアの事情に精通した日本人、日本の事情に精通したマレーシア人のキャリアコンサルタントが、求職者の方が希望されるキャリアパスやこれまでの経歴に合う職種、ポジションをご提案します。</p>
          <p>マレーシア国内での就職/転職はもちろん、マレーシアで大学を卒業された新卒の方、マレーシアでキャリアアップして日本にUターン転職を希望されている方のコンサルティングも行っております。</p>
        </div>
        <div class="p-top-desc--ttl">マレーシアで働くならどのエリア？</div>
        <div class="p-top-desc--text">
          <p class="p-top-desc--text__bottom">日本人を対象とした求人が多いのは、日系企業が多い都市部が中心。求人数が多いのはだんとつでクアラルンプールとその近郊のセランゴール州です。</p>
          <p>・クアラルンプール（首都）：日本人の大部分はクアラルンプール在住。歴史ある日本人コミュニティがあり、発展した住みやすいエリア。求人数は多く、仕事を見つけやすい。</p>
          <p>・セランゴール州：クアラルンプール近郊のエリア。工業団地に工場を構える日系製造業多数。求人数は多く、仕事は見つけやすいが、公共交通機関があまり発達しておらず車がないと不便。</p>
          <p>・ペナン州：発展したペナン島の都市部が観光地として有名ですが、橋を渡った半島部には工業地帯が広がり日系企業も多数。移動には車が必須だが、程よく発展して住みやすいエリア。求人数はあまりない。</p>
          <p>・ジョホールバル：マレー半島南端に位置するシンガポ―ルに最も近い町。日本人コミュニティあり。求人数は少ない。</p>
          <p>・サバ州/サラワク州：ボルネオ島に位置し、製造業が多いエリア。求人数は少ないが、給与は高め。</p>
        </div>
        <div class="p-top-desc--ttl">マレーシア就職に役立つコラム更新中</div>
        <div class="p-top-desc--text">
          <p class="p-top-desc--text__bottom">マレーシア就職やマレーシアでの生活に役立つようなコラムを随時更新しています。現地の生活や物価、オフィスで働く様子が分かるようなコラムなので、「マレーシアで働きたいけど、現地での生活がちょっと不安」という方はぜひご覧ください。</p>
          <p>・マレーシアの日系企業で働く日本人の通勤用オフィスカジュアル</p>
          <p>・転職に必須の英文履歴書を書くコツと裏技</p>
          <p>・「現地採用」と「正社員」の違いとは</p>
          <p>・クアラルンプールの通勤手段</p>
          <p>・現地採用のランチ事情にみるマレーシアの物価</p>
          <p>・私がマレーシアで働く理由～新卒でマレーシアに就職した24歳に聞きました</p>
          <p><a href="https://www.go-malaysia.info/category/jobsearch/jobsearch-relation" target="_blank">マレーシアで働く日本人による「マレーシア就職コラム」</a></p>
        </div>
      </div>
    </div>

  </div><!-- /.l-wrap -->
<?php get_footer('jp'); ?>
