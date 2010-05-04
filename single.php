<?php get_header() ?>

	<div id="container">
		<div id="content">

<?php the_post() ?>

			<div id="nav-above" class="navigation yui-g">
				<div class="nav-previous yui-u first"><?php previous_post_link( '%link', '<span class="meta-nav">&laquo;</span> %title' ) ?></div>
				<div class="nav-next yui-u"><?php next_post_link( '%link', '%title <span class="meta-nav">&raquo;</span>' ) ?></div>
			</div>

			<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
				<h2 class="entry-title"><?php the_title() ?></h2>
				<div class="entry-content">
<?php the_content() ?>
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
						<?php the_category();?>
						</dd>
					<dt><?php _e('Comments:', 'sandbox')?></dt>
						<dd class="comments-link">
						<ul>
							<li><a href="#comments"><?php comments_number( __( 'None', 'sandbox' ), __( '1 Comment', 'sandbox' ), __( '% Comments', 'sandbox' ) ) ?></a></li>
							<li><?php comments_rss_link( __('Comments RSS Feed', 'sandbox') ); ?></li>
							<?php if ( comments_open() ) { ?><li><a class="comment-link" href="#respond" title="Post a comment">Post a comment</a></li><?php } ?>
							<?php if (pings_open()) { ?><li><a class="trackback-link" href="<?php trackback_url() ?>"><?php _e('Trackback <acronym title="Universal Resource Locator">URL</acronym>', 'sandbox')?></a></li><?php } ?>
						</ul>
						</dd>
					<?php edit_post_link( __('Edit this post', 'sandbox'), __('<dt>Edit</dt><dd class="edit-link">', 'sandbox'), '</dd>');?>
				</dl>
				
				<!-- <?php trackback_rdf(); ?> -->
			</div><!-- .post -->

			<div id="nav-below" class="navigation yui-g">
				<div class="nav-previous yui-u first"><?php previous_post_link( '%link', '<span class="meta-nav">&laquo;</span> %title' ) ?></div>
				<div class="nav-next yui-u"><?php next_post_link( '%link', '%title <span class="meta-nav">&raquo;</span>' ) ?></div>
			</div>

<?php comments_template() ?>

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_footer() ?>
