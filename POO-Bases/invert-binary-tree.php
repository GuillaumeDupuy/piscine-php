<?php

function invertTree(BinaryNode $node): BinaryNode {
	list($node->left, $node->right) = array($node->right, $node->left);
	if ($node->left && $node->right) {
		invertTree($node->left);
		invertTree($node->right);
	}
	return $node;
}
