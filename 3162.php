<?php

/**
 * link:
 * https://leetcode.com/problems/find-the-number-of-good-pairs-i/description/
 * description:
 * You are given 2 integer arrays nums1 and nums2 of lengths n and m respectively. You are also given a positive integer k.
 * A pair (i, j) is called good if nums1[i] is divisible by nums2[j] * k (0 <= i <= n - 1, 0 <= j <= m - 1).
 * Return the total number of good pairs.
 */

class Solution
{

    /**
     * @param Int[] $nums1
     * @param Int[] $nums2
     * @param Int $k
     * @return Int
     */
    function numberOfPairs($nums1, $nums2, $k)
    {
        // 計算兩個陣列的長度
        $n = count($nums1);
        $m = count($nums2);
        // 初始化答案計數器
        $ans = 0;
        // 雙重循環遍歷兩個陣列
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $m; $j++) {
                // 判斷是否正整除
                if ($nums1[$i] % ($nums2[$j] * $k) === 0) {
                    $ans++;
                }
            }
        }
        return $ans;
    }
}
