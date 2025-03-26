<?php

/*
 * link:
 * https://leetcode.com/problems/two-sum/
 * description:
 * Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.
 * You may assume that each input would have exactly one solution, and you may not use the same element twice.
 * You can return the answer in any order.
 */

 class Solution {

    /**
     * @param Int[] $nums
     * @param Int $target
     * @return Int[]
     */
    function twoSum($nums, $target) {
        // 定義一個空關聯陣列來存放已經看過的數字
        $seen = [];
        // 遍歷 $nums 陣列
        for($i = 0;$i < count($nums);$i++){
            // 計算差值
            $diff = $target - $nums[$i];
            // 如果差值已經存在於 $seen 陣列中，則回傳差值的索引與目前索引
            if(isset($seen[$diff])){
                return [$seen[$diff],$i];
            }else{
                $seen[$nums[$i]] = $i;
            }
        }
    }
}