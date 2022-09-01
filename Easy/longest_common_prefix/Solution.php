<?php
/**
 * URL: https://leetcode.com/problems/longest-common-prefix
 * Write a function to find the longest common prefix string amongst an array of strings.
 *
 * If there is no common prefix, return an empty string "".
 *
 *
 *
 * Example 1:
 *
 * Input: strs = ["flower","flow","flight"]
 * Output: "fl"
 * Example 2:
 *
 * Input: strs = ["dog","racecar","car"]
 * Output: ""
 * Explanation: There is no common prefix among the input strings.
 *
 *
 * Constraints:
 *
 * 1 <= strs.length <= 200
 * 0 <= strs[i].length <= 200
 * strs[i] consists of only lowercase English letters.
 * *********************************************************************************************************************
 * The best attempt result:
 *
 * Runtime: 12 ms, faster than 70.16% of PHP online submissions for Longest Common Prefix.
 * Memory Usage: 19.3 MB, less than 60.21% of PHP online submissions for Longest Common Prefix.
 */

class Solution
{
    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix(array $strs): string
    {
        $result = '';

        if (count($strs) === 1) {
            return $strs[0];
        }

        for ($i = 0; $i < strlen($strs[0]); $i++) {
            for ($j = 0; $j < count($strs); $j++) {
                if ($strs[0][$i] !== $strs[$j][$i]) {
                    break 2;
                }
            }

            $result .= $strs[0][$i];
        }

        return $result;
    }
}