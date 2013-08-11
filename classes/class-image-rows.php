<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Image Rows Plugin class
 *
 * @package WordPress
 * @subpackage Image_Rows
 * @author Patrick Garman
 * @since 1.0.0
 */
class Image_Rows {

	/**
	 * Construct
	 * 
	 * @param string $file
	 */
	public function __construct( $file ) {
		$this->name = 'Image Rows';
		$this->token = 'image-rows';
		$this->file = $file;
		add_shortcode( 'imagerow', array( $this, 'shortcode_imagerow' ) );
	}

	function shortcode_imagerow( $atts ) {
		extract( shortcode_atts( array(
			'images' => '',
			'caption' => ''
		), $atts ) );

		// No need to continue if no images are included
		if( empty( $images ) ) return;

		// Generate array of images
		$i = array();
		foreach( explode( ',', $images ) as $image ) {
			$image = explode( '|', $image );
			$i[] = array(
				'src' => $image[0],
				'href' => isset( $image[1] ) ? $image[1] : false
			);
		}

		// Enqueue styles here so they only load when needed
		wp_enqueue_style( 'image-rows', plugins_url( 'assets/css/image-rows.css', $this->file ) );

		// HTML
		ob_start();
		?>
		<figure class="image-row image-row-cols-<?php echo count( $i ); ?> clear">
			<?php foreach( $i as $image ): $img = '<img src="' . $image['src'] . '" />'; ?>
				<?php if( $image['href'] ): ?>
					<a class="image" href="<?php echo $image['href']; ?>"><?php echo $img; ?></a>
				<?php else: ?>
					<?php echo '<img class="image" src="' . $image['src'] . '" />' ?>
				<?php endif; ?>
			<?php endforeach; ?>
			<?php if( !empty( $caption ) ): ?>
				<figcaption class="clear"><?php echo $caption; ?></figcaption>
			<?php endif; ?>
		</figure>
		<?php
		return ob_get_clean();
	}
}