<?php  
/*
 Plugin Name: Tweet That
 Plugin URI: http://burk.ie
 Description: Tweets in Posts
 Version: 0.5
 Author: Liam Burke
 Author URI: burk.ie
 */

function tweet_shortcode($atts, $content = null) { 
	extract(shortcode_atts(array("bird" => 'no'), $atts)); ?>
	
	<script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
	
	<style>
		.bird {
			background: url('<?php bloginfo('url'); ?>/wp-content/plugins/tweet-that/img/bird.png') no-repeat;
			text-indent: -9999px;
			margin: 4px 0 0 4px;		
			width: 20px;
			height: 16px;
			display: inline-block;
		}
	</style>
	
	<?php
	if ( $bird == 'no' ) {
		return '<a href="https://twitter.com/intent/tweet?status='.$content = strip_tags($content,'').' '.get_permalink('').' via '.get_bloginfo('name').'" target="_blank">'. $content .'</a>';
		
		} else {
		return '<a href="https://twitter.com/intent/tweet?status='.$content = strip_tags($content,'').' '.get_permalink('').' via '.get_bloginfo('name').'" target="_blank">'. $content. '<div class=\'bird\'>' .$bird.'</div></a>' ;
	}
}

add_shortcode( 'tweet', 'tweet_shortcode' );

?>
