<?php  

	require('vendor/autoload.php');
	require('Bst.php');

	$bst = new Bst();
	
	$bst->addF(5);
	$bst->addF(3);
	$bst->addF(7);
	$bst->addF(1);
	$bst->addF(4);
	$bst->addF(6);
	$bst->addF(8);
	$bst->addF(9);

	// $bst->add(5);
	// $bst->add(3);
	// $bst->add(7);
	// $bst->add(1);
	// $bst->add(6);
	// $bst->add(1);
	dd($bst);