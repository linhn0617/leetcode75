<?php

/**
 * link:
 * https://leetcode.com/problems/count-the-number-of-vowel-strings-in-range/description/
 * description:
 * You are given a 0-indexed array of string words and two integers left and right.
 * A string is called a vowel string if it starts with a vowel character and ends with a vowel character where vowel characters are 'a', 'e', 'i', 'o', and 'u'.
 * Return the number of vowel strings words[i] where i belongs to the inclusive range [left, right].
 */

class Solution
{

    /**
     * @param String[] $words
     * @param Int $left
     * @param Int $right
     * @return Int
     */
    function vowelStrings($words, $left, $right)
    {
        // 初始化計數器
        $count = 0;
        // 定義母音
        $vowels = ['a', 'e', 'i', 'o', 'u'];
        // 遍歷指定範圍
        for ($i = $left; $i <= $right; $i++) {
            // 取得字串
            $word = $words[$i];
            if (in_array($word[0], $vowels) && in_array($word[-1], $vowels)) {
                $count++;
            }
        }
        return $count;
    }
}
