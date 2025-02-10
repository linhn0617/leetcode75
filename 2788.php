<?php

/**
 * link:
 * https://leetcode.com/problems/split-strings-by-separator/description/
 * description:
 * Given an array of strings words and a character separator, split each string in words by separator.
 * Return an array of strings containing the new strings formed after the splits, excluding empty strings.
 * Notes
 * separator is used to determine where the split should occur, but it is not included as part of the resulting strings.
 * A split may result in more than two strings.
 * The resulting strings must maintain the same order as they were initially given.
 */

class Solution
{

    /**
     * @param String[] $words
     * @param String $separator
     * @return String[]
     */
    function splitWordsBySeparator($words, $separator)
    {
        $ans = [];
        foreach ($words as $word) {
            $parts = explode($separator, $word);
            // 過濾掉空字串
            $filtered = array_filter($parts);

            // 將非空的結果加入到結果陣列中
            $ans = array_merge($ans, array_values($filtered));
        }

        return $ans;
    }
}
