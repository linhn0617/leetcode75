<?php

/**
 * link:
 * https://leetcode.com/problems/longest-continuous-increasing-subsequence/description/
 * description:
 * Given an unsorted array of integers nums, return the length of the longest continuous increasing subsequence (i.e. subarray). The subsequence must be strictly increasing.
 * A continuous increasing subsequence is defined by two indices l and r (l < r) such that it is [nums[l], nums[l + 1], ..., nums[r - 1], nums[r]] and for each l <= i < r, nums[i] < nums[i + 1].
 */

function findLongestIncreasingSubsequence(array $nums)
{

    //定義最大遞增子陣列的長度為 1
    $maxLength = 1;
    //定義當前遞增子陣列的長度為 1
    $currentLength = 1;
    for ($i = 1; $i < count($nums); $i++) {
        // 如果當前元素大於前一個元素，遞增子陣列長度加 1，否則重置為 1
        if ($nums[$i - 1] < $nums[$i]) {
            $currentLength++;
        } else {
            $currentLength = 1;
        }
        // 更新最大遞增子陣列的長度
        $maxLength = max($maxLength, $currentLength);
    }

    return $maxLength;
}
