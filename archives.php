<?php
/*
Template Name: Archives Page
*/
?>
<?php get_header() ?>

	<div id="container">
		<div id="content">

<?php the_post() ?>

			<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
<?php the_content() ?>

				<table id="archives">
				<?php 
				$all = get_posts('numberposts=-1');
				$currentYear = "";
				$currentMonth = "";
				foreach($all as $post):
					setup_postdata($post);
					if($currentYear != mysql2date("Y", $post->post_date))
					{
						$currentYear = mysql2date("Y", $post->post_date);
						print "<tr class=year><th colspan=2>$currentYear</th></tr>\n";
					}
					if($currentMonth != mysql2date("F", $post->post_date))
					{
						$currentMonth = mysql2date("F", $post->post_date);
						print "<tr><th>$currentMonth</th><td></td></tr>\n";
					}
					$day = mysql2date("d", $post->post_date);
					$title = $post->post_title;
					print "<tr><th>$day</th><td><a href=\"";
					the_permalink();
					print "\">$title</a></td></tr>\n";
				?>
				<?php endforeach; ?>
				</table>
				
<?php edit_post_link( __( 'Edit', 'sandbox' ), '<span class="edit-link">', '</span>' ) ?>

			</div><!-- .post -->

<?php if ( get_post_custom_values('comments') ) comments_template() // Add a key/value of "comments" to enable comments on pages! ?>

		</div><!-- #content -->
	</div><!-- #container -->

<?php //get_sidebar() ?>
<?php get_footer() ?>
