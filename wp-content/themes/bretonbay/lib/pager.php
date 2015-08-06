<?php if ( ! function_exists( 'activetheme_paging_nav' ) ) :
/**
 * Displays navigation to next/previous set of posts when applicable.
 *
 * @since Twenty Thirteen 1.0
 *
 * @return void
 */
function activetheme_paging_nav() {
	global $wp_query;

	// Don't print empty markup if there's only one page.
	if ( $wp_query->max_num_pages < 2 )
		return;
	?>
	<nav class="navigation paging-navigation" role="navigation">
		<?php /* <h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'activetheme' ); ?></h1> */ ?>
		<div class="nav-links clearfix">

			<?php if ( get_next_posts_link() ) : ?>
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav meta-nav-prev">&larr;</span> Older posts', 'activetheme' ) ); ?></div>
			<?php endif; ?>

			<?php if ( get_previous_posts_link() ) : ?>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav meta-nav-next">&rarr;</span>', 'activetheme' ) ); ?></div>
			<?php endif; ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'activetheme_post_nav' ) ) :
/**
 * Displays navigation to next/previous post when applicable.
*
* @since Twenty Thirteen 1.0
*
* @return void
*/
function activetheme_post_nav() {
	global $post;

	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous )
		return;
	?>
	<nav class="navigation post-navigation" role="navigation">
		<?php /* <h1 class="screen-reader-text"><?php _e( 'Post navigation', 'activetheme' ); ?></h1> */ ?>
		<div class="nav-links clearfix">
		
			<?php if(is_singular('article')) :
			
			previous_post_link( '%link', _x( '<span class="meta-nav meta-nav-prev">&larr;</span> Previous Article', 'Previous article link', 'activetheme' ) );
			next_post_link( '%link', _x( 'Next Article <span class="meta-nav meta-nav-next">&rarr;</span>', 'Next article link', 'activetheme' ) );
			
			else :
			
			previous_post_link( '%link', _x( '<span class="meta-nav meta-nav-prev">&larr;</span> Previous Post', 'Previous post link', 'activetheme' ) );
			next_post_link( '%link', _x( 'Next Post <span class="meta-nav meta-nav-next">&rarr;</span>', 'Next post link', 'activetheme' ) );
			
			endif; ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;