<?php

class Solution {

    /**
     * @param Int[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
        $seen = []; // 建立一個空陣列來記錄已經看過的數字
    
        foreach ($nums as $num) { // 逐一檢查輸入陣列中的每個數字
            if (isset($seen[$num])) { // 檢查這個數字是否已經在我們的 $seen 陣列中
                return true; // 如果已經存在，表示找到重複元素，立即返回 true
            }
            $seen[$num] = true; // 如果這個數字是第一次出現，將它標記為已看過
        }
    
        return false; // 如果遍歷完整個陣列都沒有發現重複，返回 false
    }
}
