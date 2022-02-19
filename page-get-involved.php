<?php get_header(); ?>

<div class="background">
    <?php 
    require 'inc/section_vars.php';
    ?>
    <div>
        <p id="get-involved-large-font">Donate</p>
        <p id="get-involved-small-font">Donations are received by each park individually</p>
    </div>
        <div class="get-involved-tiles">
            <?php if(get_theme_mod($get_involved_section)) {
                ?>
                <img src="<?php echo get_theme_mod($get_involved_tile_1) ?>"
                alt="">
            <?php } ?>
            <div>
                <img src="<?php echo get_theme_mod('get_involved_tile_1')?>">
            </div>
        </div>
    <div>
        <p id="get-involved-large-font">Contact Us</p>
        <p id="get-involved-med-font">Fill out the form, and our team will get back to you in 1-3 business days</p>
    </div>
</div>

<?php get_footer(); ?>