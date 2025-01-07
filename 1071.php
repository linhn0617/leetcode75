<?php

/**
 * link:
 * https://leetcode.com/problems/greatest-common-divisor-of-strings/description/?envType=study-plan-v2&envId=leetcode-75
 * @description:
 * For two strings s and t, we say "t divides s" if and only if s = t + t + t + ... + t + t (i.e., t is concatenated with itself one or more times).
 * Given two strings str1 and str2, return the largest string x such that x divides both str1 and str2.
 */

class Solution
{

    /**
     * @param String $str1
     * @param String $str2
     * @return String
     */
    function gcdOfStrings($str1, $str2)
    {
        // 取得兩字串的長度，並取得最大公因數
        $str1Length = strlen($str1);
        $str2Length = strlen($str2);
        $substrLength = $this->gcd($str1Length, $str2Length);
        // 取出長度為最大公因數的子字串
        $substr = substr($str1, 0, $substrLength);
        // 確認是否兩字串皆為子字串所組成
        if ($str1 === str_repeat($substr, $str1Length / $substrLength) && $str2 === str_repeat($substr, $str2Length / $substrLength)) {
            return $substr;
        } else {
            return "";
        }
    }

    // 求最大公因數
    private function gcd($a, $b)
    {
        while ($b != 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }
        return $a;
    }
}
