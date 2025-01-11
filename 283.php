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
        $left = 0; // 指向要填充非零數字的位置

        for ($right = 0; $right < count($nums); $right++) {
            if ($nums[$right] != 0) {
                // 交換 nums[left] 和 nums[right]
                $temp = $nums[$left];
                $nums[$left] = $nums[$right];
                $nums[$right] = $temp;

                $left++; // 移動左指針
            }
        }
    }
}
