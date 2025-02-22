<?php

/**
 * link:
 * https://leetcode.com/problems/number-of-good-pairs/
 * description:
 * Given an array of integers nums, return the number of good pairs.
 * A pair (i, j) is called good if nums[i] == nums[j] and i < j.
 */

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function numIdenticalPairs($nums)
    {
        // 計算每個數字出現的次數
        $count = array_count_values($nums);
        // 初始化答案
        $ans = 0;
        // 計算答案
        foreach ($count as $key => $value) {
            $ans += $value * ($value - 1) / 2;
        }
        return $ans;
    }
}
