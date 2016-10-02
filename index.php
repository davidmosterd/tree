<?php

require 'Nodes.php';
require 'Node.php';

$n = new \Tree\Nodes();
$n->create( 1 );
$n->create( 2, 1 );
$n->create( 3, 1 );
$n->create( 4, 3 );