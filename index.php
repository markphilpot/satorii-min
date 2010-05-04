<?php get_header() ?>

	<div id="container">
		<div id="content">

			<div id="nav-above" class="navigation yui-g">
				<div class="nav-previous yui-u first"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'sandbox' )) ?></div>
				<div class="nav-next yui-u"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'sandbox' )) ?></div>
			</div>

<?php while ( have_posts() ) : the_post() ?>

			<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class(); sticky_class(); ?>">
				<h2 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf( __('Permalink to %s', 'sandbox'), the_title_attribute('echo=0') ) ?>" rel="bookmark"><?php the_title() ?></a></h2>
				<div class="entry-content">
<?php the_content( __( 'Read More <span class="meta-nav">&raquo;</span>', 'sandbox' ) ) ?>
				<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'sandbox' ) . '&after=</div>') ?>
				<?php the_tags( __( '<p class="tag-links"><span>Tagged:</span> ', 'sandbox' ), ', ', '</p>') ?>
				</div>
				<dl class="entry-meta">
					<dt><?php _e('Published:', 'sandbox')?></dt>
						<dd class="entry_date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php unset($previousday); printf( __( '%1$s &#8211; %2$s', 'sandbox' ), the_date( '', '', '', false ), get_the_time() ) ?></abbr></dd>
					<dt><?php _e('Author:', 'sandbox')?></dt>
						<dd class="author vcard"><?php printf( __( 'By %s', 'sandbox' ), '<a class="url fn n" href="' . get_author_link( false, $authordata->ID, $authordata->user_nicename ) . '" title="' . sprintf( __( 'View all posts by %s', 'sandbox' ), $authordata->display_name ) . '">' . get_the_author() . '</a>' ) ?></dd>
					<dt><?php _e('Categories:', 'sandbox')?></dt>
						<dd class="cat-links">
						<?php the_category(); ?>
						</dd>
					<dt><?php _e('Comments:', 'sandbox')?></dt>
						<dd class="comments-link"><?php comments_popup_link( __( 'None', 'sandbox' ), __( '1 Comment', 'sandbox' ), __( '% Comments', 'sandbox' ) ) ?></dd>
					<?php edit_post_link( __('Edit this post', 'sandbox'), __('<dt>Edit</dt><dd class="edit-link">', 'sandbox'), '</dd>');?>
				</dl>
			</div><!-- .post -->

<?php comments_template() ?>

<?php endwhile; ?>

			<div id="nav-below" class="navigation yui-g">
				<div class="nav-previous yui-u first"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'sandbox' )) ?></div>
				<div class="nav-next yui-u"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'sandbox' )) ?></div>
			</div>

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>
