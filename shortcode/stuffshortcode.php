<?php 


function zitalyfoodStuff_shortcode($atts){
	$atts = shortcode_atts( array(
		'stuff_title' => '', 
		'stuff_img'	=> '', 
		'stuff_fb'	=> '', 
		'stuff_tw'	=> '', 
		'stuff_li'	=> '', 
		'stuff_ins'	=> '', 
	), $atts, 'stuff' );

	ob_start();
	?>

			<div class="chef">
				<div class="wrap-col">
					<div class="zoom-container">
						<a href="#">
							<img src="<?php echo wp_get_attachment_image($atts['stuff_img'], 'full'); ?>" />
						</a>
					</div>
					<h3><?php echo $atts['stuff_title']; ?></h3>
					<ul class="social t-center">
						<li><a href="<?php echo $atts['stuff_fb']; ?>"><i class="fa fa-twitter"></i></a></li>
						<li><a href="<?php echo $atts['stuff_tw']; ?>"><i class="fa fa-facebook"></i></a></li>
						<li><a href="<?php echo $atts['stuff_li']; ?>"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="<?php echo $atts['stuff_ins']; ?>"><i class="fa fa-instagram"></i></a></li>
					</ul>
				</div>
			</div>

	<?php
	return ob_get_clean();
}
add_shortcode( 'stuff','zitalyfoodStuff_shortcode' );

vc_map(array(
	'base'		=> 'stuff', 
	'name'	=> 'Our Stuff', 
	'icon' 	=> get_theme_file_uri().'/assets/images/team.png', 
	'category'	=> 'zitalyfood',
	'params' 	=> array(
		array(
			'param_name'		=> 'stuff_img',
			'heading'		=> 'Stuff Image',
			'type'			=> 'attach_image' ,

		),
		array(
			'param_name'		=> 'stuff_title',
			'heading'		=> 'Stuff Name',
			'type'			=> 'textfield' 
		),
		array(
			'param_name'		=> 'stuff_fb',
			'heading'		=> 'Facebook',
			'type'			=> 'textfield' 
		),
		array(
			'param_name'		=> 'stuff_tw',
			'heading'		=> 'Twitter',
			'type'			=> 'textfield' 
		),
		array(
			'param_name'		=> 'stuff_li',
			'heading'		=> 'Linkedin',
			'type'			=> 'textfield' 
		),
		array(
			'param_name'		=> 'stuff_ins',
			'heading'		=> 'Instagram',
			'type'			=> 'textfield' 
		),
	), 

));

