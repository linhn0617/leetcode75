<?php

/**
 * link:
 * https://leetcode.com/problems/snake-in-matrix/description/
 * description:
 * There is a snake in an n x n matrix grid and can move in four possible directions. Each cell in the grid is identified by the position: grid[i][j] = (i * n) + j.
 * The snake starts at cell 0 and follows a sequence of commands.
 * You are given an integer n representing the size of the grid and an array of strings commands where each command[i] is either "UP", "RIGHT", "DOWN", and "LEFT". It's guaranteed that the snake will remain within the grid boundaries throughout its movement.
 * Return the position of the final cell where the snake ends up after executing commands.
 */

class Solution
{

    /**
     * @param Int $n
     * @param String[] $commands
     * @return Int
     */
    function finalPositionOfSnake($n, $commands)
    {
        // 定義初始位置
        $i = 0;
        $j = 0;
        // 遍歷指令
        foreach ($commands as $command) {
            if ($command == "UP") {
                $i--;
            } else if ($command == "DOWN") {
                $i++;
            } else if ($command == "RIGHT") {
                $j++;
            } else {
                $j--;
            }
        }

        return ($i * $n) + $j;
    }
}
