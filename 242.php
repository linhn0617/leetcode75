<?php

/*
 * link: https://leetcode.com/problems/valid-anagram/description/
 * description:
 * Given two strings s and t, return true if t is an anagram of s, and false otherwise.
 */

 class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {
        if (strlen($s)!==(strlen($t))){
            return false;
        }
        $appearenceS = array_count_values(str_split($s));
        $appearenceT = array_count_values(str_split($t));

        return $appearenceS == $appearenceT;
    }
}