<?php get_header() ?>

	<div id="container">
		<div id="content">

<?php the_post() ?>

			<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
				<h2 class="entry-title"><?php the_title() ?></h2>
				<div class="entry-content">
<?php the_content() ?>



<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'sandbox' ) . '&after=</div>') ?>

<?php edit_post_link( __( 'Edit', 'sandbox' ), '<span class="edit-link">', '</span>' ) ?>

				</div>
				
				<div class="page-meta">
<?php 

	if ( count($post->ancestors) === 0 ) //if it's a top-level page, we'll show all it's children
	{	
		echo  substr(wp_list_pages('sort_column=menu_order&child_of=' . $post->ID .'&echo=0&title_li=<h3 class="page-links-title">' . get_the_title($post->ID) . '</h3>'), 20, -5);
	} elseif ( count($post->ancestors) === 1 )  //if it's a second level, we'll show all its parents' children
	{
		echo substr(wp_list_pages('sort_column=menu_order&child_of=' . $post->ancestors[0] . '&echo=0&title_li=<h3 class="page-links-title">' . get_the_title($post->ancestors[0]) . '</h3>'), 20, -5);
	} else //if page it's more than two levels deep, we'll show all of its top-level ancestor's children
	{
		echo substr(wp_list_pages('sort_column=menu_order&child_of=' . $post->ancestors[1] . '&echo=0&title_li=<h3 class="page-links-title">' . get_the_title($post->ancestors[1]) . '</h3>'), 20, -5);
	}

?>
</div>
				
			</div><!-- .post -->
		</div><!-- #content -->
	</div><!-- #container -->

<?php // get_sidebar() ?>
<?php get_footer() ?>
