<?php

/*
* link:
* https://leetcode.com/problems/group-anagrams/description/
* description:
* Given an array of strings strs, group the anagrams together. You can return the answer in any order.
*/

class Solution {

    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupAnagrams($strs) {
        // 用於儲存已分組的 anagrams 
        $anagramGroups = [];

        // 遍歷每個字串
        foreach ($strs as $str) {
            // 將字串排序作為分組的鍵
            $sortedStr = str_split($str);
            sort($sortedStr);
            $key = implode('', $sortedStr);

            // 將字串加入對應的群組
            $anagramGroups[$key][] = $str;
        }

        // 回傳結果
        return array_values($anagramGroups);
    }
}