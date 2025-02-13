<?php

/**
 * link:
 * https://leetcode.com/problems/find-common-characters/description/
 * description:
 * Given a string array words, return an array of all characters that show up in all strings within the words (including duplicates). You may return the answer in any order.
 */

class Solution
{

    /**
     * @param String[] $words
     * @return String[]
     */
    function commonChars($words)
    {
        // 計算第一個字串中出現的字母數量，作為初始的共同字母集合
        $common = array_count_values(str_split($words[0]));

        // 遍歷每個字串
        foreach ($words as $word) {

            // 計算當前字串中出現的字母數量
            $split = array_count_values(str_split($word));

            // 建立空陣列，用來儲存當前字串與共同字母集合的交集
            $new_set = [];

            //遍歷當前字串的字母和次數
            foreach ($split as $key => $value) {

                // 如果該字母存在於共同字母集合中，取兩者的最小出現次數
                if (isset($common[$key])) {
                    $new_set[$key] = min($value, $common[$key]);
                }
            }
            // 更新共同字母集合，只保留在所有字串中都出現的字母及其最少出現次數
            $common = $new_set;
        }
        // 將最終的共同字母集合轉換為陣列，依據出現次數重複加入字母
        $ans = [];
        foreach ($common as $key => $value) {
            for ($x = 0; $x < $value; $x++) {
                $ans[] = $key;
            }
        }
        return $ans;
    }
}
