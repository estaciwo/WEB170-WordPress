<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="entry">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?>
        </a></h2>
        <div class="entry-body">
            <?php the_content(); ?>
            <?php
                $j2theme_donation_goal = get_post_custom_values( 'goal' );
                $j2theme_current_figure = get_post_custom_values( 'current_figure' );
            ?>
            <?php 
                $j2theme_donation_diff = $j2them_donation_goal[0]
                    - $j2theme_current_figure[0];
            ?>
            <?php
                echo '<h1>We are only $' . $j2theme_donation_diff . ' away from our $' .
                    $j2theme_donation_goal[0] . ' goal. Donate Today!</h1>';
            ?>
        </div>
    </div>
    
    <?php endwhile; else: ?>
    <p><?php ('Sorry, no posts matched your criteria');?></p>
    <?php endif; ?>

</div>
<?php get_footer(); ?>