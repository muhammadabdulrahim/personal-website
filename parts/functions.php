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