<?php

/**
 * link:
 * https://leetcode.com/problems/number-of-strings-that-appear-as-substrings-in-word/description/
 * description:
 * Given an array of strings patterns and a string word, return the number of strings in patterns that exist as a substring in word.
 * A substring is a contiguous sequence of characters within a string.
 */

class Solution
{

    /**
     * @param String[] $patterns
     * @param String $word
     * @return Integer
     */
    function numOfStrings($patterns, $word)
    {
        // 初始化字串數為０
        $count = 0;
        // 遍歷$patterns陣列
        foreach ($patterns as $pattern) {
            // 判斷$pattern是否為$word的子字串
            if (str_contains($word, $pattern)) {
                $count++;
            }
        }

        return $count;
    }
}
