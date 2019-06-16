<?php
namespace Trunk\Monolog\CustomLineFormatter;

use Monolog\Formatter\LineFormatter;
use Monolog\Logger;

class CustomLineFormatter extends LineFormatter {

	public function format( array $record ) {
		$output = parent::format( $record );

		if ( $record[ 'level' ] >= Logger::ERROR ) {
			$output = "<span style='color:red;font-weight: bold;'>" . $output .  "</span>";
		}
		elseif ( $record[ 'level' ] >= Logger::WARNING) {
			$output = "<span style='color:orangered;font-weight: bold;'>" . $output .  "</span>";
		}
		return $output;
	}
}
