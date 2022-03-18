<?php get_header(); ?>

<div class="background">
    <?php 
    require 'inc/section_vars.php';
    ?>
    <div>
        <h1>Donate</h1>
        <h3>Donations are received by each park individually</h3>
    </div>
    <div class="get-involved-container">
    <?php 
    require 'inc/section_vars.php';
        $get_involved_tiles_data = get_get_involved_tiles_data($get_involved_tiles_setting);
        if (!empty($get_involved_tiles_data)) {
            foreach ( $get_involved_tiles_data as $k => $f ) { ?>
                <div class="item">
                    <div> 
                        <h2>
                        <?php echo $f['park_name'] ?>
                        </h2>
                    </div>
                    <div class="image-styling">
                        <?php
                        $park_img = '';
                        if ($f['park_img']) {
                            $park_img = '<img src="'.esc_url(get_media_url( $f['park_img'])).'">';
                            echo $park_img;
                        } 
                        ?>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
    </div>

    <div>
        <h1>Contact Us</h1>
        <h3>Fill out the form, and our team will get back to you in 1-3 business days</h3>
    </div>

    <div>
    <?php
        $shortcode = get_theme_mod($contact_form_shortcode);
        echo do_shortcode($shortcode);
        ?>
      <div>
        <p><?php echo get_theme_mod($company_information_phone); ?></p>
        <p><?php echo get_theme_mod($company_information_email); ?></p>
        <p><?php echo get_theme_mod($company_information_message); ?></p>
        <p><?php echo get_theme_mod($company_link_twitter); ?></p>
        <p><?php echo get_theme_mod($company_link_youtube); ?></p>
        <p><?php echo get_theme_mod($company_link_facebook); ?></p>
      </div>
    </div>

</div>

<?php get_footer(); ?>