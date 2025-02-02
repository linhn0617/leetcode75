<?php

/**
 * link:
 * https://leetcode.com/problems/most-common-word/description/
 * description:
 * Given a string paragraph and a string array of the banned words banned, return the most frequent word that is not banned. It is guaranteed there is at least one word that is not banned, and that the answer is unique.
 * The words in paragraph are case-insensitive and the answer should be returned in lowercase.
 */

class Solution
{

    /**
     * @param String $paragraph
     * @param String[] $banned
     * @return String
     */
    function mostCommonWord($paragraph, $banned)
    {
        // 轉換成小寫
        $paragraph = strtolower($paragraph);
        // 將特殊符號轉換成空格
        $paragraph = preg_replace("/[!?',;.]/", " ", $paragraph);
        // 轉換成陣列（將字串拆分為單字）
        $words = str_word_count($paragraph, 1);
        // 計算單字出現次數，並轉換成關聯陣列
        $wordCounts = array_count_values($words);

        // 移除禁用單字
        foreach ($banned as $bannedWord) {
            unset($wordCounts[$bannedWord]);
        }

        // 取得出現最多次的單字
        $maxCount = max($wordCounts);
        $mostFrequentWords = array_keys($wordCounts, $maxCount);

        // 回傳第一個出現最多次的單字
        return $mostFrequentWords[0];
    }
}
