<?php

/**
 * link:
 * https://leetcode.com/problems/maximum-average-subarray-i/description/?envType=study-plan-v2&envId=leetcode-75
 * description:
 * You are given an integer array nums consisting of n elements, and an integer k.
 * Find a contiguous subarray whose length is equal to k that has the maximum average value and return this value. Any answer with a calculation error less than 10-5 will be accepted.
 */

class Solution
{

    /**
     * @param Int[] $nums
     * @param Int $k
     * @return Float
     */
    function findMaxAverage($nums, $k)
    {
        // 計算前 k 個數字的總和
        $sum = array_sum(array_slice($nums, 0, $k));
        // 計算前 k 個數字的平均值
        $maxAverage = $sum / $k;
        // 計算陣列長度
        $kLength = count($nums);
        for ($i = $k; $i < $kLength; $i++) {
            // 移除 window 中最左邊的數字，加上最右邊的數字
            $sum += $nums[$i] - $nums[$i - $k];
            // 計算目前 window 的平均值
            $currentAverage = $sum / $k;
            // 更新最大平均值
            $maxAverage = max($maxAverage, $currentAverage);
        }

        return round($maxAverage, 5);
    }
}
