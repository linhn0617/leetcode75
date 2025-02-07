<?php

/**
 * link:
 * https://leetcode.com/problems/unique-morse-code-words/description/
 * description:
 * International Morse Code defines a standard encoding where each letter is mapped to a series of dots and dashes, as follows:
 * 'a' maps to ".-",
 * 'b' maps to "-...",
 * 'c' maps to "-.-.", and so on.
 * For convenience, the full table for the 26 letters of the English alphabet is given below:
 * [".-","-...","-.-.","-..",".","..-.","--.","....","..",".---","-.-",".-..","--","-.","---",".--.","--.-",".-.","...","-","..-","...-",".--","-..-","-.--","--.."]
 * Given an array of strings words where each word can be written as a concatenation of the Morse code of each letter.
 * For example, "cab" can be written as "-.-..--...", which is the concatenation of "-.-.", ".-", and "-...". We will call such a concatenation the transformation of a word.
 * Return the number of different transformations among all words we have.
 */

class Solution
{

    /**
     * @param String[] $words
     * @return Integer
     */
    function uniqueMorseRepresentations($words)
    {
        $morseTable = [
            ".-",
            "-...",
            "-.-.",
            "-..",
            ".",
            "..-.",
            "--.",
            "....",
            "..",
            ".---",
            "-.-",
            ".-..",
            "--",
            "-.",
            "---",
            ".--.",
            "--.-",
            ".-.",
            "...",
            "-",
            "..-",
            "...-",
            ".--",
            "-..-",
            "-.--",
            "--.."
        ];
        $transformations = [];
        foreach ($words as $word) {
            $morseWord = "";

            // 逐字母轉換
            for ($i = 0; $i < strlen($word); $i++) {
                $char = $word[$i];
                $morseWord .= $morseTable[ord($char) - ord('a')];
            }

            // 存入陣列
            $transformations[] = $morseWord;
        }

        // 回傳唯一摩斯密碼數量
        return count(array_unique($transformations));
    }
}
