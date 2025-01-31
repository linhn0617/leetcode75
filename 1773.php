<?php

/**
 * link:
 * https://leetcode.com/problems/count-items-matching-a-rule/description/
 * description:
 * You are given an array items, where each items[i] = [typei, colori, namei] describes the type, color, and name of the ith item. You are also given a rule represented by two strings, ruleKey and ruleValue.
 * The ith item is said to match the rule if one of the following is true:
 * ruleKey == "type" and ruleValue == typei.
 * ruleKey == "color" and ruleValue == colori.
 * ruleKey == "name" and ruleValue == namei.
 * Return the number of items that match the given rule.
 */

class Solution
{

    /**
     * @param String[][] $items
     * @param String $ruleKey
     * @param String $ruleValue
     * @return Integer
     */
    function countMatches($items, $ruleKey, $ruleValue)
    {
        // 定義初始化計數器
        $count = 0;
        // 判斷 ruleKey 的值，並轉換成對應的 index
        if ($ruleKey === "type") {
            $ruleKey = 0;
        } else if ($ruleKey === "color") {
            $ruleKey = 1;
        } else {
            $ruleKey = 2;
        }

        // 遍歷 items 陣列，判斷是否符合規則
        foreach ($items as $item) {
            if ($item[$ruleKey] === $ruleValue) {
                $count++;
            }
        }
        return $count;
    }
}
