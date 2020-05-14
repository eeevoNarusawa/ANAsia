<?php
/*
Template Name: Japanese Contact for Company
*/
?>
<?php get_header('jp'); ?>
  <div class="l-wrap">
    <div class="l-container p-contact-catch">
      <div class="p-contact-catch--ttl">お問合せ→<span class="p-contact-catch--ttl__strong">採用</span>までの流れ</div>
      <div class="p-contact-catch--copy">企業様のご要望に応えるために安心の日本人コンサルタントと日本在住歴の長いマレーシア人コンサルタントより、迅速かつ的確な人材のご紹介をお手伝いいたします。また、日本ビジネス能力認定試験JBAAのテキストと、テストを活用してローカルスタッフの方へ日本のビジネスマナーを勉強していただく事も可能です。</div>
    </div>
    <div class="l-container">
      <div class="p-contact-flow p-contact-flow__b">
        <div class="p-contact-flow--step p-contact-flow--step__odd">
          <p>STEP<br><span>1</span></p>
        </div>
        <div class="p-contact-flow--text">
          <p>お問い合わせ</p>
          <p><span>※以下の<a href="#contact">問い合わせフォームに記入</a>→送信</span></p>
        </div>
        <div class="p-contact-flow--img__b1"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/flow1.png" alt="STEP1"></div>
      </div>
      <div class="p-contact-flow p-contact-flow__b">
        <div class="p-contact-flow--step p-contact-flow--step__even">
          <p>STEP<br><span>2</span></p>
        </div>
        <div class="p-contact-flow--text">
          <p>営業担当よりご連絡、求人詳細をヒアリング</p>
        </div>
        <div class="p-contact-flow--img__b2"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/flow2.png" alt="STEP2"></div>
      </div>
      <div class="p-contact-flow p-contact-flow__b">
        <div class="p-contact-flow--step p-contact-flow--step__odd">
          <p>STEP<br><span>3</span></p>
        </div>
        <div class="p-contact-flow--text">
          <p>ご希望に沿った求職者をご紹介</p>
        </div>
        <div class="p-contact-flow--img__b3"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/flow3.png" alt="STEP3"></div>
      </div>
      <div class="p-contact-flow p-contact-flow__b">
        <div class="p-contact-flow--step p-contact-flow--step__even">
          <p>STEP<br><span>4</span></p>
        </div>
        <div class="p-contact-flow--text">
          <p>日程調整、求職者との面接</p>
        </div>
        <div class="p-contact-flow--img__b4"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/flow4.png" alt="STEP4"></div>
      </div>
      <div class="p-contact-flow p-contact-flow__b">
        <div class="p-contact-flow--step p-contact-flow--step__odd">
          <p>STEP<br><span>5</span></p>
        </div>
        <div class="p-contact-flow--text">
          <p>採用決定！</p>
          <p><span>※採用、不採用関わらず候補者様への連絡はAN Asiaにお任せください。</span></p>
        </div>
        <div class="p-contact-flow--img__b5"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/flow5.png" alt="STEP5"></div>
      </div>
      <div class="p-contact-flow p-contact-flow__b">
        <div class="p-contact-flow--step p-contact-flow--step__even">
          <p>STEP<br><span>6</span></p>
        </div>
        <div class="p-contact-flow--text">
          <p>入社</p>
          <p><span>※企業様、候補者様にサインを頂き入社となります。入社当日は担当のコンサルタントよりご連絡をさせていただきます。</span></p>
        </div>
        <div class="p-contact-flow--img__b6"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/flow6.png" alt="STEP6"></div>
      </div>
    </div><!-- /.l-container -->
    <div class="c-conts">
      <div class="p-contact-special">
        <div class="p-contact-special--ttlWrap">
          <div class="p-contact-special--ttl"><p>Special<br>Service<p></div>
        </div>
        <div class="p-contact-special--copyWrap">
          <div class="p-contact-special--copy">
            <p>入社後、JBAAの公式テキストと<br>JBAAの試験受験資格を<br>求職者に無料プレゼント</p>
            <p class="p-contact-special--copy__notes">試験は入社日から3ヵ月以内まで受験可能</p>
          </div>
        </div>
        <div class="p-contact-special--img"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/special.png" alt="Special Service"></div>
      </div>
    </div>
    <div class="c-conts p-contact-jbaa">
      <div class="p-contact-jbaa--ttl">What is <span>JBAA</span>?</div>
      <div class="p-contact-jbaa--img"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/jbaa.svg" alt="JBAA"></div>
      <div class="p-contact-jbaa--desc">
        <p>JBAA(Japan business ability authorize association）は、日本の独特なビジネスマナーや慣習を外国人スタッフに学んでもらうことにより、日系企業と外国人スタッフのコミュニケーションを円滑にし、ビジネスをスムーズに進める目的で作られたプログラムです。</p>
        <p>More info <a href="https://jbaa-eeevo.asia" target="_blank">https://jbaa-eeevo.asia</a></p>
      </div>
    </div>
    <div class="c-conts" id="contact">
      <div class="c-center"><div class="c-conts--ttl">お問い合わせ</div></div>
      <div class="c-contact">
        <?php echo do_shortcode('[contact-form-7 id="122" title="for_contact_company_jp"]'); ?>
      </div>
    </div>
  </div><!-- /.l-wrap -->
<?php get_footer('jp'); ?>
