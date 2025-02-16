<?php

/**
 * link:
 * https://leetcode.com/problems/maximum-value-of-a-string-in-an-array/description/
 * description:
 * The value of an alphanumeric string can be defined as:
 * The numeric representation of the string in base 10, if it comprises of digits only.
 * The length of the string, otherwise.
 * Given an array strs of alphanumeric strings, return the maximum value of any string in strs.
 */

class Solution
{

    /**
     * @param String[] $strs
     * @return Int
     */
    function maximumValue($strs)
    {
        // 初始化最大值
        $maxValue = 0;
        // 遍歷$strs
        foreach ($strs as $str) {
            // 判斷$str是否為數字，如果是則轉換為int，否則計算字串長度
            if (is_numeric($str)) {
                $currentValue = (int)$str;
            } else {
                $currentValue = strlen($str);
            }
            $maxValue = max($maxValue, $currentValue);
        }

        return $maxValue;
    }
}
