<?php

/**
 * link:
 * https://leetcode.com/problems/count-prefixes-of-a-given-string/description/
 * description:
 * You are given a string array words and a string s, where words[i] and s comprise only of lowercase English letters.
 * Return the number of strings in words that are a prefix of s.
 * A prefix of a string is a substring that occurs at the beginning of the string. A substring is a contiguous sequence of characters within a string.
 */

class Solution {

    /**
     * @param String[] $words
     * @param String $s
     * @return Integer
     */
    function countPrefixes($words, $s) {
        // 初始化計數器
        $count = 0;
        // 遍歷字串陣列
        foreach($words as $word){
            // 判斷是否為前綴
            if(str_starts_with($s,$word)){
                $count++;
            }
        }
        return $count;
    }
}