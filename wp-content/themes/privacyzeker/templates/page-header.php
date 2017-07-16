<div class="page-header">

    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-push-1 col-md-12">

                <h1 class="page-header-main"><?= get_field( 'banner_hoofdtekst' ); ?></h1>
                <h2 class="page-header-sub"><?= get_field( 'banner_subtekst' ); ?></h2>

				<?php if ( get_field( 'button_tekst' ) ) : ?>

                    <a class="btn banner-btn"
                       href="<?= get_field( 'button_link' ); ?>"><?= get_field( 'button_tekst' ) ? '' : ''; ?><?= get_field( 'button_tekst' ); ?></a>

				<?php endif; ?>

            </div>
        </div>
    </div>
</div>