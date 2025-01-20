<?php

/**
 * link:
 * https://leetcode.com/problems/unique-number-of-occurrences/description/?envType=study-plan-v2&envId=leetcode-75
 * description:
 * Given an array of integers arr, return true if the number of occurrences of each value in the array is unique or false otherwise.
 */

class Solution
{

    /**
     * @param Int[] $arr
     * @return Boolean
     */
    function uniqueOccurrences($arr)
    {
        // 使用 hash table 紀錄每個數字出現的次數
        $hashmap = [];
        foreach ($arr as $a) {
            // 如果數字已經存在，則次數加一; 否則新增一個 key
            if (isset($hashmap[$a])) {
                $hashmap[$a]++;
            } else {
                $hashmap[$a] = 1;
            }
        }
        // 檢查每個數字出現的次數
        $valueCounts = array_count_values($hashmap);
        foreach ($valueCounts as $value => $count) {
            if ($count > 1) {
                return false;
            }
        }
        return true;
    }
}
