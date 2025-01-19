<?php

/**
 * link:
 * https://leetcode.com/problems/find-the-difference-of-two-arrays/solutions/3482608/php-easy-solution-beats-100-runtime/?envType=study-plan-v2&envId=leetcode-75
 * description:
 * Given two 0-indexed integer arrays nums1 and nums2, return a list answer of size 2 where:
 * answer[0] is a list of all distinct integers in nums1 which are not present in nums2.
 * answer[1] is a list of all distinct integers in nums2 which are not present in nums1.
 * Note that the integers in the lists may be returned in any order.
 */

class Solution
{

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[][]
     */
    function findDifference($nums1, $nums2)
    {
        // 使用 array_flip 將陣列轉換為 hash table，提升查詢效率
        $hash1 = array_flip($nums1);
        $hash2 = array_flip($nums2);
        // 定義初始答案陣列
        $ans1 = [];
        $ans2 = [];

        // 檢查 nums1 中的數字是否存在於 nums2
        foreach ($hash1 as $num => $value) {
            if (!isset($hash2[$num])) {
                $ans1[] = $num;
            }
        }
        // 檢查 nums2 中的數字是否存在於 nums1
        foreach ($hash2 as $num => $value) {
            if (!isset($hash1[$num])) {
                $ans2[] = $num;
            }
        }

        return [$ans1, $ans2];
    }
}
