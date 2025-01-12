<?php

/**
 * link:
 * https://leetcode.com/problems/is-subsequence/description/?envType=study-plan-v2&envId=leetcode-75
 * description:
 * Given two strings s and t, return true if s is a subsequence of t, or false otherwise.
 * A subsequence of a string is a new string that is formed from the original string by deleting some (can be none) of the characters without disturbing the relative positions of the remaining characters. (i.e., "ace" is a subsequence of "abcde" while "aec" is not).
 */

 class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isSubsequence($s, $t) {
        // 定義左右指針指向兩字串的位置0
        $left = 0;
        $right = 0;
        //計算兩個字串的長度
        $sLength = strlen($s);
        $tLength = strlen($t);
        while($left<$sLength && $right<$tLength){
            // 當兩個字串中的字母配對時，雙指針同時遞增，沒配對時則單純增加右指針
            if($s[$left]== $t[$right]){
                $left++;
                $right++;
            }else{
                $right++;
            }
        }
        //當遍歷結束後，若是左指針大小等於子字串長度，代表$s為$t的子字串
        if($left == $sLength){
            return true;
        }else{
            return false;
        }
    }
}