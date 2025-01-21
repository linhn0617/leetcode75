<?php

/**
 * link:
 * https://leetcode.com/problems/reverse-linked-list/?envType=study-plan-v2&envId=leetcode-75
 * description:
 * Given the head of a singly linked list, reverse the list, and return the reversed list.
 */

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution
{

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function reverseList($head)
    {
        $prev = null;
        $current = $head;

        while ($current !== null) {
            // 保存下一個節點
            $next = $current->next;
            // 反轉當前節點的指針
            $current->next = $prev;
            // prev 指針向前移動一步
            $prev = $current;
            // 將 current 指針向前移動一步
            $current = $next;
        }

        return $prev;
    }
}
