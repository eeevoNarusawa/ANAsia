<?php
/*
Template Name: work-in-malaysia1
*/
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/reset.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/LP1/style.css">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico"/>
    <!-- Canonical -->
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
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="description" itemprop="description" content="海外移住先として人気No1のマレーシアで働こう。マレーシアでの仕事に興味をお持ちのあなた、An asiaでは日本人求人の案件を多数ご用意!マレーシアでの仕事、生活について無料でアドバイスをしています。">
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
          <a href="#why"><li>なぜマレーシア？</li></a>
          <a href="#job-search"><li>求人例</li></a>
          <a href="#voice"><li>マレーシアで働く日本人の声</li></a>
          <a href="#faq"><li>Q&A</li></a>
          <a href="#reason"><li>選ばれる理由</li></a>
          <a href="#contact"><li>お問い合わせ</li></a>
        </ul>
      </div>
    </div><!-- sp nav -->

    <div class="container">
      <header id="top" class="clearfix">
        <div class="logo"><img src="<?php bloginfo('stylesheet_directory'); ?>/LP1/image/logo.png" alt="AN asia"></div>
        <nav>
          <ul>
            <a href="#why"><li>なぜマレーシア？</li></a>
            <a href="#job-search"><li>求人例</li></a>
            <a href="#voice"><li>マレーシアで働く日本人の声</li></a>
            <a href="#faq"><li>Q&A</li></a>
            <a href="#reason"><li>選ばれる理由</li></a>
            <a href="#contact"><li>お問い合わせ</li></a>
          </ul>
        </nav>
      </header>

      <div class="eyecatch">
        <h1>
          <img class="pc-eyecatch" src="<?php bloginfo('stylesheet_directory'); ?>/LP1/image/eyecatch.jpg" alt="海外移住先として人気No.1！マレーシアで働こう！ | マレーシア求人情報無料で探すなら【AN asia】">
          <img class="sp-eyecatch" src="<?php bloginfo('stylesheet_directory'); ?>/LP1/image/eyecatch-sp.jpg" alt="海外移住先として人気No.1！マレーシアで働こう！ | マレーシア求人情報無料で探すなら【AN asia】">
        </h1>
      </div>

      <div class="cont01">
        <h2>こんな方、募集中！</h2>
        <ul class="clearfix">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/LP1/image/check.png"><li>海外で働いてみたい。でも、英語が話せなくて不安・・・</li>
          <img src="<?php bloginfo('stylesheet_directory'); ?>/LP1/image/check.png"><li>新しいことに挑戦してキャリアアップしたい。</li>
          <img src="<?php bloginfo('stylesheet_directory'); ?>/LP1/image/check.png"><li>東南アジア、マレーシアが好き！</li>
          <img src="<?php bloginfo('stylesheet_directory'); ?>/LP1/image/check.png"><li>英語力を活かせる仕事に挑戦したい。</li>
          <img src="<?php bloginfo('stylesheet_directory'); ?>/LP1/image/check.png"><li>グローバルに活躍したい。</li>
          <img src="<?php bloginfo('stylesheet_directory'); ?>/LP1/image/check.png"><li>海外移住に興味がある。</li>
        </ul>
        <div class="cont01-img"><img src="<?php bloginfo('stylesheet_directory'); ?>/LP1/image/cont01.jpg"></div>
      </div>


      <div id="why" class="cont02">
        <h3>なぜマレーシア？　マレーシアで働く利点とは？</h3>
        <h2>日本人が移住したい国、人気No.1</h2>
        <h2>マレーシアが人気の理由</h2>
        <div class="cont02-wrap clearfix">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/LP1/image/cont02.jpg">
          <ul>
            <li>簡単な英語でコミュニケーションできる</li>
            <li>食べ物がおいしい</li>
            <li>親日的な人が多い</li>
            <li>治安がいい</li>
            <li>1年中温かい</li>
            <li>住みやすい</li>
            <li>多民族・多文化な環境</li>
            <li>英語、中国語、マレー語を学べる</li>
          </ul>
        </div>
      </div>

      <div id="job-search" class="cont cont03">
        <h2>マレーシアで募集中のお仕事例</h2>
        <div class="job-search clearfix">
          <div class="job-search-cont">
            <div class="jsc-title">■カスタマーサポート■</div>
            <div class="jsc-wrap">
              <table>
                <tr>
                  <th>勤務地</th><td>クアラルンプール</td>
                </tr>
                <tr>
                  <th>給　与</th><td>RM8,000</td>
                </tr>
                <tr>
                  <th>業　種</th><td>日系コンサル企業</td>
                </tr>
              </table>
            </div>
          </div><!-- job-search-cont01 -->
          <div class="job-search-cont jsc-margin">
            <div class="jsc-title">■ルート営業■</div>
            <div class="jsc-wrap">
              <table>
                <tr>
                  <th>勤務地</th><td>スバンジャヤ</td>
                </tr>
                <tr>
                  <th>給　与</th><td>RM7,000</td>
                </tr>
                <tr>
                  <th>業　種</th><td>日系メーカー</td>
                </tr>
              </table>
            </div>
          </div><!-- job-search-cont02 -->
          <div class="job-search-cont">
            <div class="jsc-title">■ITサポート■</div>
            <div class="jsc-wrap">
              <table>
                <tr>
                  <th>勤務地</th><td>クアラルンプール</td>
                </tr>
                <tr>
                  <th>給　与</th><td>RM7,000</td>
                </tr>
                <tr>
                  <th>業　種</th><td>外資IT企業</td>
                </tr>
              </table>
            </div>
          </div><!-- job-search-cont03 -->
        </div><!-- job-search -->

        <a href="#contact"><div class="sp cont03-contact">マレーシアでの仕事を探す<br>ー無料登録するー</div></a>
        <a href="#contact"><div class="pc cont03-contact">マレーシアでの仕事を探す　ー無料登録するー</div></a>
      </div><!-- cont03 -->

      <div id="voice" class="cont cont04">
        <h2>マレーシアで働く日本人の声</h2>
        <div class="voice clearfix">
          <div class="voice-cont">
            <div class="voice-cont-title">「日本よりも生活の質がよくなった」</div>
            <div class="voice-cont-text">
              マレーシアで得られる収入は日本で働いていた時よりは少ないですが、家賃や食費が安いので、日本よりも水準の高い生活が可能です。<br>
              私が住んでいるコンドミニアムには、プール、フィットネスジムがついていて、ガードマンもいます。治安も悪くなく、女性の一人暮らしも問題はありません。
            </div>
            <div class="voice-cont-name">在馬4年目　Sさん（28歳 女性）</div>
          </div><!-- voice-cont01 -->
          <div class="voice-cont">
            <div class="voice-cont-title">「生活に必要なものは全て揃います」</div>
            <div class="voice-cont-text">
              クアラルンプールは、シンガポールほどではありませんが、東南アジアの都市のなかでは十分に発展しており、日常生活で困ることはほぼありません。<br>
              AEON,伊勢丹,無印良品,ファミリーマート、DAISOなどのほか,一風堂や吉野家のような日系飲食店もマレーシアに多数進出しており,日本人にとって非常に便利な環境です。
            </div>
            <div class="voice-cont-name">在馬2年目　Tさん（34歳 男性）</div>
          </div><!-- voice-cont02 -->
        </div>
      </div>

      <div id="faq" class="cont cont05">
        <h2>Q＆A　～よくある質問～</h2>
        <div class="faq clearfix">
          <div class="faq-wrap">
            <div class="faq-cont">
              <div class="faq-q-cont clearfix">
                <div class="faq-q">Q</div><div class="faq-question">面接などのためにマレーシアに行く必要はありますか？</div>
              </div>
              <div class="faq-a-cont clearfix">
                <div class="faq-a">A</div><div class="faq-answer">スカイプなどビデオ通話での面接が可能です。しかし、最終決断の前にマレーシアでの住環境や、働く環境を確認するためにも一度マレーシアにいらっしゃることをおすすめします。</div>
              </div>
            </div><!-- faq-cont01 -->
            <div class="faq-guide-item">スカイプ面接→登録可能</div>
          </div>

          <div class="faq-wrap faq-margin">
            <div class="faq-cont">
              <div class="faq-q-cont clearfix">
                <div class="faq-q">Q</div><div class="faq-question">新卒でも応募可能な求人はありますか？</div>
              </div>
              <div class="faq-a-cont clearfix">
                <div class="faq-a">A</div><div class="faq-answer">あります。就業経験が少ないとビザが発給されない場合がありますが、職種や業種によっては可能です。</div>
              </div>
            </div><!-- faq-cont02 -->
            <div class="faq-guide-item">新卒から40代までOK</div>
          </div>

          <div class="faq-wrap">
            <div class="faq-cont">
              <div class="faq-q-cont clearfix">
                <div class="faq-q">Q</div><div class="faq-question">英語は日常会話程度しかできませんが大丈夫でしょうか？</div>
              </div>
              <div class="faq-a-cont clearfix">
                <div class="faq-a">A</div><div class="faq-answer">業務で日本語のみを使うポジションでしたら問題ありません。とはいえ、日常生活では英語が多少必要ですので、簡単な英会話は勉強しておくことをおすすめします。<br></div>
              </div>
            </div><!-- faq-cont03 -->
            <div class="faq-guide-item">英語力不問</div>
          </div>
        </div>
      </div><!-- cont05 -->

      <div id="reason" class="cont cont06">
        <h2>AN Asiaが選ばれる理由</h2>
        <div class="reason">
          <p>AN Asiaは、マレーシアに拠点を置く、日本とマレーシアのジョイントベンチャーによる人材会社です。</p>
          <div class="reason-cont clearfix">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/LP1/image/cont06.jpg">
            <div class="reason-wrap">
              <div class="reason-wrap-item">
                <div class="reason-title">選ばれる理由1</div>
                <div class="reason-text">日本人とマレーシアの「日本人」と「マレーシア人」、「日系企業」と「マレーシアのローカル企業」、それぞれの特徴を把握しているので、求職者様と企業様両方にとって最適な出会いをお手伝いできます。</div>
              </div>
              <div class="reason-wrap-item">
                <div class="reason-title">選ばれる理由2</div>
                <div class="reason-text">日本語堪能なマレーシア人、英語堪能な日本人が在籍しており、マレーシアでの生活について的確なアドバイスができます。</div>
              </div>
              <div class="reason-wrap-item">
                <div class="reason-title">選ばれる理由3</div>
                <div class="reason-text">日系企業、日本人求人の案件を多数ご用意しております。</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="contact" class="cont cont07">
        <h2 class="sp">マレーシアでの仕事を探す<br>無料登録する</h2>
        <h2 class="pc">マレーシアでの仕事を探す― 無料登録する</h2>
        <div class="contact">
          <div class="contact-form">
            <?php echo do_shortcode('[contact-form-7 id="5" title="contact"]'); ?>
          </div>
        </div>

        <div class="company">
          <div class="company-cont">
            <table>
              <tr>
                <th>会社名</th><td>Agensi Pekerjaan AN Asia Sdn Bhd (JTKSM 398A)</td>
              </tr>
              <tr>
                <th>電話</th><td><a href="tel:+60327752468">+60 (3) 2775 2468</a></td>
              </tr>
              <tr>
                <th>設立年月日</th><td>2016年11月22日</td>
              </tr>
              <tr>
                <th>所在地</th><td>B-9-2, Level 9 Block B Northpoint Offices, Mid Valley City, 59200 Kuala Lumpur, Malaysia</td>
              </tr>
            </table>
          </div>
        </div>
      </div><!-- contact -->

    </div><!-- container -->

    <footer>
      <h2>©Agensi Pekerjaan AN Asia Sdn Bhd 　マレーシアで働こう</h2>
    </footer>

    <a href="#top"><div class="to-top">↑</div></a>

    <? /*
    <a onclick="return gtag_report_conversion('https://lin.ee/4i1d4Vi');" href="https://lin.ee/4i1d4Vi" target="_blank"><div class="sp-line">友だち追加して<br>簡単無料登録</div></a>
    <div class="line-block">
      <a href="https://lin.ee/4i1d4Vi" target="_blank">
        <div class="line">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/LP1/image/line_new.jpg">
        </div>
      </a>
    </div>
    */ ?>

    <script src="<?php echo get_template_directory_uri(); ?>/LP1/kick-ring-lp.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>
