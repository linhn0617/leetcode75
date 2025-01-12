<?php

/**
 * link:
 * https://leetcode.com/problems/move-zeroes/description/?envType=study-plan-v2&envId=leetcode-75
 * description:
 * Given an integer array nums, move all 0's to the end of it while maintaining the relative order of the non-zero elements.
 * Note that you must do this in-place without making a copy of the array.
 */

class Solution
{

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(array $nums)
    {
        // 定義左指針初始位置為 0
        $left = 0;

        // 右指針從 0 開始遍歷陣列
        for ($right = 0; $right < count($nums); $right++) {
            // 如果右指針指向的數字不是 0，則將其填充到左指針指向的位置
            if ($nums[$right] != 0) {
                $temp = $nums[$left];
                $nums[$left] = $nums[$right];
                $nums[$right] = $temp;
                // 左指針右移
                $left++;
            }
        }
    }
}
