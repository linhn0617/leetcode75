<?php

/**
 * link:
 * https://leetcode.com/problems/count-prefix-and-suffix-pairs-i/description/
 * description:
 * You are given a 0-indexed string array words.
 * Let's define a boolean function isPrefixAndSuffix that takes two strings, str1 and str2:
 * isPrefixAndSuffix(str1, str2) returns true if str1 is both a prefixand a suffix of str2, and false otherwise.
 * For example, isPrefixAndSuffix("aba", "ababa") is true because "aba" is a prefix of "ababa" and also a suffix, but isPrefixAndSuffix("abc", "abcd") is false.
 * Return an integer denoting the number of index pairs (i, j) such that i < j, and isPrefixAndSuffix(words[i], words[j]) is true.
 */

class Solution
{

    /**
     * @param String[] $words
     * @return Integer
     */
    function countPrefixSuffixPairs($words)
    {
        // 初始化計數器
        $count = 0;
        // 獲取陣列長度
        $wordsLength = count($words);

        for ($i = 0; $i < $wordsLength; $i++) {
            for ($j = $i + 1; $j < $wordsLength; $j++) {
                if ($this->isPrefixAndSuffix($words[$i], $words[$j])) {
                    $count++;
                }
            }
        }

        return $count;
    }

    /**
     * @param String $str1
     * @param String $str2
     * @return Boolean
     */
    private function isPrefixAndSuffix($str1, $str2)
    {
        $str1Length = strlen($str1);
        $str2Length = strlen($str2);

        // 如果 str1 長度大於 str2，直接返回 false
        if ($str1Length > $str2Length) {
            return false;
        }
        return str_starts_with($str2, $str1) && str_ends_with($str2, $str1);
    }
}
