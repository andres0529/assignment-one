<?php
/* 
* Template Name: Team Page Template
* Template Post Type: page
*/

get_header();
?>
<main class="team-template-page">
    <section class="info">
        <h3><?php the_field('intro_title'); ?></h3>
        <p><?php the_field('intro_text') ?></p>
    </section>
    <section class="card-container">
        <?php
        $query = new WP_Query(array('post_type' => 'team', 'post_per_page' => 10, 'order' => 'asc'));
        while ($query->have_posts()) : $query->the_post();
        ?>
           <div class="card">
                <figure>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail(); ?>
                    </a>
                </figure>
                <h4><?php the_field('name'); ?></h4>
                <h5><?php the_field('title'); ?></h5>
                <a href="<?php the_permalink(); ?>"></a>
            </div>
        <?php
            wp_reset_postdata();
        endwhile;
        wp_reset_postdata();
        ?>
    </section>
</main>
<?php
get_footer();
?>