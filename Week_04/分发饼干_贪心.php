class Solution {

    /**
     * @param Integer[] $g
     * @param Integer[] $s
     * @return Integer
     *
     *  最简单，先排序，后贪心。因为已经有序，所以合适就给吧。
     */
    function findContentChildren($g, $s) {
        $i = $j = 0;
        $count = 0;
        sort($g);
        sort($s);
        while($i<count($g) && $j<count($s)){
            //不满足孩子
           if($g[$i] > $s[$j]){
                $j++;
           }else{ //满足了
                $i++;
                $j++;
                $count++;
           }   
        }
        return $count;
    }
}
