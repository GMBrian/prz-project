<?php
// check if the flexible content field has rows of data
if ( have_rows( 'secties' ) ):

	$section_counter = 0;

	// loop through the rows of data
	while ( have_rows( 'secties' ) ) : the_row();

		if ( get_row_layout() == 'tekst' ): ?>

			<div <?= get_sub_field( 'sectie_id' ) ? ' id="' . get_sub_field( 'sectie_id' ) . '" ' : ''; ?>
				class="section section-<?= get_row_layout(); ?> <?= get_sub_field( 'sectie_id' ) ? get_sub_field( 'sectie_id' ) : ''; ?>"
				<?= get_sub_field( 'achtergrondkleur' ) ? ' style="background-color:' . get_sub_field( 'achtergrondkleur' ) . '" ' : ''; ?>>

				<div class="container">

					<div class="row entry-content">

						<div class="col-lg-6 col-lg-push-3 col-md-12">
							<?= get_sub_field( 'tekst' ); ?>
						</div>

					</div>

				</div>
			</div>

		<?php elseif ( get_row_layout() == 'tekst_tekst' ) : ?>

			<div <?= get_sub_field( 'sectie_id' ) ? ' id="' . get_sub_field( 'sectie_id' ) . '" ' : ''; ?>
				class="section section-<?= get_row_layout(); ?> <?= get_sub_field( 'sectie_id' ) ? get_sub_field( 'sectie_id' ) : ''; ?>"
				<?= get_sub_field( 'achtergrondkleur' ) ? ' style="background-color:' . get_sub_field( 'achtergrondkleur' ) . '" ' : ''; ?>>

				<div class="container">

					<div class="row entry-content">

						<div class="col-lg-5 col-md-6 col-sm-12">
							<?= get_sub_field( 'tekst_1' ); ?>
						</div>

						<div class="col-lg-2 col-md-0"></div>

						<div class="col-lg-5 col-md-6 col-sm-12">
							<?= get_sub_field( 'tekst_2' ); ?>
						</div>

					</div>
				</div>
			</div>

		<?php elseif
		( get_row_layout() == 'afbeelding_tekst'
		) : ?>

			<div <?= get_sub_field( 'sectie_id' ) ? ' id="' . get_sub_field( 'sectie_id' ) . '" ' : ''; ?>
				class="section section-<?= get_row_layout(); ?> <?= get_sub_field( 'sectie_id' ) ? get_sub_field( 'sectie_id' ) : ''; ?>"
				<?= get_sub_field( 'achtergrondkleur' ) ? ' style="background-color:' . get_sub_field( 'achtergrondkleur' ) . '" ' : ''; ?>>

				<div class="container">

					<div class="row entry-content">

						<div class="col-lg-7 col-md-6 col-sm-12">
							<?= get_sub_field( 'afbeelding' ) ? '<img src="' . get_sub_field( 'afbeelding' ) . '">' : ''; ?>
						</div>

						<div class="col-lg-4 col-lg-push-1 col-md-6 col-sm-12 tekst-col">
							<?= get_sub_field( 'tekst' ); ?>
						</div>

					</div>
				</div>
			</div>

		<?php elseif ( get_row_layout() == 'tekst_afbeelding' ) : ?>

			<div <?= get_sub_field( 'sectie_id' ) ? ' id="' . get_sub_field( 'sectie_id' ) . '" ' : ''; ?>
				class="section section-<?= get_row_layout(); ?> <?= get_sub_field( 'sectie_id' ) ? get_sub_field( 'sectie_id' ) : ''; ?>"
				<?= get_sub_field( 'achtergrondkleur' ) ? ' style="background-color:' . get_sub_field( 'achtergrondkleur' ) . '" ' : ''; ?>>

				<div class="container">

					<div class="row entry-content">

						<div class="col-lg-4 col-md-6 col-sm-12 tekst-col">
							<?= get_sub_field( 'tekst' ); ?>
						</div>

						<div class="col-lg-7 col-lg-push-1 col-md-6 col-sm-12">
							<?= get_sub_field( 'afbeelding' ) ? '<img src="' . get_sub_field( 'afbeelding' ) . '">' : ''; ?>
						</div>

					</div>
				</div>
			</div>

		<?php elseif ( get_row_layout() == '3_icoonblokken' ) : ?>

			<div <?= get_sub_field( 'sectie_id' ) ? ' id="' . get_sub_field( 'sectie_id' ) . '" ' : ''; ?>
				class="section section-<?= get_row_layout(); ?> <?= get_sub_field( 'sectie_id' ) ? get_sub_field( 'sectie_id' ) : ''; ?>"
				<?= get_sub_field( 'achtergrondkleur' ) ? ' style="background-color:' . get_sub_field( 'achtergrondkleur' ) . '" ' : ''; ?>>

				<div class="container">

					<div class="row entry-content">

						<div class="col-md-4 col-sm-12 icon-col">
							<img
								src="<?= get_stylesheet_directory_uri() . '/dist/images/icon-' . get_sub_field( 'icoon_1' ) . '.png'; ?>">
							<h4><?= get_sub_field( 'titel_1' ); ?></h4>
							<p><?= get_sub_field( 'inhoud_1' ); ?></p>
						</div>

						<div class="col-md-4 col-sm-12 icon-col">
							<img
								src="<?= get_stylesheet_directory_uri() . '/dist/images/icon-' . get_sub_field( 'icoon_2' ) . '.png'; ?>">
							<h4><?= get_sub_field( 'titel_2' ); ?></h4>
							<p><?= get_sub_field( 'inhoud_2' ); ?></p>
						</div>

						<div class="col-md-4 col-sm-12 icon-col">
							<img
								src="<?= get_stylesheet_directory_uri() . '/dist/images/icon-' . get_sub_field( 'icoon_3' ) . '.png'; ?>">
							<h4><?= get_sub_field( 'titel_3' ); ?></h4>
							<p><?= get_sub_field( 'inhoud_3' ); ?></p>
						</div>

					</div>
				</div>
			</div>

		<?php elseif ( get_row_layout() == 'uitgelichte_video' ) : ?>

			<div class="pre-section-<?= get_row_layout(); ?>"></div>

			<div <?= get_sub_field( 'sectie_id' ) ? ' id="' . get_sub_field( 'sectie_id' ) . '" ' : ''; ?>
				class="section section-<?= get_row_layout(); ?> <?= get_sub_field( 'sectie_id' ) ? get_sub_field( 'sectie_id' ) : ''; ?>"
				<?= get_sub_field( 'achtergrondkleur' ) ? ' style="background-color:' . get_sub_field( 'achtergrondkleur' ) . '" ' : ''; ?>>

				<div class="container">

					<div class="row entry-content">

						<div class="col-lg-8 col-lg-push-2 col-md-12 highlight-video">
							<img
								src="<?= get_sub_field( 'video_afbeelding' ); ?>">
						</div>

					</div>
				</div>
			</div>
			<?php
		endif;

		$section_counter ++;

	endwhile;

else :

	// no layouts found

endif;