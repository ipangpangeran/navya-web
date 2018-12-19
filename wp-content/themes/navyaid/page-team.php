<?php get_header(); ?>

<div id="projecst-page">
	<div class="logo-navya">
        <a href="<?php echo get_site_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/navya_logo.png" alt="logo" /></a>
    </div>
    <div class="menu-wrap">
        <a href="#">MENU</a>
    </div>

    <div class="project-cont team grid">
		<h1 data-wow-duration="0.5s" class="wow bounceInDown">T E A M</h1>
        <p data-wow-duration="1s" class="wow fadeIn">
        The people who will strengthen the connection with your brands through innovative ideas as the best full team.
        </p>

        <?php

        $args = array('post_type' => 'teams');
        $query = new WP_Query($args);
        while ($query -> have_posts()) : $query -> the_post();

        ?>

        <div class="box25-25 wow slideInLeft">
            <div class="project-wrapp">
                <div class="trans-cover" data-featherlight="#pop-team-<?php echo get_the_id(); ?>"></div>
                <?php echo(types_render_field( "profil-picture", array( 'row' => true) )); ?>
            </div>
            <span><?php the_title(); ?></span>
        </div>

        <?php endwhile ?>

    </div>

    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/paralak_bg6.png" alt="layer 1" class="background">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/paralak_bg5.png" alt="layer 2" class="cloud cloud1">


<?php

$args = array('post_type' => 'teams');
$query = new WP_Query($args);
while ($query -> have_posts()) : $query -> the_post();

?>

<div class="lightbox" id="pop-team-<?php echo get_the_id(); ?>">
    <div class="popup grid">
        <span class="popup-img">
            <?php echo(types_render_field( "profil-picture", array( 'row' => true) )); ?>
        </span>
        <span class="popup-box">
            <h3>
                <?php the_title(); ?>

                <b> <?php echo(types_render_field( "jabatan", array( 'row' => true) )); ?></b>
            </h3>
            <p><?php echo(types_render_field( "bio", array( 'row' => true) )); ?></p>
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icn-fb.png" alt="fb" /></a>
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icn-tw.png" alt="fb" /></a>
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icn-ig.png" alt="fb" /></a>
        </span>
    </div>
</div>



<?php endwhile;  ?>
<!--
<div class="lightbox" id="pop-team-88">
    <div class="popup grid">
        <span class="popup-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/projects/project_1.jpg" alt="img" />
        </span>
        <span class="popup-box">
            <h3>
                <?php the_title(); ?>

                <b><?php echo get_post_meta($post->ID, 'Bio', true); ?></b>
            </h3>

            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icn-fb.png" alt="fb" /></a>
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icn-tw.png" alt="fb" /></a>
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icn-ig.png" alt="fb" /></a>
        </span>
    </div>
</div>
-->

<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br>

<?php $addfoot = 'footer foot-projects wow fadeIn'; include('tpl_footer.php'); ?>
</div>

<?php get_footer(); ?>

<!-- <ul>
    <li><?php echo(types_render_field( "facebook-team", array( 'row' => true) )); ?></li>
    <li><?php echo(types_render_field( "twitter-team", array( 'row' => true) )); ?></li>
    <li><?php echo(types_render_field( "instagram-team", array( 'row' => true) )); ?></li>
</ul>
 -->
