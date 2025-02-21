<?php

/**
 * link:
 * https://leetcode.com/problems/maximum-difference-between-even-and-odd-frequency-i/description/
 * description:
 * You are given a string s consisting of lowercase English letters. Your task is to find the maximum difference between the frequency of two characters in the string such that:
 * One of the characters has an even frequency in the string.
 * The other character has an odd frequency in the string.
 * Return the maximum difference, calculated as the frequency of the character with an odd frequency minus the frequency of the character with an even frequency.
 */

class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function maxDifference($s)
    {
        // 計算字母出現次數
        $letterFrequency = array_count_values(str_split($s));
        // 分成奇數次與偶數次的字母陣列
        $oddFrequencyLetter = [];
        $evenFrequencyLetter = [];
        // 遍歷關聯陣列並根據字母出現次數分類
        foreach ($letterFrequency as $key => $value) {
            if ($value % 2 === 0) {
                $evenFrequencyLetter[$key] = $value;
            } else {
                $oddFrequencyLetter[$key] = $value;
            }
        }

        return max($oddFrequencyLetter) - min($evenFrequencyLetter);
    }
}
