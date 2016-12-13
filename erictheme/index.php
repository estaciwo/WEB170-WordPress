<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="content">
	<?php if(have_posts()): while(have_posts()): the_post(); ?>
        <article class="postcol">
            <h2><?php the_title(); ?></h2>
             <p>Written on
             	<time datetime="<?php the_time('Y-m-d'); ?>">
                    <?php the_time('M j'); ?>
                </time>
                by <?php the_author(); ?>
             </p>
            <?php the_post_thumbnail(); ?>
            <?php the_content(); ?>
            <?php comments_number("0 comments", "1 comment", "% comments"); ?>
        </article>
    <?php endwhile; else: ?>
		<p>Sorry no posts</p>
	<?php endif; ?>
</div>
<?php get_footer(); ?>