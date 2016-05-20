<?php

define('VERSION','1.0.0');
define('HOME_URL',$_SERVER['REQUEST_URI']);

function get_home_uri()
{
	return HOME_URI;
}

function get_assets_uri()
{
	return HOME_URL.'assets';
}

function pre_print_r($s)
{
	?><pre><?php print_r($s); ?></pre><?php
}