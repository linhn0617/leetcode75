<?php

/**
 * link:
 * https://leetcode.com/problems/search-in-a-binary-search-tree/description/?envType=study-plan-v2&envId=leetcode-75
 * description:
 * You are given the root of a binary search tree (BST) and an integer val.
 * Find the node in the BST that the node's value equals val and return the subtree rooted with that node. If such a node does not exist, return null.
 */

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution
{

    /**
     * @param TreeNode $root
     * @param Integer $val
     * @return TreeNode
     */
    function searchBST($root, $val)
    {
        // 如果節點為空或找到目標值，直接返回該節點
        if ($root === null || $root->val === $val) {
            return $root;
        }

        // 如果目標值小於當前節點值，搜尋左子樹
        if ($val < $root->val) {
            return $this->searchBST($root->left, $val);
        }

        // 如果目標值大於當前節點值，搜尋右子樹
        return $this->searchBST($root->right, $val);
    }
}
