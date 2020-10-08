<?php

include 'tree.class.php';
include 'knot.class.php';
include 'linear.class.php';

$linear = new Linear();
$linear->set_array(2.5);
$linear->set_array(3);
$linear->set_array(2);
// $linear->set_array(9);
// $linear->set_array(1);
$linear->print_array();
$el = 1;

$no1 = New No(2.5);
$arvore = New Arvore();

echo '<pre>';
$arvore->inserir($no1, 2);
$arvore->inserir($no1, 3);

require_once('shtml.php'); 