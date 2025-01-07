<?php
/**
 * link:
 * https://leetcode.com/problems/longest-continuous-increasing-subsequence/description/
 * description:
 * Given an unsorted array of integers nums, return the length of the longest continuous increasing subsequence (i.e. subarray). The subsequence must be strictly increasing.
 * A continuous increasing subsequence is defined by two indices l and r (l < r) such that it is [nums[l], nums[l + 1], ..., nums[r - 1], nums[r]] and for each l <= i < r, nums[i] < nums[i + 1].
 */

function findLongestIncreasingSubsequence(Array $nums) {

    $maxLength = 1;
    $currentLength = 1;
    for ($i = 1; $i < count($nums); $i++) {

        if ($nums[$i-1]<$nums[$i]) {
            $currentLength++;
        }else {
            $currentLength = 1;
        }
        $maxLength = max($maxLength, $currentLength);
    }

    return $maxLength;   
}

$answer = findLongestIncreasingSubsequence([1,3,5,4,7,9,10]);
echo $answer;