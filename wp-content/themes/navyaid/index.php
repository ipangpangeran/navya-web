<?php get_header(); ?>

<div id="fullpage">

    <div class="section" id="section0">
        <div class="logo-navya">
            <a href="<?php echo get_site_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/navya_logo.png" alt="logo" /></a>
        </div>
        <div class="menu-wrap">
            <a href="#"> MENU </a>
        </div>
        <div class="home-cont">
            <ul class="bxslider">
                <li>
                    <div class="text-connect">
                        <div class="text-play">
                            <div>We co<span>nne</span>ct to <span>i</span>mpress cr<span>eat</span>ive<span>ly</span></div>
                        </div>
                    </div>
                    <div class="glitch-box">
                        <div class="glitch-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/glitch_img.png)"></div>
                    </div>
                </li>
                <li>
                    <div class="text-connect">
                        <div class="text-play">
                            <div>We co<span>nne</span>ct to SOLVE EF<span>FE</span>CTIVELY</div>
                        </div>
                    </div>
                    <div class="glitch-box">
                        <div class="glitch-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/glitch_img1.png)"></div>
                    </div>
                </li>
                <li>
                    <div class="text-connect">
                        <div class="text-play">
                            <div>We co<span>nnect to REL</span>ATE BY <span>S</span>PEAK <span>NATIVE</span></div>
                        </div>
                    </div>
                    <div class="glitch-box">
                        <div class="glitch-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/glitch_img2.png)"></div>
                    </div>
                </li>
            </ul>
            <div class="home-text wow bounceInLeft">
                <span></span>
                <p>
                    Growing is about gaining more than before.
                    In this digital era, world can be closer to us.
                    Then we have to think wilder, move higher, and
                    be younger to stay in line with this boundless space.
                </p>
            </div>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/paralak_bg4.png" alt="layer 1" class="background">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/paralak_bg3.png" alt="layer 2" class="cloud cloud1">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/paralak_bg1.png" alt="layer 2" class="cloud cloud2">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/paralak_bg2.png" alt="layer 2" class="cloud cloud3">
    </div>

    <div class="section" id="section1">
        <div class="home-project middle-poss">
            <div class="project-top">
                <h1 data-wow-duration="0.5s" class="titel wow bounceInDown">PROJECTS</h1>
            </div>
            <div class="project-bottom">
                <div data-wow-duration="1s" class="box50-50a show-hover wow slideInLeft">
                    <div class="trans-cover">
                        <div class="middle-poss2">
                            <h2>Jiwasraya <span>Sinergy</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore aliqua.</p>
                            <a href="#" onclick="javascript:return false;">See Project</a>
                        </div>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_js.jpg" alt="jiwasraya" />
                </div>
                <div data-wow-duration="1.5s" class="box50-50b show-hover wow slideInRight">
                    <div class="trans-cover">
                        <div class="middle-poss2">
                            <h2>Unicef <span>Punch The Poo</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore aliqua.</p>
                            <a href="#" onclick="javascript:return false;">See Project</a>
                        </div>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_tinju.jpg" alt="tinju" />
                </div>
                <div class="see-all">
                    <a href="<?php echo get_permalink( get_page_by_path( 'projects' ) ); ?>">See all projects <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_errow.png" /> </a>
                </div>
            </div>
        </div>
    </div>

    <div class="section" id="section2">
        <div class="project-bottom">
            <div class="connect middle-poss">
                <div>
                    <h2 class="wow bounceInLeft">CONNECTING TO</h2>
                    <div class="form-search wow bounceInRight">
                        <input id="text-seacrh" class="what-search" type="text" placeholder="WHAT YOU SEARCH">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_search.png" width="30" alt="src" /></a>
                    </div>
                    <!--<h1>WHAT YOU SEARCH</h1>-->
                    <h2>&nbsp;</h2>
                </div>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/paralak_bg6.png" alt="layer 1" class="background">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/paralak_bg5.png" alt="layer 2" class="cloud cloud1">
        </div>

        <?php include('tpl_footer.php'); ?>
    </div>

</div>

<?php get_footer(); ?>
