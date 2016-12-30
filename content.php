<?php
/**
 * The default template for displaying content/blog view
 *
 * @package WordPress
 * @subpackage rays
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class('content'); ?>>
	<header class="post-header">
		<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
		<div class="post-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
		<?php endif; ?>
		<h3 class="post-time"><?php the_time( get_option( 'date_format' ) ); ?></h3>
		<?php if ( is_single() ) : ?>
		<h2 class="post-title"><?php the_title(); ?></h2>
		<?php else : ?>
		<h2 class="post-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h2>
		<?php endif; // is_single() ?>
		<h3 class="post-author"><?php the_author() ?></h3>


	</header>

	<?php the_content(); ?>



</article><!-- #post -->
