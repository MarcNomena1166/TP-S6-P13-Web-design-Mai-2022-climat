
 <?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	if ( ! function_exists('css_url')) {
	function css_url($nom)
{
	return base_url() . 'assets/css/css/' . $nom . '.css';
}
function bootstrap_url($nom)
{
	return base_url() . 'assets/css/vendor/bootstrap/css/' . $nom . '.css';
	
}
}
if ( ! function_exists('image_url')) {
	function image_url($nom)
	{
		return base_url() . 'assets/images/'. $nom;		
	}
}
if ( ! function_exists('jquery_url')) {
	function jquery_url()
	{
		return site_url("assets/css/vendor/jquery/jquery.min.js");		
	}
}
if ( ! function_exists('bootstrap_js_url')) {
	function bootstrap_js_url()
	{
		return site_url("assets/css/vendor/bootstrap/js/bootstrap.bundle.min.js");		
	}
}
 