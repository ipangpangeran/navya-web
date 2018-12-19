<?php get_header(); ?>

<div id="projecst-page">
    <div class="logo-navya">
        <a href="<?php echo get_site_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/navya_logo.png" alt="logo" /></a>
    </div>
    <div class="menu-wrap">
        <a href="#"> MENU </a>
    </div>

    <div class="project-cont grid">
        <h1 data-wow-duration="0.5s" class="wow bounceInDown">We connect to SOLVE EFFECTIVELY</h1>
        <p data-wow-duration="1s" class="wow fadeIn">
        We just don’t create the remarkable ones, but we do craft them up to be the unforgettable great stories that we had done.
        </p>

        <?php

        $args = array('post_type' => 'project', 'posts_per_page' => -1 );
        $query = new WP_Query($args); 
        while ($query -> have_posts()) : $query -> the_post();

        ?>

        <div class="box25-25 wow slideInLeft">
            <div class="project-wrapp">
                <div class="trans-cover" data-featherlight="#pop-team-<?php echo get_the_id(); ?>"></div>
                <?php echo(types_render_field( "project-picture", array( 'row' => true) )); ?>
            </div>
            <span><?php the_title(); ?></span>
        </div>

        <?php endwhile ?>

    </div>


<?php $addfoot = 'footer foot-projects wow fadeIn'; include('tpl_footer.php'); ?>


</div>

<?php get_footer(); ?>

