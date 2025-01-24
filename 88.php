<?php

/**
 * link:
 * https://leetcode.com/problems/merge-sorted-array/description/?envType=study-plan-v2&envId=top-interview-150
 * description:
 * You are given two integer arrays nums1 and nums2, sorted in non-decreasing order, and two integers m and n, representing the number of elements in nums1 and nums2 respectively.
 * Merge nums1 and nums2 into a single array sorted in non-decreasing order.
 * The final sorted array should not be returned by the function, but instead be stored inside the array nums1. To accommodate this, nums1 has a length of m + n, where the first m elements denote the elements that should be merged, and the last n elements are set to 0 and should be ignored. nums2 has a length of n.
 */

class Solution
{

    /**
     * @param Integer[] $nums1
     * @param Int $m
     * @param Integer[] $nums2
     * @param Int $n
     * @return NULL
     */
    function merge($nums1, $m, $nums2, $n)
    {
        // 設置三個指針
        $i = $m - 1;  // 指向 $nums1 有效部分的尾部
        $j = $n - 1;  // 指向 $nums2 的尾部
        $k = $m + $n - 1;  // 指向合併後陣列的尾部

        // 合併兩個陣列，從尾部開始
        while ($i >= 0 && $j >= 0) {
            if ($nums1[$i] > $nums2[$j]) {
                $nums1[$k] = $nums1[$i];
                $i--;
            } else {
                $nums1[$k] = $nums2[$j];
                $j--;
            }
            $k--;
        }

        // 如果 $nums2 還有剩餘，繼續填充到 $nums1
        while ($j >= 0) {
            $nums1[$k] = $nums2[$j];
            $j--;
            $k--;
        }

        // 不需要處理 $nums1 的剩餘部分，因為它已經在正確的位置
    }
}
