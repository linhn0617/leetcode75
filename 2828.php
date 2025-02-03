<?php

/**
 * link:
 * https://leetcode.com/problems/check-if-a-string-is-an-acronym-of-words/description/
 * description:
 * Given an array of strings words and a string s, determine if s is an acronym of words.
 * The string s is considered an acronym of words if it can be formed by concatenating the first character of each string in words in order. For example, "ab" can be formed from ["apple", "banana"], but it can't be formed from ["bear", "aardvark"].
 * Return true if s is an acronym of words, and false otherwise.
 */

class Solution
{

    /**
     * @param String[] $words
     * @param String $s
     * @return Boolean
     */
    function isAcronym($words, $s)
    {
        // 定義縮寫空字串
        $acronym = "";
        //遍歷$words，將第一個字母加入$acronym
        foreach ($words as $word) {
            $acronym .= $word[0];
        }

        return $acronym === $s;
    }
}
