<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package Beetroot
 */

?>

</main><!-- #content -->

<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-10 footer-column">

				<div class="footer__about">
					<?php dynamic_sidebar('footer-col-1'); ?>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-10 footer-column">
				<div class="footer__widget">
					<?php dynamic_sidebar('footer-col-2'); ?>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-10 footer-column">
				<div class="footer__widget">
					<?php dynamic_sidebar('footer-col-3'); ?>
				</div>
			</div>

		</div>
		<div class="row">
			<div class="col-12">
				<div class="madeby">
					<span>© 2016 MoGo free PSD template by Laaqiq</span>
				</div>
			</div>

		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>

</html>