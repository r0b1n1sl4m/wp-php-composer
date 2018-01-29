<?php
use Carbon\Carbon;


class Shortcodes {

	public function __construct() {

		// Register shortcode
		add_shortcode( 'current_datetime', array ( $this, 'current_datetime_shortcode' ) );

	}


	/**
	* Current date time shortcode output handler.
	*
	* @return string Current date time.
	*/
	public function current_datetime_shortcode() {

		// Return current datetime
		return Carbon::now()->toDateTimeString();

	}

}