<?php

/**
 * link:
 * https://leetcode.com/problems/reverse-integer/description/
 * description:
 * Given a signed 32-bit integer x, return x with its digits reversed. If reversing x causes the value to go outside the signed 32-bit integer range [-231, 231 - 1], then return 0.
 * Assume the environment does not allow you to store 64-bit integers (signed or unsigned).
 */

class Solution
{

    /**
     * @param Int $x
     * @return Int
     */
    function reverse($x)
    {
        // 將輸入整數進行絕對值後反轉
        $int = (int)strrev(abs($x));
        if ($x < 0) {
            $int *= -1;
        }
        // 判斷是否超出範圍，若超出則回傳0
        if ($int > 2 ** 31 - 1 || $int < -2 ** 31) {
            return 0;
        }
        return $int;
    }
}

$ans = (new Solution())->reverse(123);
echo $ans;
