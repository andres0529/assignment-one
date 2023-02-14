
<?php
/**
 * Template Name: Homepage Version One (No plugins)
 * Template Post Type: page, post
 */
    get_header();
?>
<!-- Now we add our content -->
<!--  -->
<main class="assignmentOne">
    <?php
        if(have_posts()):
            while(have_posts()) : the_post();
                the_content();
            endwhile;
        else: 
            echo "<h1>Sorry, no posts are found</h1>";
        endif;
    ?>
</main>
<?php
    get_footer();
?>