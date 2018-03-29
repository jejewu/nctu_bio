<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="intro-container">
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<?php the_content( ) ;?>
</div>

<?php endwhile;?><?php else: ?>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
