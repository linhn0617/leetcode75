<?php

/**
 * link:
 * https://leetcode.com/problems/product-of-array-except-self/description/?envType=study-plan-v2&envId=leetcode-75
 * description:
 * Given an integer array nums, return an array answer such that answer[i] is equal to the product of all the elements of nums except nums[i].
 * The product of any prefix or suffix of nums is guaranteed to fit in a 32-bit integer.
 * You must write an algorithm that runs in O(n) time and without using the division operation.
 */

class Solution
{

    /**
     * @param int[] $nums
     * @return Array[]
     */
    function productExceptSelf(array $nums)
    {
        // 計算陣列長度
        $n = count($nums);
        // 定義結果陣列，並初始化為1
        $result = array_fill(0, $n, 1);

        // 計算從左側開始的乘積並更新結果陣列
        $leftProduct = 1;
        for ($i = 0; $i < $n; $i++) {
            $result[$i] = $leftProduct;
            $leftProduct *= $nums[$i];
        }

        // 計算從右側開始的乘積並更新結果陣列
        $rightProduct = 1;
        for ($i = $n - 1; $i >= 0; $i--) {
            $result[$i] *= $rightProduct;
            $rightProduct *= $nums[$i];
        }
        return $result;
    }
}
