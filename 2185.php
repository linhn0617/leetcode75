<?php

/**
 * link:
 * https://leetcode.com/problems/counting-words-with-a-given-prefix/description/
 * description:
 * You are given an array of strings words and a string pref.
 * Return the number of strings in words that contain pref as a prefix.
 * A prefix of a string s is any leading contiguous substring of s.
 */

class Solution
{

    /**
     * @param String[] $words
     * @param String $pref
     * @return Integer
     */
    function prefixCount($words, $pref)
    {
        $count = 0;
        for ($i = 0; $i < count($words); $i++) {
            if (str_starts_with($words[$i], $pref)) {
                $count++;
            }
        }

        return $count;
    }
}
