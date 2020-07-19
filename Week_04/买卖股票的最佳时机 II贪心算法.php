
class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
            $profit = 0;
            //依次遍历，就是每天都交易，记录最大值
            for ($i = 1; $i<count($prices); $i++) {
                if ($prices[$i] - $prices[$i - 1] > 0) {
                    $profit += $prices[$i] - $prices[$i - 1];
                }
            }

            return $profit;
    }
}
