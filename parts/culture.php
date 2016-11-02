<?php
$data = array(
	'id' => 'culture',
	'title' => 'Culture',
	'content' => 'From games to literature, I am an avid fan of media. Here is a selected list of some of my absolute favorites:',
	'pkg' => [
		//	Games
		[ 'title' => 'EarthBound' ],
		[ 'title' => 'Majora&lsquo;s Mask' ],
		[ 'title' => 'Pok&eacute;mon Crystal' ],
		[ 'title' => 'Don&lsquo;t Look Back' ],
		[ 'title' => 'Journey' ],
		[ 'title' => 'Undertale' ],

		//	Books
		[
			'title' => 'The Odyssey',
			'caption' => 'Homer',
			'img' => get_assets_uri().'/images/books/odyssey.jpg'
		],

		[
			'title' => 'The Catcher in the Rye',
			'caption' => 'J.D. Salinger',
			'img' => get_assets_uri().'/images/books/catcher.jpg'
		],
		[
			'title' => 'The Andromeda Strain',
			'caption' => 'Michael Crichton',
			'img' => get_assets_uri().'/images/books/andromeda.jpg'
		],
		[
			'title' => 'Dune',
			'caption' => 'Frank Herbert',
			'img' => get_assets_uri().'/images/books/dune.jpg'
		],
		[
			'title' => 'The Road',
			'caption' => 'Cormac McCarthy',
			'img' => get_assets_uri().'/images/books/the-road.jpg'
		],
		[
			'title' => 'Snow Country',
			'caption' => 'Yasunari Kawabata',
			'img' => get_assets_uri().'/images/books/snow-country.jpg'
		],

		//	Films
		[
			'title' => 'Metropolis',
			'caption' => '(1927)'
		],
		[
			'title' => '2001: A Space Odyssey',
			'caption' => '(1968)'
		],
		[
			'title' => 'The Blues Brothers',
			'caption' => '(1980)'
		],
		[
			'title' => 'Spirited Away',
			'caption' => '(2001)'
		],
		[
			'title' => 'No Country For Old Men',
			'caption' => '(2007)'
		],
		[
			'title' => 'Waltz With Bashir',
			'caption' => '(2008)'
		],

		//	Musicians
		[ 'title' => 'Cab Calloway' ],
		[ 'title' => 'Cake' ],
		[ 'title' => 'Foo Fighters' ],
		[ 'title' => 'The Killers' ],
		[ 'title' => 'Queen' ],
		[ 'title' => 'Talking Heads' ],

		//	Other
		[ 'title' => 'Baltimore Orioles' ],
		[ 'title' => 'Vincent Van Gogh' ],
		[ 'title' => 'Pugs' ]
	]
);
include('view.php');
?>
