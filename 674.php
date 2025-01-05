<?php

function findLongestIncreasingSubsequence(Array $nums) {

    $maxLength = 1;
    $currentLength = 1;
    for ($i = 1; $i < count($nums); $i++) {

        if ($nums[$i-1]<$nums[$i]) {
            $currentLength++;
        }else {
            $currentLength = 1;
        }
        $maxLength = max($maxLength, $currentLength);
    }

    return $maxLength;   
}

$answer = findLongestIncreasingSubsequence([1,3,5,4,7,9,10]);
echo $answer;