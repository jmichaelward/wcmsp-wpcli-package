<?php
/**
 * Bootstrap file for custom WP-CLI commands for WordCamp Minneapolis-St. Paul.
 *
 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @package JMichaelWard\WCMSP
 * @since 1.0.0
 */

if ( ! defined( '\WP_CLI' ) ) {
	return;
}

\WP_CLI::add_command( 'wcmsp', \JMichaelWard\WCMSP\Command\MainCommand::class );
