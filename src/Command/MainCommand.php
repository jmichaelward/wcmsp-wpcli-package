<?php
/**
 * Custom WP-CLI command for WordCamp Minneapolis-St. Paul.
 *
 * @package JMichaelWard\WCMSP
 * @since   1.0.0
 */

namespace JMichaelWard\WCMSP\Command;

/**
 * Class MainCommand
 *
 * @since 1.0.0
 */
class MainCommand extends \WP_CLI_Command {
	/**
	 * Prints a hello command to the attendees of my talk at WordCamp Minneapolis-St. Paul.
	 *
	 * @param array $args Command arguments.
	 * @since 1.0.0
	 * @when after_wp_load
	 */
	public function __invoke( $args ) {
		\WP_CLI::success( 'Hello WordCamp Minneapolis-St. Paul! You just installed a Composer package!' );
	}
}
