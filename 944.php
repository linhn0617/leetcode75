<?php

/**
 * link:
 * https://leetcode.com/problems/delete-columns-to-make-sorted/description/
 * description:
 * You are given an array of n strings strs, all of the same length.
 * The strings can be arranged such that there is one on each line, making a grid.
 * For example, strs = ["abc", "bce", "cae"] can be arranged as follows:
 * You want to delete the columns that are not sorted lexicographically. In the above example (0-indexed), columns 0 ('a', 'b', 'c') and 2 ('c', 'e', 'e') are sorted, while column 1 ('b', 'c', 'a') is not, so you would delete column 1.
 * Return the number of columns that you will delete.
 */

class Solution
{

    /**
     * @param String[] $strs
     * @return Integer
     */
    function minDeletionSize($strs)
    {
        // 初始化不符合條件的計數器
        $count = 0;
        // 取得陣列長度
        $arrayCount = count($strs);
        // 取得字串長度
        $stringLength = strlen($strs[0]);

        // 遍歷每個字元
        for ($i = 0; $i < $stringLength; $i++) {
            // 遍歷每個字串
            for ($j = 1; $j < $arrayCount; $j++) {
                // 如果當前字元小於前一個字元，則計數器加一
                if ($strs[$j][$i] < $strs[$j - 1][$i]) {
                    $count++;
                    break;
                }
            }
        }
        return $count;
    }
}
