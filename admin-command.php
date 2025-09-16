<?php

if ( ! class_exists( 'FIN_CLI' ) ) {
	return;
}

/**
 * Open /fin-admin/ in a browser.
 */
function fin_cli_admin_command() {
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
FIN_CLI::add_command( 'admin', 'fin_cli_admin_command' );
