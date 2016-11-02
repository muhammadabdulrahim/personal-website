<?php
$data = array(
	'id' => 'photography',
	'title' => 'My Photography',
	'content' => 'I sometimes take photographs, mostly of animal life. Here are a few of my favorites over the years:',
	'pkg' => [
		[
			'img' => get_assets_uri().'/images/IMG_5522.JPG',
			'title' => 'Bird',
			'caption' => 'Maryland'
		],
		[
			'img' => get_assets_uri().'/images/IMG_6262.JPG',
			'title' => 'Bear',
			'caption' => 'Ontario'
		],
		[
			'img' => get_assets_uri().'/images/IMG_6044.JPG',
			'title' => 'Deer',
			'caption' => 'Ontario'
		]

	]
);
include('view.php');
?>
