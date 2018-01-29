<?php
class Shortcodes {

	public function __construct() {

		// Register shortcode
		add_shortcode( 'hello_world', array( $this, 'hello_world_shortcode' ) );

	}


	/**
	* Hello World! shortcode handler.
	*/
	public function hello_world_shortcode() {

		return '<span style="color:red;">Hello World!</span>';

	}

}