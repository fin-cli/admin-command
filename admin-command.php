<?php

if ( ! class_exists( 'FP_CLI' ) ) {
	return;
}

/**
 * Open /fp-admin/ in a browser.
 */
function fp_cli_admin_command() {
	switch ( strtoupper( substr( PHP_OS, 0, 3 ) ) ) {
		case 'DAR':
			$exec = 'open';
			break;
		case 'WIN':
			$exec = 'start ""';
			break;
		default:
			$exec = 'xdg-open';
	}
	passthru( $exec . ' ' . escapeshellarg( admin_url() ) );
}
FP_CLI::add_command( 'admin', 'fp_cli_admin_command' );
