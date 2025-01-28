<?php

/**
 * link:
 * https://leetcode.com/problems/find-words-containing-character/description/
 * description:
 * You are given a 0-indexed array of strings words and a character x.
 * Return an array of indices representing the words that contain the character x.
 * Note that the returned array may be in any order.
 */

class Solution
{

    /**
     * @param String[] $words
     * @param String $x
     * @return Integer[]
     */
    function findWordsContaining($words, $x)
    {
        $ans = [];
        for ($i = 0; $i < count($words); $i++) {
            if (str_contains($words[$i], $x)) {
                $ans[] = $i;
            }
        }

        return $ans;
    }
}
