<?php

/**
 * URL: https://leetcode.com/problems/palindrome-number
 * Given an integer x, return true if x is palindrome integer.
 *
 * An integer is a palindrome when it reads the same backward as forward.
 *
 * For example, 121 is a palindrome while 123 is not.
 *
 *
 * Example 1:
 *
 * Input: x = 121
 * Output: true
 * Explanation: 121 reads as 121 from left to right and from right to left.
 * Example 2:
 *
 * Input: x = -121
 * Output: false
 * Explanation: From left to right, it reads -121. From right to left, it becomes 121-. Therefore it is not a palindrome.
 * Example 3:
 *
 * Input: x = 10
 * Output: false
 * Explanation: Reads 01 from right to left. Therefore it is not a palindrome.
 *
 *
 * Constraints:
 *
 * -231 <= x <= 231 - 1
 * s
 *
 * Follow up: Could you solve it without converting the integer to a string?
 *
 ***********************************************************************************************************************
 *
 * The best attempt result:
 *
 * Runtime: 63 ms, faster than 77.84% of PHP online submissions for Palindrome Number.
 * Memory Usage: 18.7 MB, less than 99.39% of PHP online submissions for Palindrome Number.
 */
class Solution
{
    /**
     * @param Integer $digit
     * @return Boolean
     */
    function isPalindrome(int $digit): bool
    {
        if ($digit < 0) {
            return false;
        }

        $digitReverseNums = [];
        $digitTemp = $digit;

        do {
            $digitWithoutLastNum = $digitTemp / 10;
            $division = $digitTemp % 10;
            $digitReverseNums[] = $division;
            $digitTemp = (int)$digitWithoutLastNum;
        } while ($digitTemp !== 0);

        return $this->getDigitFromArray($digitReverseNums) === $digit;
    }

    /**
     * @param array $array
     * @return int
     */
    public function getDigitFromArray(array $array): int
    {
        return (int)implode('', $array);
    }
}