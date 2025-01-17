<?php

/**
 * link:
 * https://leetcode.com/problems/find-the-highest-altitude/description/?envType=study-plan-v2&envId=leetcode-75
 * description:
 * There is a biker going on a road trip. The road trip consists of n + 1 points at different altitudes. The biker starts his trip on point 0 with altitude equal 0.
 * You are given an integer array gain of length n where gain[i] is the net gain in altitude between points i​​​​​​ and i + 1 for all (0 <= i < n). Return the highest altitude of a point.
 */

class Solution
{

    /**
     * @param Int[] $gain
     * @return Int
     */
    function largestAltitude($gain)
    {
        // 定義最大高度
        $maxHeight = 0;
        // 定義當前高度
        $currentHeight = 0;
        // 計算 gain 陣列的長度
        $gainLength = count($gain);
        // 遍歷 gain 陣列
        for ($i = 0; $i < $gainLength; $i++) {
            $currentHeight += $gain[$i];
            $maxHeight = max($maxHeight, $currentHeight);
        }
        return $maxHeight;
    }
}
