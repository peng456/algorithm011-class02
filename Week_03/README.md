学习笔记  

本周主要是  
1、递归的实现、特性以及思维要点  
2、题：爬楼梯、括号生成问题  

3、分治、回溯的实现和特性  
4、Pow(x,n) 、子集 电话号码的字母组合、N皇后问题。  

本周作业： 二叉树的最近公共祖先、从前序、中序遍历中 构造二叉树  
          组合、全排列、全排列II  
          
          
本周一个感慨： 分治 和 递归是 一件事。如果细细品味。解题模板都是一样的。

1、递归迭代模板

```Python
def recursion(level, param1, param2, ...): 
    # recursion terminator   
    if level > MAX_LEVEL:    // 边界条件： 停止
        process_result 
        return 
        
    # process logic in current level   // 本层逻辑处理
    process(level, data...) 
    
    # drill down    下探到下一层 （进入子递归）
    self.recursion(level + 1, p1, ...) 
    
    # reverse the current level status if needed   // 处理 一些状态（跳回上一层，可能需要 把一些状态 位，重新处理）
```

2、分支模板
```Python
def divide_conquer(problem, param1, param2, ...): 
  # recursion terminator   // 边界问题，是否到达条件，是否返回
  if problem is None: 
      print_result 
      return 
  # prepare data   // 准备工作 ，数据拆分成  不停的 “块”（split_problem 子问题域）
  data = prepare_data(problem) 
  subproblems = split_problem(problem, data) 
  # conquer subproblems   // 解决子问题  问题1  问题2  问题3  问题4  。。。。。
  subresult1 = self.divide_conquer(subproblems[0], p1, ...) 
  subresult2 = self.divide_conquer(subproblems[1], p1, ...) 
  subresult3 = self.divide_conquer(subproblems[2], p1, ...) 
  …
  # process and generate the final result   // 看情况，是否需要  把子问题结果 ==》 “合并”逻辑处理
  result = process_result(subresult1, subresult2, subresult3, …)
 
  # revert the current level states   // 状态处理 &&  返回结果
  ```
  3、补充一个回溯模板
 回溯搜索套路：
```Python
function backtrace ( 路径， 选择列表)
{
	if (满足条件)
	{
		$result.add(路径)
		return;
	}

	for 选择 in 选择列表
		做选择
		backtrace(路径， 选择列表)
		撤销选择

}
```     
     
看完三个套路： 其实差不多。 分治重点在 拆分子问题域、  递归 重点在  递归，循环调用自身   回溯： 应该是对的一种；带有记忆性，一种贪婪性策略的试探策略     


