<?php

namespace Tree;

class Nodes {

	private $nodes;

	public function __construct() {
		$this->nodes = [];
	}

	public function create( $id, $parent = 0 ) {
		$node = new Node( $id, $parent );

		$this->add( $node );

		return $node;
	}

	public function add( Node $node ) {
		$this->nodes[] = $node;

		return $this;
	}

	public function build() {
		// todo: make first call to self::iterate here
	}

	/**
	 * Recursive function to iterate over the nodes
	 */
	protected function iterate( $nodes, $parent ) {

	}

}