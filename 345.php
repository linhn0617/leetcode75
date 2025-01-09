<?php

/**
 * link:
 * https://leetcode.com/problems/reverse-vowels-of-a-string/description/?envType=study-plan-v2&envId=leetcode-75
 * description:
 * Given a string s, reverse only all the vowels in the string and return it.
 * The vowels are 'a', 'e', 'i', 'o', and 'u', and they can appear in both lower and upper cases, more than once.
 */
class Solution
{

    /**
     * @param String $s
     * @return String
     */
    function reverseVowels($s)
    {
        // 定義母音陣列
        $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
        // 定義字串長度，左指標和右指標
        $sLength = strlen($s);
        $i = 0;
        $j = $sLength - 1;
        // 左指標小於右指標時進行迴圈
        while ($i < $j) {
            // 左指標移動直到找到母音
            while ($i < $j && !in_array($s[$i], $vowels)) {
                $i++;
            }
            // 右指標移動直到找到母音
            while ($i < $j && !in_array($s[$j], $vowels)) {
                $j--;
            }
            // 交換左右指標的母音
            if ($i < $j) {
                $temp = $s[$i];
                $s[$i] = $s[$j];
                $s[$j] = $temp;
                $i++;
                $j--;
            }
        }

        return $s;
    }
}