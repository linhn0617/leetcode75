<?php

/**
 * link:
 * https://leetcode.com/problems/destination-city/description/
 * description:
 * You are given the array paths, where paths[i] = [cityAi, cityBi] means there exists a direct path going from cityAi to cityBi. Return the destination city, that is, the city without any path outgoing to another city.
 * It is guaranteed that the graph of paths forms a line without any loop, therefore, there will be exactly one destination city.
 */


class Solution {

    /**
     * @param String[][] $paths
     * @return String
     */
    function destCity($paths) {
        $cityMap = [];

        // 將所有出發城市標記為 true
        foreach ($paths as $path) {
            $cityMap[$path[0]] = true;  // 出發城市，有 outgoing path
            if (!isset($cityMap[$path[1]])) {
                $cityMap[$path[1]] = false;  // 目的地城市，暫時標記為沒有 outgoing path
            }
        }

        // 遍歷 Hash Map 找出沒有 outgoing path 的城市
        foreach ($cityMap as $city => $hasOutgoing) {
            if (!$hasOutgoing) {
                return $city;
            }
        }
    }
}