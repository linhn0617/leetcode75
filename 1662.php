<?php

/**
 * link:
 * https://leetcode.com/problems/check-if-two-string-arrays-are-equivalent/description/
 * description:
 * Given two string arrays word1 and word2, return true if the two arrays represent the same string, and false otherwise.
 * A string is represented by an array if the array elements concatenated in order forms the string.
 */

 class Solution {

    /**
     * @param String[] $word1
     * @param String[] $word2
     * @return Boolean
     */
    function arrayStringsAreEqual($word1, $word2) {
        return implode("",$word1) === implode("",$word2);
    }
}