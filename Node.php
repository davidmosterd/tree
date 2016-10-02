<?php

namespace Tree;

class Node {

	private $parent;

	private $id;

	private $name;

	function __construct( $id, $parent = 0 ) {
		$this->id = $id;
		$this->parent = $parent;
	}

	public function __get( $key ) {
		$valid = [ 'id', 'parent' ];

		if ( ! in_array( $key, $valid ) ) {
			return false;
		}

		return $this->$key;
	}

	public function setName( $name ) {
		$this->name = $name;

		return $this;
	}

}