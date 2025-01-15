<?php

/**
 * link:
 * https://leetcode.com/problems/valid-palindrome/description/
 * description:
 * A phrase is a palindrome if, after converting all uppercase letters into lowercase letters and removing all non-alphanumeric characters, it reads the same forward and backward. Alphanumeric characters include letters and numbers.
 * Given a string s, return true if it is a palindrome, or false otherwise.
 */

class Solution
{

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s)
    {
        // 將大寫字母轉為小寫
        $sLower = strtolower($s);
        // for迴圈去遍歷$s並取出全部字母
        $sLength = strlen($sLower);
        $ans = '';
        for ($i = 0; $i < $sLength; $i++) {
            if (ctype_alpha($sLower[$i]) || is_numeric($sLower[$i])) {
                $ans .= $sLower[$i];
            }
        }
        // 比對原本的$s與反轉後的$s是否相同
        return $ans === strrev($ans);
    }
}
