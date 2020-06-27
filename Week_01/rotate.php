<?php

// 题: https://leetcode-cn.com/problems/rotate-array/

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */

    // 这个通不过。。。。。。
    function rotate(&$nums, $k) {

        $count = count($nums);
        $desarr = array();

        //  用了一个辅助,数组。感觉不是 特别 好。但是。负数。自己没想好怎么处理


        for($i = 0; $i< $count; $i++){
            if ($i < $k ){
                $index = $i - $k + $count ;
                $desarr[] = $nums[$index];

            } else{
                $desarr[] = $nums[$i - $k];
            }
        }
        $nums = $desarr;
    }



    // 这个可以。
    function rotate_success(&$nums, $k) {

        $count = count($nums);
        $desarr = array();

        //  用了一个辅助,数组。感觉不是 特别 好。但是。负数。自己没想好怎么处理

        for($i = 0; $i< $count; $i++){
            $index = $i - $k ;
            while( $index < 0){
                $index += $count;
            }

            $desarr[] = $nums[$index];
        }
        $nums = $desarr;


        //链接：https://leetcode-cn.com/problems/rotate-array/solution/guan-fang-qian-san-jie-by-user8506m/

        // 这个更优雅,自己写的太垃圾了。。。。。。

        //     for($i = 0; $i < $len; $i++){
        //         $arr[($i + $k) % $len] = $nums[$i];
        //     }

        //     ksort($arr);

    }


    // 其实是 需要中间保存一下变量。  K 个,就需要K个 变量???

    // 没写出来

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate2(&$nums, $k) {

        $count = count($nums);
        $desarr = array();

        //  用了一个辅助,数组。感觉不是 特别 好。但是。负数。自己没想好怎么处理


        for($i = 0; $i< $count; $i++){
            if ($i < $k ){
                $index = $i - $k + $count ;
                $desarr[] = $nums[$index];

            } else{
                $desarr[] = $nums[$i - $k];
            }
        }
        $nums = $desarr;
    }


    //链接：https://leetcode-cn.com/problems/rotate-array/solution/guan-fang-qian-san-jie-by-user8506m/
    //第三种：使用环状替换  抄写的
    // 没看懂。。。。。。
    function rotate4(&$nums, $k){
        $length = count($nums);
        $k = $k %  $length;
        $count = 0;
        for ($start = 0; $count < $length; $start++){
            $current = $start;

            //  值
            $prev = $nums[$start];

            do {
                // 获取当前坐标的下一个步伐坐标
                $next = ($current + $k ) % $length ;
                $temp = $nums[$next];
                $nums[$next] = $prev;
                $prev = $temp;
                $current = $next;
                $count++;

            } while($start != $current);
        }

    }
}




//$length = count($nums);
//$k = $k % $length;
//$count = 0;
//for($start = 0; $count < $length; $start ++){
//    $current = $start;
//    $prev = $nums[$start];//1
//
//    do{
//        //获取当前坐标的下一个步伐坐标
//        $next = ($current + $k) % $length;//3  6  1  4  7  3由到1了
//        //获取下一个正确坐标的数存起来
//        $temp = $nums[$next];//4  7  2   5   8
//        //把当前坐标数字移动到下一个正确坐标
//        $nums[$next] = $prev; //1移动到4  4移动到7   7移动到2  2到5  5到8
//        //把下一个坐标的值给当前
//        $prev = $temp;//4给prev  7给prev  2给 prev   5给prev   8给prev
//        //把下一个坐标给当前坐标
//        $current = $next; //当前位置 3 当前位置6  1  4  7
//        $count++;// 1 2 3  4  5
//
//    }while($start != $current);// 0 不等于 3 为真 进入第二次
//}
//}















