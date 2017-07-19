<?php use Roots\Sage\Titles; ?>

<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class(); ?>>
		<div class="page-header">

			<div class="container">
				<div class="row">
					<div class="col-lg-10 col-lg-push-1 col-md-12">

						<header class="content-header">
							<h1 class="page-header-main"><?= Titles\title(); ?></h1>
							<?php get_template_part( 'templates/entry-meta' ); ?>
						</header>
					</div>
				</div>
			</div>
		</div>

		<div class="container content-container">
			<div class="col-lg-10 col-lg-push-1 col-md-12">
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
				<footer>
					<?php wp_link_pages( [
						'before' => '<nav class="page-nav"><p>' . __( 'Pages:', 'sage' ),
						'after'  => '</p></nav>'
					] ); ?>
				</footer>
				<?php //comments_template( '/templates/comments.php' ); ?>
			</div>
		</div>
	</article>
<?php endwhile; ?>