<?php 

/**
* belajar binary search tree
*/
class Bst
{
	
	public $root = null;

	public function addF($value)
	{
		$current = $this->root;

		if ($current == null) {
			return $this->root = $this->new($value);
		}

		foreach ($current as $cur) {
			
			if ($value < $current->value) {
				//left
				if ($current->left == null) {
					$current->left = $this->new($value);
					break;
				}
				else {
					$current = $current->left;
				}
			}
			else {
				//right
				if ($current->right == null) {
					$current->right = $this->new($value);
					break;
				}
				else {
					$current = $current->right;
				}
			}

		}
	}

	public function add($value)
	{

		$current = $this->root;

		if ($current == null) {
			// langsung return
			return $this->root = $this->new($value);
		}

		while ($current) {

			if ($value < $current->value) {

				// jika current->left engga kosong ,
				// oper nilai baru current->left ke var current
				// kalo kosong current->left , masukin value
				if ($current->left != null) {
					$current = $current->left;
				}else{
					$current->left = $this->new($value);
					break;		
				}

			}else{

				if ($current->right != null) {
					$current = $current->right;
				}else{
					$current->right = $this->new($value);
					break;		
				}
				
			}

			
		}
			
	}

	public function new($value)
	{
		$new->value = $value;
		$new->left = null;
		$new->right = null;

		return $new;
	}
}