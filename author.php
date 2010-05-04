<?php get_header() ?>

	<div id="container">
		<div id="content">

<?php the_post() ?>

			<h2 class="page-title author"><?php printf( __( 'Author Archives: <span class="vcard">%s</span>', 'sandbox' ), "<a class='url fn n' href='$authordata->user_url' title='$authordata->display_name' rel='me'>$authordata->display_name</a>" ) ?></h2>
			<?php $authordesc = $authordata->user_description; if ( !empty($authordesc) ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . $authordesc . '</div>' ); ?>

			<div id="nav-above" class="navigation yui-g">
				<div class="nav-previous yui-u first"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'sandbox' )) ?></div>
				<div class="nav-next yui-u"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'sandbox' )) ?></div>
			</div>

<?php rewind_posts() ?>

<?php while ( have_posts() ) : the_post();

include (TEMPLATEPATH . '/short-post-template.php');

endwhile; ?>

			<div id="nav-below" class="navigation yui-g">
				<div class="nav-previous yui-u first"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'sandbox' )) ?></div>
				<div class="nav-next yui-u"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'sandbox' )) ?></div>
			</div>

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>
