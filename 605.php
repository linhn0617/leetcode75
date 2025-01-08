<?php

/**
 * link:
 * https://leetcode.com/problems/can-place-flowers/?envType=study-plan-v2&envId=leetcode-75
 * description:
 * You have a long flowerbed in which some of the plots are planted, and some are not. However, flowers cannot be planted in adjacent plots.
 * Given an integer array flowerbed containing 0's and 1's, where 0 means empty and 1 means not empty, and an integer n, return true if n new flowers can be planted in the flowerbed without violating the no-adjacent-flowers rule and false otherwise.
 */
class Solution
{

    /**
     * @param Array $flowerbed
     * @param Int $n
     * @return Boolean
     */
    function canPlaceFlowers($flowerbed, $n)
    {
        // 計算花朵陣列長度，並計算可以放置的花朵數量
        $flowerbedLength = count($flowerbed);
        $canPlaceFlowersNum = 0;
        for ($i = 0; $i < $flowerbedLength; $i++) {
            // 檢查當前位置是否為空
            if ($flowerbed[$i] == 0) {
                // 檢查前一個位置，如果為空則為0
                $prev = ($i == 0) ? 0 : $flowerbed[$i - 1];
                // 檢查後一個位置，如果為空則為0
                $next = ($i == $flowerbedLength - 1) ? 0 : $flowerbed[$i + 1];

                // 如果前一個位置和後一個位置都為空，放置花朵並將可以放置的花朵數量加1
                if ($prev == 0 && $next == 0) {
                    $flowerbed[$i] = 1;
                    $canPlaceFlowersNum++;
                }
            }
        }
        return $canPlaceFlowersNum >= $n;
    }
}
