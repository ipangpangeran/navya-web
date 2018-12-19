<?php get_header(); ?>

<div id="fullpage">
    <div class="section" id="section">
        <div class="logo-navya">
            <a href="<?php echo get_site_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/navya_logo.png" alt="logo" /></a>
        </div>
        <div class="menu-wrap">
            <a href="#"> MENU </a>
        </div>
        <div class="project-bottom">
            <div class="contact-page middle-poss grid">
                <div class="contact-space"></div>
                <div data-wow-duration="1s" class="contact-right wow slideInRight">
                    <div>
                        <h3>SEND A MESSAGE</h3>

                        <?php /*
						<input type="text" placeholder="Name" />
                        <input type="text" placeholder="Email Address" />
                        <textarea placeholder="Your Message" maxlength="250"></textarea>
                        <a href="#">Send Email</a>
*/ ?>

<?php echo do_shortcode('[ajax_contact_form]'); ?>

                    </div>
                </div>
                <div data-wow-duration="1.5s" class="contact-left grid wow slideInLeft">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/navya_white.png" alt="navya" /><br />
                        Gedung Galaktika<br />
                        RM Harsono 2, 2nd floor<br />
                        Ragunan, Pasar Minggu <br />
                        Jakarta 12550<br />
                        P (+62) 21-7827989<br />
                        F (+62) 21 78847523
                        <a href="https://www.google.co.id/maps/place/Gedung+Galaktika/@-6.3004304,106.8193283,17z/data=!4m5!3m4!1s0x0:0x96c28b9651255371!8m2!3d-6.3004298!4d106.8215168" target="_blank">View Map</a>
                    </div>
                </div>
            </div>
        </div>

    <?php include('tpl_footer.php'); ?>

</div>

<?php get_footer(); ?>
