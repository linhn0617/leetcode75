<?php

/**
 * link:
 * https://leetcode.com/problems/sort-the-people/description/
 * description:
 * You are given an array of strings names, and an array heights that consists of distinct positive integers. Both arrays are of length n.
 * For each index i, names[i] and heights[i] denote the name and height of the ith person.
 * Return names sorted in descending order by the people's heights.
 */

class Solution
{

    /**
     * @param String[] $names
     * @param Integer[] $heights
     * @return String[]
     */
    function sortPeople($names, $heights)
    {
        //將兩個陣列轉換為關聯陣列
        $associativeArray = array_combine($heights, $names);
        //將關聯陣列透過key值進行降序排列
        krsort($associativeArray);
        // 將關聯陣列的value取出(原本的$names陣列)
        return array_values($associativeArray);
    }
}
