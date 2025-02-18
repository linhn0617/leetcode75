<?php

/**
 * link:
 * https://leetcode.com/problems/shortest-distance-to-a-character/description/
 * description:
 * Given a string s and a character c that occurs in s, return an array of integers answer where answer.length == s.length and answer[i] is the distance from index i to the closest occurrence of character c in s.
 * The distance between two indices i and j is abs(i - j), where abs is the absolute value function.
 */

class Solution
{

    /**
     * @param String $s
     * @param String $c
     * @return Int[]
     */
    function shortestToChar($s, $c)
    {
        // 計算字串$s長度
        $sLength = strlen($s);
        // 初始化答案的陣列
        $ans = array_fill(0, $sLength, $sLength);
        // 定義左右指針的初始位置
        $left = -$sLength;
        $right = 2 * $sLength;

        // 第一次遍歷（從左到右）：計算距離左邊最近的 $c
        for ($i = 0; $i < $sLength; $i++) {
            if ($s[$i] == $c) {
                $left = $i;
            }
            $ans[$i] = abs($i - $left);
        }

        // 第二次遍歷（從右到左）：計算距離右邊最近的 $c
        for ($i = $sLength - 1; $i >= 0; $i--) {
            if ($s[$i] == $c) {
                $right = $i;
            }
            // 取最小值
            $ans[$i] = min($ans[$i], abs($i - $right));
        }

        return $ans;
    }
}
