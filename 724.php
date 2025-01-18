<?php

/**
 * link:
 * https://leetcode.com/problems/find-pivot-index/?envType=study-plan-v2&envId=leetcode-75
 * description:
 * Given an array of integers nums, calculate the pivot index of this array.
 * The pivot index is the index where the sum of all the numbers strictly to the left of the index is equal to the sum of all the numbers strictly to the index's right.
 * If the index is on the left edge of the array, then the left sum is 0 because there are no elements to the left. This also applies to the right edge of the array.
 * Return the leftmost pivot index. If no such index exists, return -1.
 */

class Solution
{

    /**
     * @param Int[] $nums
     * @return Int
     */
    function pivotIndex($nums)
    {
        // 計算陣列長度
        $numsLength = count($nums);
        //定義初始化左邊總和
        $sumLeft = 0;
        //定義初始化右邊總和
        $sumRight = array_sum($nums);
        for ($i = 0; $i < $numsLength; $i++) {
            // 右邊總和移除目前數字
            $sumRight -= $nums[$i];
            // 檢查左右總和是否相等
            if ($sumLeft === $sumRight) {
                return $i;
            }
            // 左邊總和加上目前數字
            $sumLeft += $nums[$i];
        }

        return -1;
    }
}
