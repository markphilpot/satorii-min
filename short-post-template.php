			<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class(); sticky_class(); ?>">
				<h3 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf( __( 'Permalink to %s', 'sandbox' ), the_title_attribute('echo=0') ) ?>" rel="bookmark"><?php the_title() ?></a> <span class="comments-link"><?php comments_popup_link( '0','1','%' ) ?></span> <?php edit_post_link( __('Edit', 'sandbox'), ' · <span class="edit-link">', '</span>');?></h3>
				<div class="entry-content">
<?php the_excerpt( __( 'Read More <span class="meta-nav">&raquo;</span>', 'sandbox' ) ) ?>
				<?php if ( $post->post_type == 'post' ) { ?><p class="cat-links"><span><?php _e('Categories:', 'sandbox')?></span> <?php the_category(',') ?></p><?php } ?>
				<?php the_tags( __( '<p class="tag-links"><span>Tagged:</span> ', 'sandbox' ), ', ', '</p>') ?>
				</div>
				<?php if ( $post->post_type == 'post') { ?>
				<dl class="entry-meta">
					<dt><?php _e('Published:', 'sandbox')?></dt>
						<dd class="entry_date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php unset($previousday); printf( __( '%1$s &#8211; %2$s', 'sandbox' ), the_date( '', '', '', false ), get_the_time() ) ?></abbr></dd>
					<dt><?php _e('Author:', 'sandbox')?></dt>
						<dd class="author vcard"><?php printf( __( 'By %s', 'sandbox' ), '<a class="url fn n" href="' . get_author_link( false, $authordata->ID, $authordata->user_nicename ) . '" title="' . sprintf( __( 'View all posts by %s', 'sandbox' ), $authordata->display_name ) . '">' . get_the_author() . '</a>' ) ?></dd>
				</dl>
				<?php } ?>		
			</div><!-- .post -->
