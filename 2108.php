<?php

/**
 * link:
 * https://leetcode.com/problems/find-first-palindromic-string-in-the-array/description/
 * description:
 * Given an array of strings words, return the first palindromic string in the array. If there is no such string, return an empty string "".
 * A string is palindromic if it reads the same forward and backward.
 */

class Solution
{

    /**
     * @param String[] $words
     * @return String
     */
    function firstPalindrome($words)
    {
        foreach ($words as $word) {
            if ($word === strrev($word)) {
                return $word;
            }
        }
        return "";
    }
}
