<?php
/* 
* Template Name: Team Single Page Template
* Template Post Type: post, team
*/

get_header();
?>

<main class="team-single-template">
    <section class="row">
        <figure>
            <?php the_post_thumbnail(); ?>
        </figure>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <h3><?php the_field('name');?></h3>
            <h4><?php the_field('title');?></h4>
            <p><?php the_field('bio');?></p>
        </div>
    </section>
</main>
<?php
get_footer();
?>