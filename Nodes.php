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
		return $this->iterate( $this->nodes, 0 );
	}

	/**
	 * Recursive function to iterate over the nodes
	 */
	protected function iterate( array $nodes, $parent = 0 ) {
		$tree = array();

		$i = 0;

		foreach ( $nodes as $v ) {
			if ( $v->parent == $parent ) {
				$tree[ $i ] = $v;
				$tree[ $i ]->sibblings = $this->iterate( $nodes, $v->id, $v->parent );

				$i++;
			}
		}

		return $tree;
	}



}