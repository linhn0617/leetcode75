<?php

/**
 * link:
 * https://leetcode.com/problems/maximum-number-of-words-found-in-sentences/description/
 * description:
 * A sentence is a list of words that are separated by a single space with no leading or trailing spaces.
 * You are given an array of strings sentences, where each sentences[i] represents a single sentence.
 * Return the maximum number of words that appear in a single sentence.
 */

class Solution
{

    /**
     * @param String[] $sentences
     * @return Integer
     */
    function mostWordsFound($sentences)
    {
        $currentWords = 0;
        $maxWords = 0;
        for ($i = 0; $i < count($sentences); $i++) {
            $currentWords = substr_count($sentences[$i], " ") + 1;
            $maxWords = max($maxWords, $currentWords);
        }
        return $maxWords;
    }
}
