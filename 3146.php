<?php

/**
 * link:
 * https://leetcode.com/problems/permutation-difference-between-two-strings/description/
 * description:
 * You are given two strings s and t such that every character occurs at most once in s and t is a permutation of s.
 * The permutation difference between s and t is defined as the sum of the absolute difference between the index of the occurrence of each character in s and the index of the occurrence of the same character in t.
 * Return the permutation difference between s and t.
 */

class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Integer
     */
    function findPermutationDifference($s, $t) {
        // 初始化 t 的字符索引映射
        $t_map = [];
    
        // 建立 t 的字符索引映射
        for ($i = 0; $i < strlen($t); $i++) {
            $t_map[$t[$i]] = $i;
        }
    
        $ans = 0;
    
        // 使用 s 中的字符直接查詢 t_map 並計算差異
        for ($i = 0; $i < strlen($s); $i++) {
            $ans += abs($i - $t_map[$s[$i]]);
        }
    
        return $ans;
    }
}