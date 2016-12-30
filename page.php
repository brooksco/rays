<?php get_header(); ?>

<?php if ( is_page(7) ) {
	wp_list_pages(array('title_li' => '', 'child_of' => 7));
} ?>

<?php if ( is_page(19) ) {
	wp_list_pages(array('title_li' => '', 'child_of' => 19));
} ?>

<?php if ( is_page(554) ) {
	wp_list_pages(array('title_li' => '', 'child_of' => 554));
} ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php the_content(); ?>

<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>


<?php get_footer(); ?>