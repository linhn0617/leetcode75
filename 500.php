<?php

/**
 * link:
 * https://leetcode.com/problems/keyboard-row/description/
 * description:
 * Given an array of strings words, return the words that can be typed using letters of the alphabet on only one row of American keyboard like the image below.
 * Note that the strings are case-insensitive, both lowercased and uppercased of the same letter are treated as if they are at the same row.
 * In the American keyboard:
 * the first row consists of the characters "qwertyuiop",
 * the second row consists of the characters "asdfghjkl", and
 * the third row consists of the characters "zxcvbnm".
 */

class Solution
{

    /**
     * @param String[] $words
     * @return String[]
     */
    function findWords($words)
    {
        // 初始化鍵盤每行的陣列
        $firstRowArray = ["q", "w", "e", "r", "t", "y", "u", "i", "o", "p"];
        $secondRowArray = ["a", "s", "d", "f", "g", "h", "j", "k", "l"];
        $thirdRowArray = ["z", "x", "c", "v", "b", "n", "m"];
        // 初始化答案的空陣列
        $ans = [];

        // 遍歷 $words 陣列
        foreach ($words as $word) {
            // 將每個 $word 字母轉換為小寫陣列
            $wordArray = str_split(strtolower($word));

            if (
                // 判斷 $wordArray 是否包含在 $firstRowArray、$secondRowArray、$thirdRowArray 之中
                array_diff($wordArray, $firstRowArray) === [] ||
                array_diff($wordArray, $secondRowArray) === [] ||
                array_diff($wordArray, $thirdRowArray) === []
            ) {
                $ans[] = $word;
            }
        }
        return $ans;
    }
}
