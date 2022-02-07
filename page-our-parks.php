<?php 
get_header();
require get_template_directory() . '/inc/section_vars.php';  
?>

<div class="background">
   <div>
   <?php 
   require 'inc/section_vars.php';
     $parks_tiles_data = get_parks_tiles_data($parks_tiles_setting);
        if (!empty($parks_tiles_data)) {
            foreach ( $parks_tiles_data as $k => $f ) {
                $park_img = '';
                if ($f['park_img']) {
                    $park_img = '<img src="'.esc_url(get_media_url( $f['park_img'])).'">';
                } 
                ?>
                <div>
                    <p>
                        <?php echo $f['park_name'] ?>
                    </p>
                </div>
            <?php } ?>
        <?php } ?>
   </div>
</div>

<?php get_footer(); ?>