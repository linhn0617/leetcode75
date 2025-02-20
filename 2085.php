<?php

/**
 * link:
 * https://leetcode.com/problems/count-common-words-with-one-occurrence/description/
 * description:
 * Given two string arrays words1 and words2, return the number of strings that appear exactly once in each of the two arrays.
 */

class Solution
{

    /**
     * @param String[] $words1
     * @param String[] $words2
     * @return Integer
     */
    function countWords($words1, $words2)
    {
        $hash1 = array_count_values($words1);
        $hash2 = array_count_values($words2);

        $uniqueInBothArray = array_keys(array_filter($hash1, fn($count, $key) => $count === 1 && ($hash2[$key] ?? 0) === 1, ARRAY_FILTER_USE_BOTH));
        return count($uniqueInBothArray);
    }
}
