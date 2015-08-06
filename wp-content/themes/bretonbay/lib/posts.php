<?php


if (!function_exists('activetheme_post_thumbnail')):

	/**
	 * TODO: PHPDoc
	 */
	function activetheme_post_thumbnail() {
		if (post_password_required() || is_attachment() || !has_post_thumbnail()) {
			return;
		}

		if (is_single()):
		?>
	<div class="post-thumbnail">
	<?php the_post_thumbnail('media-thumbnail', array('class' => 'img-responsive'));?>
	</div>

	<?php else:?>

        <a class="post-thumbnail" href="<?php the_permalink();?>">
        <?php the_post_thumbnail('media-thumbnail', array('class' => 'img-responsive'));?>
        </a>
<?php
endif;
}

endif;

if (!function_exists('activetheme_excerpt_length')):
	/**
	 * Proposal Except Length
	 *
	 * @param $length
	 * @return $length
	 */
	function activetheme_excerpt_length($length) {
		$length = 30;
		return $length;
	}
	add_filter('excerpt_length', 'activetheme_excerpt_length');
endif;

if (!function_exists('activetheme_excerpt_more')):
	/**
	 * Proposal Excerpt More Value
	 *
	 * @param $more
	 * @return $more
	 */
	function activetheme_excerpt_more($more) {
		$more = '…';
		return $more;
	}
	add_filter('excerpt_more', 'activetheme_excerpt_more');
endif;
?>
