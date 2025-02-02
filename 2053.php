<?php

/**
 * link:
 * https://leetcode.com/problems/kth-distinct-string-in-an-array/description/
 * description:
 * A distinct string is a string that is present only once in an array.
 * Given an array of strings arr, and an integer k, return the kth distinct string present in arr. If there are fewer than k distinct strings, return an empty string "".
 * Note that the strings are considered in the order in which they appear in the array.
 */

class Solution
{

    /**
     * @param String[] $arr
     * @param Int $k
     * @return String  
     */
    function kthDistinct($arr, $k)
    {
        // 定義一個空陣列，用來存放不重複的字串
        $distinctWords = [];
        // 計算字串出現的次數
        $wordFrequency = array_count_values($arr);
        // 遍歷字串出現的次數，將只出現一次的字串存放到distinctWords陣列中
        foreach ($wordFrequency as $word => $frequency) {
            if ($frequency === 1) {
                $distinctWords[] = $word;
            }
        }

        return isset($distinctWords[$k - 1]) ? $distinctWords[$k - 1] : "";
    }
}
