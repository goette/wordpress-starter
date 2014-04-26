<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package _mrtngtt
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', '_mrtngtt' ) ); ?>"><?php printf( __( 'Proudly powered by %s', '_mrtngtt' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', '_mrtngtt' ), '_mrtngtt', '<a href="http://twitter.com/mrtngtt" rel="designer">mrtngtt</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?> 

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/es5-shim/es5-shim.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/es5-shim/es5-sham.js"></script>
<![endif]-->
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/jquery/dist/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/requirejs/require.js" data-main="<?php echo get_template_directory_uri(); ?>/scripts/main.js"></script>

<?php 
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
if (false !== strpos($url, '.dev')) { ?>
    <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
<?php } ?>


</body>
</html>
