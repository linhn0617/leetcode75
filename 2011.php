<?php

/**
 * link:
 * https://leetcode.com/problems/final-value-of-variable-after-performing-operations/description/
 * description:
 * There is a programming language with only four operations and one variable X:
 * ++X and X++ increments the value of the variable X by 1.
 * --X and X-- decrements the value of the variable X by 1.
 * Initially, the value of X is 0.
 * Given an array of strings operations containing a list of operations, return the final value of X after performing all the operations.
 */

class Solution
{

    /**
     * @param String[] $operations
     * @return Integer
     */
    function finalValueAfterOperations($operations)
    {
        $x = 0;
        for ($i = 0; $i < count($operations); $i++) {
            if ($operations[$i] === "++X" || $operations[$i] === "X++") {
                $x++;
            } else {
                $x--;
            }
        }

        return $x;
    }
}
