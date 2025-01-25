<?php

/**
 * link:
 * https://leetcode.com/problems/count-the-number-of-consistent-strings/description/
 * description:
 * You are given a string allowed consisting of distinct characters and an array of strings words. A string is consistent if all characters in the string appear in the string allowed.
 * Return the number of consistent strings in the array words.
 */

class Solution
{

    /**
     * @param String $allowed
     * @param String[] $words
     * @return Integer
     */
    function countConsistentStrings($allowed, $words)
    {
        $count = 0;
        $wordsLength = count($words);

        for ($i = 0; $i < $wordsLength; $i++) {
            $word = $words[$i];
            $consistent = true;
            for ($j = 0; $j < strlen($word); $j++) {
                if (!str_contains($allowed, $word[$j])) {
                    $consistent = false;
                    break;
                }
            }

            if ($consistent) {
                $count++;
            }
        }

        return $count;
    }
}
