<?php

/**
 * link:
 * https://leetcode.com/problems/find-maximum-number-of-string-pairs/description/
 * description:
 * You are given a 0-indexed array words consisting of distinct strings.
 * The string words[i] can be paired with the string words[j] if:
 * The string words[i] is equal to the reversed string of words[j].
 * 0 <= i < j < words.length.
 * Return the maximum number of pairs that can be formed from the array words.
 * Note that each string can belong in at most one pair.
 */

class Solution {

    /**
     * @param String[] $words
     * @return Integer
     */
    function maximumNumberOfStringPairs($words) {
        $hash = []; // 用來存已出現的字串
        $pairs = 0;

        foreach ($words as $word) {
            if ($hash[strrev($word)]) {
                // 找到匹配的字串，形成一對
                $pairs++;
            } else {
                // 否則加入集合
                $hash[$word] = '1';
            }
        }

        return $pairs;
    }
}