<?php
class Solution
{
    /**
     * @param String $word1
     * @param String $word2
     * @return String
     */
    function mergeAlternately($word1, $word2)
    {
        $ans = "";
        $len1 = strlen($word1);
        $len2 = strlen($word2);
        $n = min($len1, $len2);

        for ($i = 0; $i < $n; $i++) {
            $ans .= $word1[$i] . $word2[$i];
        }
        if ($len1 == $len2) {
            return $ans;
        } else if ($len1 > $len2) {
            return $ans . substr($word1, $n);
        } else {
            return $ans . substr($word2, $n);
        }
    }
}

/**
class Solution {

    function mergeAlternately($word1, $word2) 
    {
        if (strlen($word1) >= strlen($word2)) {
            return $this->createMergedString($word1, $word2, strlen($word1));
        }
        return $this->createMergedString($word1, $word2, strlen($word2));
    }

    function createMergedString($firstWord, $secondWord, $count) 
    {
        $result = '';
        $firstWordArray = str_split($firstWord);
        $secondWordArray = str_split($secondWord);

        for($i = 0; $i < $count; $i++) {
            $result .= $firstWordArray[$i] ?? null;
            $result .= $secondWordArray[$i] ?? null;
        }
        return $result;
    }
}
*/
