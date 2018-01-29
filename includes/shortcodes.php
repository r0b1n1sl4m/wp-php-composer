<?php
use Carbon\Carbon;


class Shortcodes {

	public function __construct() {

		// Register shortcode
		add_shortcode( 'hello_world', array( $this, 'hello_world_shortcode' ) );
		add_shortcode( 'current_datetime', array ( $this, 'current_datetime_shortcode' ) );

	}


	/**
	* Hello World! shortcode handler.
	*/
	public function hello_world_shortcode() {

		return '<span style="color:red;">Hello World!</span><br/>';

	}

	public function current_datetime_shortcode() {

		// Return current datetime
		return Carbon::now()->toDateTimeString();

	}

}