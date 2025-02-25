<?php

/**
 * link:
 * https://leetcode.com/problems/jewels-and-stones/description/
 * description:
 * You're given strings jewels representing the types of stones that are jewels, and stones representing the stones you have. Each character in stones is a type of stone you have. You want to know how many of the stones you have are also jewels.
 * Letters are case sensitive, so "a" is considered a different type of stone from "A".
 */

class Solution
{
    /**
     * @param String $jewels
     * @param String $stones
     * @return Integer
     */
    function numJewelsInStones($jewels, $stones)
    {
        // 初始化答案計數器
        $count = 0;
        // 將 jewels 轉換成 map
        $jewelsMap = [];
        // 遍歷 jewels 將每個字元設為 true
        for ($i = 0; $i < strlen($jewels); $i++) {
            $jewelsMap[$jewels[$i]] = true;
        }
        // 遍歷 stones
        for ($i = 0; $i < strlen($stones); $i++) {
            // 如果 jewelsMap 有對應的字元則計數器加一
            if (isset($jewelsMap[$stones[$i]])) {
                $count++;
            }
        }

        return $count;
    }
}
