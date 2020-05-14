<?php
/*
Template Name: English Contact for Company
*/
?>

<?php get_header(); ?>
  <div class="l-wrap">
    <div class="l-container p-contact-catch">
      <div class="p-contact-catch--ttl">From ‘Inquiry’ to <span class="p-contact-catch--ttl__strong">‘Recruitment’</span></div>
      <div class="p-contact-catch--copy">
        Our professional Malaysian and Japanese consultants will assist you to hire the right employees.
        We are specialized in Japanese speakers as well as Japanese native and local Malaysian job seekers.
        Please contact us now for any recruitment inquiry !!
      </div>
    </div>
    <div class="l-container">
      <div class="p-contact-flow p-contact-flow__b">
        <div class="p-contact-flow--step p-contact-flow--step__odd">
          <p>STEP<br><span>1</span></p>
        </div>
        <div class="p-contact-flow--text">
          <p>Job Inquiry</p>
          <p><span>※ Fill in below contact form then <a href="#contact">“Submit”</a></span></p>
        </div>
        <div class="p-contact-flow--img__b1"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/flow1.png" alt="STEP1"></div>
      </div>
      <div class="p-contact-flow p-contact-flow__b">
        <div class="p-contact-flow--step p-contact-flow--step__even">
          <p>STEP<br><span>2</span></p>
        </div>
        <div class="p-contact-flow--text">
          <p>Contact</p>
          <p><span>※Our team members will contact you to ask about job details</span></p>
          <p><span>※Acceptance of T&C</span></p>
        </div>
        <div class="p-contact-flow--img__b2"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/flow2.png" alt="STEP2"></div>
      </div>
      <div class="p-contact-flow p-contact-flow__b">
        <div class="p-contact-flow--step p-contact-flow--step__odd">
          <p>STEP<br><span>3</span></p>
        </div>
        <div class="p-contact-flow--text">
          <p>Candidate Introduction</p>
          <p><span>※Introduce candidate that meets your requirements</span></p>
        </div>
        <div class="p-contact-flow--img__b3"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/flow3.png" alt="STEP3"></div>
      </div>
      <div class="p-contact-flow p-contact-flow__b">
        <div class="p-contact-flow--step p-contact-flow--step__even">
          <p>STEP<br><span>4</span></p>
        </div>
        <div class="p-contact-flow--text">
          <p>Interview</p>
          <p><span>※Select and interview with the suitable candidate</span></p>
        </div>
        <div class="p-contact-flow--img__b4"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/flow4.png" alt="STEP4"></div>
      </div>
      <div class="p-contact-flow p-contact-flow__b">
        <div class="p-contact-flow--step p-contact-flow--step__odd">
          <p>STEP<br><span>5</span></p>
        </div>
        <div class="p-contact-flow--text">
          <p>Result</p>
          <p><span>※Inform AN Asia the interview result</span></p>
        </div>
        <div class="p-contact-flow--img__b5"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/flow5.png" alt="STEP5"></div>
      </div>
      <div class="p-contact-flow p-contact-flow__b">
        <div class="p-contact-flow--step p-contact-flow--step__even">
          <p>STEP<br><span>6</span></p>
        </div>
        <div class="p-contact-flow--text">
          <p>Join company</p>
          <p><span>※Candidate acceptance offer and join your company</span></p>
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
            <p>We are providing a FREE JBAA official textbook and exam for job seekers who joined the company.</p>
            <p class="p-contact-special--copy__notes">Exam is valid 3 months from the date of employee start work.</p>
          </div>
        </div>
        <div class="p-contact-special--img"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/special.png" alt="Special Service"></div>
      </div>
    </div>
    <div class="c-conts p-contact-jbaa">
      <div class="p-contact-jbaa--ttl">What is <span>JBAA</span>?</div>
      <div class="p-contact-jbaa--img"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/jbaa.svg" alt="JBAA"></div>
      <div class="p-contact-jbaa--desc">
        <p>JBAA was established for the purpose of smoothing communication and business between Japanese and non-Japanese by deepening of your understanding of Japanese unique business manner.</p>
        <p>More info <a href="https://jbaa-eeevo.asia" target="_blank">https://jbaa-eeevo.asia</a></p>
      </div>
    </div>
    <div class="c-conts" id="contact">
      <div class="c-center"><div class="c-conts--ttl">Contact Form</div></div>
      <div class="c-contact">
        <?php echo do_shortcode('[contact-form-7 id="69" title="for_contact_company_en"]'); ?>
      </div>
    </div>
  </div><!-- /.l-wrap -->
<?php get_footer(); ?>
