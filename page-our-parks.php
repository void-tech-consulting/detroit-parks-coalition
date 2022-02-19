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
          foreach ( $parks_tiles_data as $k => $f ) { ?>
              <div id="park-name-tile"> 
                <p>
                  <?php echo $f['park_name'] ?>
                </p>
              </div>
              <div class="repeat-horizontal">
                  <?php
                  $park_img = '';
                  if ($f['park_img']) {
                      $park_img = '<img src="'.esc_url(get_media_url( $f['park_img'])).'">';
                      echo $park_img;
                  } 
                  ?>
              </div>
          <?php } ?>
      <?php } ?>
  </div>
</div>

<?php get_footer(); ?>