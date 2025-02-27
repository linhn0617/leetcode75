<?php

/**
 * link:
 * https://leetcode.com/problems/how-many-numbers-are-smaller-than-the-current-number/description/
 * description:
 * Given the array nums, for each nums[i] find out how many numbers in the array are smaller than it. That is, for each nums[i] you have to count the number of valid j's such that j != i and nums[j] < nums[i].
 * Return the answer in an array.
 */

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function smallerNumbersThanCurrent($nums)
    {
        // 複製一份原始數組
        $sortNums = $nums;
        // 進行排序
        sort($sortNums);
        // 將原始數組的元素替換為排序後的索引
        for ($i = 0; $i < count($nums); $i++) {
            $nums[$i] = array_search($nums[$i], $sortNums);
        }
        return $nums;
    }
}
