
<?php
Class Queen
{
	$column = array(); // 存放列是否占用标记  ； 0 为占有

	$rup = array(); // 存放主对角线 是否占有 ； 0 占有

	$lup = array(); // 存放次对角线是否占有  ； 0占有

	$queen = array();  // 存放解中皇后的位置

	$num ;  // 编号

	function __construct()
	{
		for($i = 1; $i <= 8; $i++)
		{
			$this->column[$i] = 1;
		}

		for($i = 1; $i <= (2*8); $i++)
		{
			$this->rup[$i] = $this->lup[$i] = 1;
		}

	} 

	function backtrack($i)
	{
		if($i > 8){
			$htis->showAnswer()
		} else {
			for($j = 1; $j <= 8;$j++){
				// 从左往右横向
				if( ($this->column[$j] == 1 ) &&  ($this->rup[$i + $j] == 1) && ($this->lup[$i - $j + 8] == 1)){

					$this->queen[$i] = $j;
					//设置为占用
					$this->column[$j] = $this->rup[$i+$j] = $this->lup[$i -$j +8] = 0;

					$this->backtrack($i + 1);


					// 撤销数据置位
					$this->column [$j] = $rup[$i + $j] = $this->lup[$i - $j + 8] = 1;

				}

			}


		}
	}


	showAnswer ()
	{
		$this->num++;
		print("解答");

		print($this->num);

		echo "<br>";

		for( $y = 1; $y <= 8; $y++){

			for($x = 1; $x <= 8; $x++){
				if($this->queen[$y] == $x){
					print("Q");

				} else {
					print("*");

				}

			}
			print("<>br");

		}
		print("<br>");

	}
}
