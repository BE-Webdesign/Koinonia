<?php
/**
 * Main entry point for the application.
 *
 * @package Koinonia
 */

namespace Koinonia;

echo 'Loaded' . PHP_EOL;

function values( $array ) {
	$i = 0;

	return function ( $abort, $cb ) use ( &$i, $array ) {
		if ( $abort ) {
			return $cb( $abort );
		}

		return $cb( $i >= count( $array ) ? true : null, isset( $array[ $i ] ) ? $array[ $i++ ] : null );
	};
}

function log () {
	return function ( $read ) {
		$next = function ( $end, $data ) use ( $read, &$next ) {
			if ( $end == true ) {
				return;
			} else if ( $end ) {
				throw $end; // error.
			}
		
			echo print_r( $data, true ) . PHP_EOL;
		
			$read( null, $next ); // loop again.
		};

    	$read( null, $next );
	};
}

log()( values( [ 1, 2, 3, 4, 5 ] ) );
