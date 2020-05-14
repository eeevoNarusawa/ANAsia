          <footer class="l-footer">
            <div class="l-footer__profile">
              <div class="l-container l-footer__profile--wrap">
                <div class="l-footer__profile--conts">
                  <div>Agensi Pekerjaan AN Asia Sdn Bhd (1209841-U) JTKSM 398A</div>
                  <div class="l-footer__profile--details">
                    <p class="l-footer__profile--ttl">所在地</p><p>B-9-2(A), Level 9 Block B Northpoint Offices, Mid Valley City, 59200 Kuala Lumpur, Malaysia</p>
                  </div>
                  <div class="l-footer__profile--details">
                    <p class="l-footer__profile--ttl">電話</p><p>+60 (3) 2775 2468</p>
                  </div>
                  <div class="l-footer__profile--details">
                    <p class="l-footer__profile--ttl">設立日</p><p>2016年11月22日</p>
                  </div>
                </div><!-- /.l-footer__profile--conts -->
                <div class="l-footer__profile--icons">
                  <a onclick="return gtag_report_conversion('https://lin.ee/4i1d4Vi');" href="https://lin.ee/4i1d4Vi" target="_blank" class="l-footer__profile--icon l-footer__profile--whatsapp"><i class="fab fa-line"></i></a>
                  <a href="https://www.facebook.com/anasia2016/" target="_blank" class="l-footer__profile--icon l-footer__profile--facebook"><i class="fab fa-facebook-f"></i></a>
                  <a href="mailto:info@an-asia.com?subject=ANAsia Mail Enquiry" class="l-footer__profile--icon l-footer__profile--mail"><i class="far fa-envelope"></i></a>
                </div>
              </div><!-- /.l-container l-footer__profile--wrap -->
            </div><!-- /.l-footer__profile -->
            <div class="l-footer__copyright">
              <div class="l-container l-footer__copyright--wrap clearfix">
                <p class="l-footer__copyright--name">© 2020, Agensi Pekerjaan AN Asia Sdn Bhd</p>
                <ul class="l-footer__copyright--terms">
                  <a href="<?php echo home_url(); ?>/jp/privacy_policy/"><li class="l-footer__copyright--link">プライバシーポリシー</li></a>
                  <li>|</li>
                  <a href="<?php echo home_url(); ?>/jp/terms/"><li class="l-footer__copyright--link">利用規約</li></a>
                </ul>
              </div>
            </div>
          </footer>
        </div><!-- /.jp -->
      </main>
      <div class="menu-trigger" href="">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <nav>
        <ul>
          <a href="<?php echo home_url(); ?>/jp/overview/"><div class="c-center"><li>企業概要</li></div></a>
          <a href="<?php echo home_url(); ?>/jp/job/"><div class="c-center"><li>新着求人</li></div></a>
          <a href="<?php echo home_url(); ?>/jp/column/"><div class="c-center"><li>コラム</li></div></a>
        </ul>
        <a href="<?php echo home_url(); ?>/jp/b-contact/"><div class="c-btn c-btn__pink c-btn__sp">企業様はこちら</div></a>
        <a href="<?php echo home_url(); ?>/jp/c-contact/"><div class="c-btn c-btn__pink c-btn__sp">求職者様はこちら</div></a>
      </nav>
      <div class="overlay"></div>
    </div><!-- /.wrapper -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v6.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your customer chat code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="411038246141741"
        theme_color="#f3716d"
        logged_in_greeting="Facebookメッセンジャーからも簡単にご質問/お問い合わせいただけます。"
        logged_out_greeting="Facebookメッセンジャーからも簡単にご質問/お問い合わせいただけます。">
      </div>
    <?php wp_footer(); ?>
  </body>
</html>
