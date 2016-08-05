<?php

define('VERSION','1.0.0');

function get_home_uri()
{
	$https = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https://' : 'http://';
	$server = isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : '';
	$request = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
	
	return $https.$server.$request;
}

function get_assets_uri()
{
	return get_home_uri().'assets';
}

function pre_print_r($s)
{
	?><pre><?php print_r($s); ?></pre><?php
}

function create_portfolio($pkg)
{
	if( empty($pkg) ) return;
	
	//	TODO: Add links offsite and also to modals
	?>
	<div class="portfolio">
		<?php foreach( $pkg as $node ): ?>
		<div class="node">
			
			<?php if( array_key_exists('img',$node) ): ?>
				<img src="<?php echo $node['img']; ?>">
			<?php endif; ?>
			
			<?php if( array_key_exists('title',$node) ): ?>
				<h1><?php echo $node['title']; ?></h1>
			<?php endif; ?>
			
			<?php if( array_key_exists('caption',$node) ): ?>
				<span><?php echo $node['caption']; ?></span>
			<?php endif; ?>
			
		</div>
		<?php endforeach; ?>
	</div>
	<?php
}