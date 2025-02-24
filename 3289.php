<?php

/**
 * link:
 * https://leetcode.com/problems/the-two-sneaky-numbers-of-digitville/description/
 * description:
 * In the town of Digitville, there was a list of numbers called nums containing integers from 0 to n - 1. Each number was supposed to appear exactly once in the list, however, two mischievous numbers sneaked in an additional time, making the list longer than usual.
 * As the town detective, your task is to find these two sneaky numbers. Return an array of size two containing the two numbers (in any order), so peace can return to Digitville.
 */

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function getSneakyNumbers($nums)
    {
        // 初始化答案陣列
        $ans = [];
        // 計算每個數字出現的次數
        $countArray = array_count_values($nums);
        // 遍歷陣列找出出現次數為 2 的數字
        foreach ($countArray as $key => $value) {
            if ($value === 2) {
                $ans[] = $key;
            }
        }

        return $ans;
    }
}
