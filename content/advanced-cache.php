<?php
defined( 'ABSPATH' ) or die( 'Cheatin\' uh?' );

define( 'WP_ROCKET_ADVANCED_CACHE', true );
$rocket_cache_path = 'D:\php\htdocs\hostbybest.dev/content/cache/wp-rocket/';
$rocket_config_path = 'D:\php\htdocs\hostbybest.dev/content/wp-rocket-config/';

if ( file_exists( 'D:\php\htdocs\hostbybest.dev\content\plugins\wp-rocket\inc\front/process.php' ) ) {
	include( 'D:\php\htdocs\hostbybest.dev\content\plugins\wp-rocket\inc\front/process.php' );
} else {
	define( 'WP_ROCKET_ADVANCED_CACHE_PROBLEM', true );
}