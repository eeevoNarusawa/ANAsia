<?php
/*
Template Name: English Contact for Job Seeker
*/
?>
<?php get_header(); ?>
  <div class="l-wrap">
    <div class="l-container p-contact-catch">
      <div class="p-contact-catch--ttl">From ‘Registration’ to <span class="p-contact-catch--ttl__strong">‘Join the company’</span></div>
      <div class="p-contact-catch--copy">
        If you are looking for a job, especially in Japanese company, contact AN ASIA !!!
        Also, we do offer many positions for Non-Japanese speakers too.
        Our professional consultants will assist you to find the ideal position that suits your needs.
        Please contact us now to look for better career !!!
      </div>
    </div>
    <div class="l-container">
      <div class="p-contact-flow p-contact-flow__c">
        <div class="p-contact-flow--step p-contact-flow--step__odd">
          <p>STEP<br><span>1</span></p>
        </div>
        <div class="p-contact-flow--text">
          <p>Online Registration</p>
          <p><span>※Fill in below contact form then <a href="#contact">“Submit”</a></span></p>
        </div>
        <div class="p-contact-flow--img__c1"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/flow7.png" alt="STEP1"></div>
      </div>
      <div class="p-contact-flow p-contact-flow__c">
        <div class="p-contact-flow--step p-contact-flow--step__even">
          <p>STEP<br><span>2</span></p>
        </div>
        <div class="p-contact-flow--text">
          <p>Registration interview with our consultant</p>
          <p><span>※Our team member will contact you via <a href="mailto:info@an-asia.com?subject=ANAsia Mail Enquiry" target="_blank">email</a> / phone</span></p>
        </div>
        <div class="p-contact-flow--img__c2"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/flow8.png" alt="STEP2"></div>
      </div>
      <div class="p-contact-flow p-contact-flow__c">
        <div class="p-contact-flow--step p-contact-flow--step__odd">
          <p>STEP<br><span>3</span></p>
        </div>
        <div class="p-contact-flow--text">
          <p>Job Introduction</p>
          <p><span>※Consultant will introduce position that meets your requirements</span></p>
        </div>
        <div class="p-contact-flow--img__c3"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/flow9.png" alt="STEP3"></div>
      </div>
      <div class="p-contact-flow p-contact-flow__c">
        <div class="p-contact-flow--step p-contact-flow--step__even">
          <p>STEP<br><span>4</span></p>
        </div>
        <div class="p-contact-flow--text">
          <p>Apply job</p>
          <p><span>※Consultant will send your profile to client upon your confirmation</span></p>
        </div>
        <div class="p-contact-flow--img__c4"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/flow10.png" alt="STEP4"></div>
      </div>
      <div class="p-contact-flow p-contact-flow__c">
        <div class="p-contact-flow--step p-contact-flow--step__odd">
          <p>STEP<br><span>5</span></p>
        </div>
        <div class="p-contact-flow--text">
          <p>Interview</p>
          <p><span>※Schedule interview and directly interview at client’s office</span></p>
        </div>
        <div class="p-contact-flow--img__c5"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/flow11.png" alt="STEP5"></div>
      </div>
      <div class="p-contact-flow p-contact-flow__c">
        <div class="p-contact-flow--step p-contact-flow--step__even">
          <p>STEP<br><span>6</span></p>
        </div>
        <div class="p-contact-flow--text">
          <p>Result</p>
          <p><span>※Interview result will be informing via email / phone Decision of Acceptance offer Joined Company</span></p>
        </div>
        <div class="p-contact-flow--img__c6"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/flow6.png" alt="STEP6"></div>
      </div>
    </div><!-- /.l-container -->
    <div class="c-conts">
      <div class="p-contact-special">
        <div class="p-contact-special--ttlWrap">
          <div class="p-contact-special--ttl"><p>Special<br>Service<p></div>
        </div>
        <div class="p-contact-special--copyWrap">
          <div class="p-contact-special--copy">
            <p>After joined the company,<br>job seekers will get free JBAA official textbook and exam</p>
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
        <?php echo do_shortcode('[contact-form-7 id="79" title="for_contact_jobseeker_en"]'); ?>
      </div>
    </div>
  </div><!-- /.l-wrap -->
<?php get_footer(); ?>
