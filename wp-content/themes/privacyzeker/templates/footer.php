<div class="clearfix"></div>
<footer class="footer">
	<div class="footer-info">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<img src="<?= get_stylesheet_directory_uri() . '/dist/images/logo-white.png'; ?>">
				</div>
				<div class="col-lg-12">
					<p class="footer-contact-info">
						<span><i class="glyphicon glyphicon-earphone"></i><?= get_field( 'telefoon', 'options' ); ?></span>
						<span><i class="glyphicon glyphicon-envelope"></i><?= get_field( 'e-mailadres', 'options' ); ?></span>
						<span><i class="glyphicon glyphicon-home"></i><?= get_field( 'adres', 'options' ); ?></span>
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-copyright">

		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="copyright">© <?= date('Y'); ?> - <?= get_bloginfo('name'); ?></p>
				</div>
			</div>
		</div>
	</div>
</footer>
