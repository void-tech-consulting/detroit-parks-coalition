<script type="text/javascript" src="footer.js"></script>

<?php require get_template_directory() . '/inc/section_vars.php'; ?>
<div class="footer-container">
  <h1> Stay in Touch!</h1>
  <div class="formStyle">
    <?php
    $shortcode = get_theme_mod('contact_form_shortcode');
    echo do_shortcode($shortcode);
    ?>
  </div>
</div>
<br>
<?php wp_footer(); ?>

</body>

</html>