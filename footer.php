<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bright_Cheer
 */

?>

	</div><!-- #content -->

<div id="brightcheer-footer" class="row">
	<div id="footer-sidebar" class="secondary">
		<div class="row">
		<aside id="footer-sidebar-1" class="widget-area col-md-4 col-xl-4">
		<?php
			if(is_active_sidebar('footer-sidebar-1')){
			dynamic_sidebar('footer-sidebar-1');
			}
			?>	
		</aside><!-- #secondary -->
			<aside id="footer-sidebar-2" class="widget-area col-md-4 col-xl-4">
			<?php
			if(is_active_sidebar('footer-sidebar-2')){
			dynamic_sidebar('footer-sidebar-2');
			}
			?>	
			</aside><!-- #secondary -->
			<aside id="footer-sidebar-3" class="widget-area col-md-4 col-xl-4">
			<?php
			if(is_active_sidebar('footer-sidebar-3')){
			dynamic_sidebar('footer-sidebar-3');
			}
		?>	
		</aside><!-- #secondary -->
	</div><!-- #footer-sidebar -->
	<div class="site-info">
			2007 - <?php echo date('Y'); ?> Copyright Marie Casas | <a href="http://www.mariecasas.com" rel="designer">Custom Wordpress Theme</a>. 
	</div><!-- .site-info -->
</div><!-- #brightcheer-footer -->

<?php /*
		<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bright-cheer' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'bright-cheer' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'bright-cheer' ), 'bright-cheer', '<a href="http://underscores.me/" rel="designer">Marie Casas</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon --> */?>
</div><!-- #main-page -->
</div><!-- #container-->

<?php wp_footer(); ?>

</body>
</html>
