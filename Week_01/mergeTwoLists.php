<?php

// 题: https://leetcode-cn.com/problems/merge-two-sorted-lists/

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function mergeTwoLists($l1, $l2) {
        $dummyHead = new ListNode(null);
        $cur = $dummyHead;

        while( $l1 !== null && $l2 !== null){
            if ($l1->val <= $l2->val){
                $cur->next = $l1;
                $l1 = $l1->next;
            } else {
                $cur->next = $l2;
                $l2 = $l2->next;
            }

            $cur = $cur->next;
        }

        if($l1 !== null){
            $cur->next = $l1;
        } else{
            $cur->next = $l2;
        }

        return $dummyHead->next;


        // 单独起了一个 链表的感觉。 用$dummyHead。来代表。
        // 但是自己对链表还是不太熟。 $dummyHead 怎么就表示表头了呢???
        //  节点 && 已经next
        //  $dummyHead = new ListNode(null);   声明 && 实例化 一个节点。
        //  $cur = $dummyHead;    $cur  只是一个引用。(需要理解 php 的 引用 传值 的区别)
        // $cur  其实是一个游标
        //  $cur->next = $l1;  第一次的时候其实是 : $dummyHead->next = min($l1,$l2);


    }


    // 递归
    // 递归 比  上面的简单的很多呀
    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function mergeTwoLists_Recursive($l1, $l2) {

        // 边界
        if ($l1 === null){
            return $l2;
        }

        if ($l2 === null){
            return $l1;
        }

        // 根据条件  ==》 递归Recursive

        if ( $l1->val <= $l2->val) {
            $l1->next = $this->mergeTwoLists_Recursive($l1->next,$l2);
            return $l1;
        } else{
            $l2->next = $this->mergeTwoLists_Recursive($l1,$l2->next);
            return $l2;
        }
    }

}