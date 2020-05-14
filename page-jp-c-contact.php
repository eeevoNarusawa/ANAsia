<?php
/*
Template Name: Japanese Contact for Job Seeker
*/
?>
<?php get_header('jp'); ?>
  <div class="l-wrap">
    <div class="l-container p-contact-catch">
      <div class="p-contact-catch--ttl">登録→<span class="p-contact-catch--ttl__strong">入社</span>までの流れ</div>
      <div class="p-contact-catch--copy">安心の日本語対応！日本人コンサルタントより対応をさせていただきます。新卒の方、既に就労経験の有る方、幅広くお仕事のご紹介をしております。サイトに掲載していない求人もございますのでマレーシアでの就職、転職をお考えの方は是非ご連絡ください！</div>
    </div>
    <div class="l-container">
      <div class="p-contact-flow p-contact-flow__c">
        <div class="p-contact-flow--step p-contact-flow--step__odd">
          <p>STEP<br><span>1</span></p>
        </div>
        <div class="p-contact-flow--text">
          <p>無料登録</p>
          <p><span>※以下の<a href="#contact">登録問い合わせフォームに記入</a>→送信</span></p>
        </div>
        <div class="p-contact-flow--img__c1"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/flow7.png" alt="STEP1"></div>
      </div>
      <div class="p-contact-flow p-contact-flow__c">
        <div class="p-contact-flow--step p-contact-flow--step__even">
          <p>STEP<br><span>2</span></p>
        </div>
        <div class="p-contact-flow--text">
          <p>コンサルタントからメールで連絡</p>
          <p>面談（ビデオコール）</p>
        </div>
        <div class="p-contact-flow--img__c2"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/flow8.png" alt="STEP2"></div>
      </div>
      <div class="p-contact-flow p-contact-flow__c">
        <div class="p-contact-flow--step p-contact-flow--step__odd">
          <p>STEP<br><span>3</span></p>
        </div>
        <div class="p-contact-flow--text">
          <p>ご希望にあったポジションをご紹介</p>
        </div>
        <div class="p-contact-flow--img__c3"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/flow9.png" alt="STEP3"></div>
      </div>
      <div class="p-contact-flow p-contact-flow__c">
        <div class="p-contact-flow--step p-contact-flow--step__even">
          <p>STEP<br><span>4</span></p>
        </div>
        <div class="p-contact-flow--text">
          <p>応募</p>
          <p><span>※気になるお仕事を選んでコンサルタントに連絡して応募！</span></p>
        </div>
        <div class="p-contact-flow--img__c4"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/flow10.png" alt="STEP4"></div>
      </div>
      <div class="p-contact-flow p-contact-flow__c">
        <div class="p-contact-flow--step p-contact-flow--step__odd">
          <p>STEP<br><span>5</span></p>
        </div>
        <div class="p-contact-flow--text">
          <p>面接</p>
          <p><span>※その場で給与面や福利厚生等をご担当者の方にお伺いできます。その他ご不明点ご不安点があればコンサルタントより企業様に確認させていただく事も可能です。</span></p>
        </div>
        <div class="p-contact-flow--img__c5"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/flow11.png" alt="STEP5"></div>
      </div>
      <div class="p-contact-flow p-contact-flow__c">
        <div class="p-contact-flow--step p-contact-flow--step__even">
          <p>STEP<br><span>6</span></p>
        </div>
        <div class="p-contact-flow--text">
          <p>内定・入社</p>
          <p><span>※面接結果をAN Asiaよりお知らせ！その後の入社日等の対応もお任せください。</span></p>
        </div>
        <div class="p-contact-flow--img__c6"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/flow6.png" alt="STEP6"></div>
      </div>
    </div><!-- /.l-container -->
    <div class="c-conts" id="contact">
      <div class="c-center"><div class="c-conts--ttl">お問い合わせ</div></div>
      <div class="c-contact">
        <?php echo do_shortcode('[contact-form-7 id="123" title="for_contact_jobseeker_jp"]'); ?>
      </div>
    </div>
  </div><!-- /.l-wrap -->
<?php get_footer('jp'); ?>
