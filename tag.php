<?php get_header() ?>

	<div id="container">
		<div id="content">

			<h2 class="page-title"><?php _e( 'Tag Archives:', 'sandbox' ) ?> <span><?php single_tag_title() ?></span></h2>

			<div id="nav-above" class="navigation yui-g">
				<div class="nav-previous yui-u first"><?php next_posts_link( __( '<span class="meta-nav">&laquo;</span> Older posts', 'sandbox' ) ) ?></div>
				<div class="nav-next yui-u"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&raquo;</span>', 'sandbox' ) ) ?></div>
			</div>

<?php while ( have_posts() ) : the_post();

include (TEMPLATEPATH . '/short-post-template.php');

endwhile; ?>

			<div id="nav-below" class="navigation yui-g">
				<div class="nav-previous yui-u first"><?php next_posts_link( __( '<span class="meta-nav">&laquo;</span> Older posts', 'sandbox' ) ) ?></div>
				<div class="nav-next yui-u"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&raquo;</span>', 'sandbox' ) ) ?></div>
			</div>

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>
