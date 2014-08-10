<?php
/**
* Plugin Name: Lightbox Galore
* Plugin URI: http://clearcrest.net/wp/
* Description: Highlights clicked images tagged with rel="lightbox"
* Author: clearcrest
* Version: 0.1
* Author URI: http://clearcrest.net
*/

# define( 'WP_DEBUG', true );
defined('ABSPATH') or die("No script kiddies please!");

/**
* Initialize
*/

function setLightboxGaloreStyle() {
    wp_register_style($handle = 'lightbox-galore-style', $src=plugins_url('/css/style.css', __FILE__));
    wp_enqueue_style('lightbox-galore-style');
}
add_action('wp_enqueue_scripts', 'setLightboxGaloreStyle');

function setLightboxGaloreScript() {
    wp_enqueue_script('jquery');
    wp_register_script($handle = 'lightbox-galore-script', $src = plugins_url('/js/lightbox-galore.js', __FILE__));
    wp_enqueue_script('lightbox-galore-script');
}
add_action('wp_enqueue_scripts', 'setLightboxGaloreScript');

/**
* Admin
*/

add_action('admin_menu', 'lightboxGaloreAdmin');

function lightboxGaloreAdmin() {
  add_options_page('Lightbox Galore Options', 'Lightbox Galore', 'manage_options', 'lightbox-galore-options', 'lightboxGaloreOptions');
}

function lightboxGaloreOptions() {
  if (!current_user_can('manage_options'))  {
    wp_die( __('You do not have sufficient permissions to access this page.') );
  }
  echo '<div id="lightbox-galore-admin"><h2>Lightbox Galore</h3><h3>Usage</h3>
  
  <p> &lt;img src="[image url]" <span style="color:red">rel="lightbox"</span> width="[display width]" /&gt; .</p><p>..or..</p><p>&lt;a href="[image url]" <span style="color:red">rel="lightbox"</span>&gt;&lt;img src="[image url]"  width="[display width]" /&gt;&lt;/a&gt;.</p></div>';	
}
 
?>