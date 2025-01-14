<?php

/**
 * link:
 * https://leetcode.com/problems/detect-capital/description/
 * description:
 * We define the usage of capitals in a word to be right when one of the following cases holds:
 * All letters in this word are capitals, like "USA".
 * All letters in this word are not capitals, like "leetcode".
 * Only the first letter in this word is capital, like "Google".
 * Given a string word, return true if the usage of capitals in it is right.
 */

class Solution
{

    /**
     * @param String $word
     * @return Boolean
     */
    function detectCapitalUse($word)
    {
        // 判斷是否全大寫
        if (ctype_upper($word)) {
            return TRUE;
            // 判斷是否全小寫
        } else if (ctype_lower($word)) {
            return TRUE;
            // 判斷是否只有首字母大寫，其他小寫
        } else if (ctype_upper($word[0]) && ctype_lower(substr($word, 1))) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
