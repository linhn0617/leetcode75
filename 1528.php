<?php

/**
 * link:
 * https://leetcode.com/problems/shuffle-string/description/
 * description:
 * You are given a string s and an integer array indices of the same length. The string s will be shuffled such that the character at the ith position moves to indices[i] in the shuffled string.
 * Return the shuffled string.
 */

class Solution
{

    /**
     * @param String $s
     * @param Integer[] $indices
     * @return String
     */
    function restoreString($s, $indices)
    {
        $ans = "";
        for ($i = 0; $i < strlen($s); $i++) {
            $ans[$indices[$i]] = $s[$i];
        }
        return $ans;
    }
}
