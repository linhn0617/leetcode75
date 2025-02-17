<?php

/**
 * link:
 * https://leetcode.com/problems/count-pairs-of-similar-strings/
 * description:
 * You are given a 0-indexed string array words.
 * Two strings are similar if they consist of the same characters.
 * For example, "abca" and "cba" are similar since both consist of characters 'a', 'b', and 'c'.
 * However, "abacba" and "bcfd" are not similar since they do not consist of the same characters.
 * Return the number of pairs (i, j) such that 0 <= i < j <= word.length - 1 and the two strings words[i] and words[j] are similar.
 */

class Solution
{

    /**
     * @param String[] $words
     * @return Integer
     */
    function similarPairs($words)
    {
        // 初始化$pairs
        $pairs = 0;
        // 計算陣列長度
        $wordsLength = count($words);
        // 從索引0開始遍歷$words
        for ($i = 0; $i < $wordsLength; $i++) {
            // 取得當前字串的字母，並排序
            $commonKeys = array_unique(str_split($words[$i]));
            sort($commonKeys);
            // 從$i+1開始遍歷$words
            for ($j = $i + 1; $j < $wordsLength; $j++) {
                // 取得當前字串的字母，並排序
                $currentLetterKeys = array_unique(str_split($words[$j]));
                sort($currentLetterKeys);
                // 如果兩個字串的字母相同，則$pairs+1
                if ($commonKeys === $currentLetterKeys) {
                    $pairs++;
                }
            }
        }
        // 返回$pairs的值
        return $pairs;
    }
}
