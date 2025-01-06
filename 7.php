<?php
class Solution {

    /**
     * @param Int $x
     * @return Int
     */
    function reverse($x) {
        // 將整數反轉
        $int = (int)strrev(abs($x));
        if ($x < 0) {
            $int *= -1;
        }
        // 判斷是否超出範圍，若超出則回傳0
        if ($int > 2**31-1 || $int < -2**31) {
            return 0;
        }
        return $int;
    }
}

$ans = (new Solution())->reverse(123);
echo $ans;