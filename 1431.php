<?php

/**
 * link:
 * https://leetcode.com/problems/kids-with-the-greatest-number-of-candies/?envType=study-plan-v2&envId=leetcode-75
 * description:
 * There are n kids with candies. You are given an integer array candies, where each candies[i] represents the number of candies the ith kid has, and an integer extraCandies, denoting the number of extra candies that you have.
 * Return a boolean array result of length n, where result[i] is true if, after giving the ith kid all the extraCandies, they will have the greatest number of candies among all the kids, or false otherwise.
 * Note that multiple kids can have the greatest number of candies.
 */

class Solution
{

    /**
     * @param Array $candies
     * @param Int $extraCandies
     * @return Boolean[]
     */
    function kidsWithCandies($candies, $extraCandies)
    {
        $result = [];
        $maxCandies = max($candies);
        $candiesLength = count($candies);
        for ($i = 0; $i < $candiesLength; $i++) {
            if ($candies[$i] + $extraCandies >= $maxCandies) {
                $result[] = true;
            } else {
                $result[] = false;
            }
        }
        return $result;
    }
}
