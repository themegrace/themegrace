<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package themesurge
 */

?>

	</div><!-- #content -->
	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="site-info">
				<?php
				$copyright = get_theme_mod('themegrace_section_footer_copyright_setting', 'on');
				
				if ( true == $copyright) : 
					themegrace_footer_text();
				endif; ?>
				
			</div><!-- .site-info -->
		</div><!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
