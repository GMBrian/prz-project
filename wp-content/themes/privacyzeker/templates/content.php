<article <?php post_class( 'col-lg-10 col-lg-push-1 col-xs-12' ); ?>>
	<header class="content-header">
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php get_template_part( 'templates/entry-meta' ); ?>
	</header>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div>
	<hr>
</article>