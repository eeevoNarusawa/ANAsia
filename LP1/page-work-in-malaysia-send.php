<?php
/*
Template Name: work-in-malaysia-send
*/
?>
<!DOCTYPE html>
<html>
  <head>
    <!-- Yahooリスティング -->
    <script async src="https://s.yimg.jp/images/listing/tool/cv/ytag.js"></script>
    <script>
    window.yjDataLayer = window.yjDataLayer || [];
    function ytag() { yjDataLayer.push(arguments); }
    ytag({"type":"ycl_cookie"});
    </script>

    <script async>
    ytag({
      "type": "yss_conversion",
      "config": {
        "yahoo_conversion_id": "1001129173",
        "yahoo_conversion_label": "mQ7jCNHsldIBEJOjv6sC",
        "yahoo_conversion_value": "0"
      }
    });
    </script>

    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/reset.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/LP1/style.css?20200727">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <!-- noindex -->
    <meta name=”robots” content=”noindex” />
    <!-- Discription -->
    <meta name="description" itemprop="description" content="海外移住先として人気No1のマレーシアで働こう。マレーシアでの仕事に興味をお持ちのあなた、An asiaでは日本人求人の案件を多数ご用意!マレーシアでの仕事、生活について無料でアドバイスをしています。">
    <!-- canonical -->
    <?php if ( is_home() ) {
      $canonical_url=get_bloginfo('url')."/";
    } else if (is_category()) {
      $canonical_url=get_category_link(get_query_var('cat'));
    } else if (is_page()||is_single()) {
      $canonical_url=get_permalink();
    } if ( $paged >= 2 || $page >= 2) {
    $canonical_url=$canonical_url.'page/'.max( $paged, $page ).'/';
    } ?>
    <?php if(!(is_404())):?>
      <link rel="canonical" href="<?php echo $canonical_url; ?>" />
    <?php endif;?>

    <title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Global site tag (gtag.js) - Google Ads: 987123369 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-987123369"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'AW-987123369');
    </script>
    <!-- Event snippet for AN Asia LP1 申込 conversion page -->
    <script>
      gtag('event', 'conversion', {'send_to': 'AW-987123369/YYTxCPux56IBEKmd2dYD'});
    </script>

    <!-- Event snippet for SP LINE 友だち追加 conversion page
    In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
    <script>
      function gtag_report_conversion(url) {
        var callback = function () {
          if (typeof(url) != 'undefined') {
            window.location = url;
          }
        };
        gtag('event', 'conversion', {
            'send_to': 'AW-987123369/bSGJCOa4oKUBEKmd2dYD',
            'event_callback': callback
        });
        return false;
      }
    </script>

    <?php wp_head(); ?>
  </head>

  <body>

    <div class="sp-navi">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/LP1/image/toggle_black.png" class="sp-navi-toggle">
      <div class="sp-navi-menu">
        <ul>
          <img src="<?php bloginfo('stylesheet_directory'); ?>/LP1/image/toggle_black.png" class="hide-sp-navi-toggle">
          <a href="<?php echo home_url(); ?>/work-in-malaysia/#why"><li>なぜマレーシア？</li></a>
          <a href="<?php echo home_url(); ?>/work-in-malaysia/#job-search"><li>求人例</li></a>
          <a href="<?php echo home_url(); ?>/work-in-malaysia/#voice"><li>マレーシアで働く日本人の声</li></a>
          <a href="<?php echo home_url(); ?>/work-in-malaysia/#faq"><li>Q&A</li></a>
          <a href="<?php echo home_url(); ?>/work-in-malaysia/#reason"><li>選ばれる理由</li></a>
          <a href="<?php echo home_url(); ?>/work-in-malaysia/#contact"><li>お問い合わせ</li></a>
        </ul>
      </div>
    </div><!-- sp nav -->

    <div class="container">
      <header id="top" class="clearfix">
        <a href="<?php echo home_url(); ?>/work-in-malaysia/"><div class="logo"><img src="<?php bloginfo('stylesheet_directory'); ?>/LP1/image/logo.png" alt="AN asia"></div></a>
        <nav>
          <ul>
            <a href="<?php echo home_url(); ?>/work-in-malaysia/#why"><li>なぜマレーシア？</li></a>
            <a href="<?php echo home_url(); ?>/work-in-malaysia/#job-search"><li>求人例</li></a>
            <a href="<?php echo home_url(); ?>/work-in-malaysia/#voice"><li>マレーシアで働く日本人の声</li></a>
            <a href="<?php echo home_url(); ?>/work-in-malaysia/#faq"><li>Q&A</li></a>
            <a href="<?php echo home_url(); ?>/work-in-malaysia/#reason"><li>選ばれる理由</li></a>
            <a href="<?php echo home_url(); ?>/work-in-malaysia/#contact"><li>お問い合わせ</li></a>
          </ul>
        </nav>
      </header>

      <div class="send-kv">
        <picture>
          <source media="(max-width: 812px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/LP1/image/sp/send_kv.jpg">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/LP1/image/send_kv.jpg">
        </picture>
        <div class="send-kv_thx">ご登録いただき<br class="send-sp">ありがとうございます</div>
      </div>
      <div class="send-copy">
        マレーシア就職への第一歩を踏み出しましたね！<br>
        AN ASIAスタッフ一同、<br class="send-sp">全力でサポートしますので、<br class="send-sp">マレーシアで活躍する日を目指して<br class="send-sp">一緒に頑張りましょう！
      </div>
      <div class="send-next">今後の流れはこちら</div>
      <div class="send-wrap">
        <div class="send-step">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/LP1/image/send_step01.jpg">
          <div class="send-step--head">LINE公式アカウントへ登録する</div>
          <div class="send-step--desc">LINEにてマレーシア就職に必要な様々なサポートを受けられます。</div>
          <div class="send-step--line"><a href="https://lin.ee/4i1d4Vi" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/LP1/image/send_line.png"></a></div>
        </div>
        <div class="send-step">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/LP1/image/send_step02.jpg">
          <div class="send-step--head">面談を予約する</div>
          <div class="send-step--desc">コンサルタントとの面談をご予約ください。マレーシア就職についていろいろお話ししましょう。</div>
          <div class="send-step--book"><a href="https://timerex.net/s/AN_asia_malaysia/2e626382" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/LP1/image/send_book.png"></a></div>
        </div>
        <div class="send-step">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/LP1/image/send_step03.jpg">
          <div class="send-step--head">履歴書を作成する</div>
          <div class="send-step--desc">履歴書作成が不安な方はLINEでコンサルタントと無料相談もできます。</div>
          <div class="send-step--line"><a href="https://lin.ee/4i1d4Vi" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/LP1/image/send_line.png"></a></div>
        </div>
      </div>
      <div class="send-contact">
        <div class="send-contact--head">お問い合わせについて</div>
        <table class="send-contact--table">
          <tr>
            <th>Email</th><td>：info@an-asia.com</td>
          </tr>
          <tr>
            <th>営業時間</th><td>：日本時間 9:30〜18:30</td>
          </tr>
          <tr>
            <th></th><td>：マレーシア時間 8:30〜17:30</td>
          </tr>
        </table>
      </div>
    </div>

    <footer>
      <h2>©Agensi Pekerjaan AN Asia Sdn Bhd 　マレーシアで働こう</h2>
    </footer>

    <a href="#top"><div class="to-top">↑</div></a>

    <!-- <a onclick="return gtag_report_conversion('https://lin.ee/4i1d4Vi');" href="https://lin.ee/4i1d4Vi" target="_blank"><div class="sp-line">友だち追加して<br>簡単無料登録</div></a>
    <div class="line-block">
      <a href="https://lin.ee/4i1d4Vi" target="_blank">
        <div class="line">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/LP1/image/line_new.jpg">
        </div>
      </a>
    </div> -->

    <script src="<?php echo get_template_directory_uri(); ?>/LP1/kick-ring-lp.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>
