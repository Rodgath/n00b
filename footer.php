<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the 'main' content, .wrapper and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package    WordPress
 * @subpackage n00b
 * @since      1.0
 * @version    1.0
 */

?>

</main>
<!-- END main -->

<!-- START #footer -->
<footer id="footer" class="footer" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<hr />
				<p class="copyright">
					<?php _e('Copyright', 'n00b'); ?> &copy;			
					<span itemprop="copyrightYear"><?php echo date('Y'); ?></span>
					<span itemprop="copyrightHolder"><?php bloginfo('name'); ?></span>. <?php _e('Powered by', 'n00b'); ?>
					<a href="http://wordpress.org" title="WordPress">WordPress</a> &amp; <a href="http://themedilaz.com" title="WP n00b"><?php _e('WP n00b', 'n00b'); ?></a>.
				</p>
			</div>
		</div>
	</div>
</footer>
<!-- END #footer -->

</div>
<!-- END .wrapper -->

<?php wp_footer(); ?>

<script>
(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
ga('send', 'pageview');
</script>

</body>
</html>