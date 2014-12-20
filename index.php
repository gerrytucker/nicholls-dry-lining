<?php get_header(); ?>

		<div id="services" class="grid-full">
			<div class="row">

<?php
	$args = array(
		'sort_order' => 'ASC',
		'sort_column' => 'ID',
		'number' => 2
	);

	$pages = get_pages( $args );
	foreach( $pages as $page ) :
		$thumb_url = '';

		$args = array(
			'post_type' => 'attachment',
			'post_parent' => $page->ID
		);
		$attachments = get_posts( $args );
		foreach( $attachments as $attachment ) {
			$thumb_url = wp_get_attachment_url( get_post_thumbnail_id( attachment->ID ), 'large' );
			break;
		}
?>
				
				<div class="services column6" style="background: url(<?php echo $thumburl[0]; ?>) no repeat center center">
					<span><?php echo $page->post_title; ?></span>
				</div>

<?php endforeach; ?>				
					
			</div>
		</div>

		<div id="contact" class="grid-full">
			<div class="row">
				<div class="contact column8">
					<?php echo do_shortcode( '[contact-form-7 id="7" title="Contact Us"]' ); ?>
				</div>
				<div class="contact column4">
				</div>
			</div>
		</div>

<?php get_footer(); ?>
