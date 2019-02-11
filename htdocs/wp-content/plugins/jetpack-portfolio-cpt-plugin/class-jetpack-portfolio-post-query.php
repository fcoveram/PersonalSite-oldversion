<?php

use Queulat\Post_Query;

class Jetpack_Portfolio_Post_Query extends Post_Query {
	public function get_post_type() : string {
		return 'jetpack-portfolio';
	}
	public function get_decorator() : string {
		return Jetpack_Portfolio_Post_Object::class;
	}
	public function get_default_args() : array {
		return [];
	}
}
