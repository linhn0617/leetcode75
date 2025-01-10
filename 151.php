<?php

/**
 * link:
 * https://leetcode.com/problems/reverse-words-in-a-string/description/?envType=study-plan-v2&envId=leetcode-75
 * description:
 * Given an input string s, reverse the order of the words.
 * A word is defined as a sequence of non-space characters. The words in s will be separated by at least one space.
 * Return a string of the words in reverse order concatenated by a single space.
 * Note that s may contain leading or trailing spaces or multiple spaces between two words. The returned string should only have a single space separating the words. Do not include any extra spaces.
 */
class Solution
{

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s)
    {
        // 移除一個或多個連續的空白
        $s = trim(preg_replace('/\s+/', ' ', $s));
        // 依據空白將字串分割成單字陣列
        $words = explode(' ', $s);
        // 反轉陣列
        $reversedWords = array_reverse($words);
        // 以空白連接陣列
        $reversedString = implode(' ', $reversedWords);
        return $reversedString;
    }
}
