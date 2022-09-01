<?php
/**
 * Given head, the head of a linked list, determine if the linked list has a cycle in it.
 *
 * There is a cycle in a linked list if there is some node in the list that can be reached again by continuously following the next pointer. Internally, pos is used to denote the index of the node that tail's next pointer is connected to. Note that pos is not passed as a parameter.
 *
 * Return true if there is a cycle in the linked list. Otherwise, return false.
 *
 * Example 1:
 *
 * Input: head = [3,2,0,-4], pos = 1
 * Output: true
 * Explanation: There is a cycle in the linked list, where the tail connects to the 1st node (0-indexed).
 * Example 2:
 *
 *
 * Input: head = [1,2], pos = 0
 * Output: true
 * Explanation: There is a cycle in the linked list, where the tail connects to the 0th node.
 * Example 3:
 *
 *
 * Input: head = [1], pos = -1
 * Output: false
 * Explanation: There is no cycle in the linked list.
 *
 *
 * Constraints:
 *
 * The number of the nodes in the list is in the range [0, 104].
 * -105 <= Node.val <= 105
 * pos is -1 or a valid index in the linked-list.
 *
 *
 * Follow up: Can you solve it using O(1) (i.e. constant) memory?
 *
 ***********************************************************************************************************************
 *
 * Runtime: 7 ms, faster than 99.12% of PHP online submissions for Linked List Cycle.
 * Memory Usage: 23.6 MB, less than 16.67% of PHP online submissions for Linked List Cycle.
 */

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class Solution
{
    private array $usedNodesIds = [];

    /**
     * @param ListNode $head
     * @return Boolean
     */
    function hasCycle($head): bool
    {
        if ($head->next === null) {
            return false;
        }

        $nextNodeCheck = $head;

        for (; ;) {
            if (array_key_exists(spl_object_id($nextNodeCheck), $this->usedNodesIds)) {
                return true;
            }

            if ($nextNodeCheck->next !== null) {
                $this->usedNodesIds[spl_object_id($nextNodeCheck)] = null;
                $nextNodeCheck = $nextNodeCheck->next;
            } else {
                return false;
            }
        }
    }
}