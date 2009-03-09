</div> <!--end of container -->
</div> <!--end of main -->

<div id="footer">
	<div class="container">
	<!-- If you'd like to support WordPress, having the "powered by" link somewhere on your blog is the best way; it's our only promotion or advertising. -->
		<div class="footer-text">
			<h3>Designed by <a href="http://www.cdawson.com">Curtis Dawson</a> for <a href="http://www.squarecare.org">SquareCare.org</a></h3>
			<p>
				<?php bloginfo('name'); ?> is proudly powered by
				<a href="http://wordpress.org/">WordPress</a>
			</p>
		</div>
		<div class="footer-text">
			<a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a><br/>
			<a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a><br/>
			<a href="http://www.whatisrss.com/">What is RSS?</a><br/>
			<?php wp_loginout(); ?><br/>
			<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
		</div>
		<!-- Design by Curtis Dawson - http://www.atlguy.com/brownish -->

		<?php wp_footer(); ?>
	</div>
</div>

</body>
</html>
