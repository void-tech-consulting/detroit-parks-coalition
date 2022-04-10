<?php
get_header();
?>



<br>
<br>
<br>
<br>


<div class="ResourcesContainer">
    <h1>Events and Funding Opportunities Calendar</h1>
    <div class="Calendar">
        <iframe src=<?php echo get_theme_mod('calendar_section') ?> style="border:solid 1px #777" width="900" height="700" frameborder="0" scrolling="no"></iframe>
    </div>



    <!-- // put a repeater here?  -->
    

</div>

<?php get_footer(); ?>