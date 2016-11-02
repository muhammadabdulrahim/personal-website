<?php
$data = array(
	'id' => 'workplace',
	'title' => 'Workplace History',
	'content' => 'A partial list of my workplace experience is below:',
	'pkg' => [
		[
			'img' => get_assets_uri().'/images/logos/gwu.png',
			'title' => 'The George Washington University',
			'caption' => '2012-2014'
		],
		[
			'img' => get_assets_uri().'/images/logos/world-bank.png',
			'title' => 'The World Bank',
			'caption' => '2013-2014'
		],
		[
			'img' => get_assets_uri().'/images/logos/mpcp.gif',
			'title' => 'Maryland Primary Care Physicians',
			'caption' => '2015'
		],
		[
			'img' => get_assets_uri().'/images/logos/red-edge.png',
			'title' => 'Red Edge',
			'caption' => '2015-Present'
		],
		[
			'img' => get_assets_uri().'/images/logos/3hg.png',
			'title' => '3 Halves Games',
			'caption' => '2015-Present'
		]
	]
);
include('view.php');
?>
