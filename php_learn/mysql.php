<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	//mysql扩展库操作mysql数据库操作步骤
	//1.获取连接
	$conn=mysql_connect("127.0.0.1","root","");
	if(!$conn){
		die("failed".mysql_error());
	}
	//2.选择数据库
	mysql_select_db("test");
	//3.设置操作编码（建议有）
	mysql_query("set name utf8");
	//4.发送指令
	$sql="select * from user1";
	//$res表示结果集，简单理解就是一张表
	$res=mysql_query($sql,$conn);
	//5.接收返回的结果并处理
	//mysql_fetch_row会依次取出$res结果集的下一行数据，赋值给$row
	while($row=mysql_fetch_row($res)){
		//第一种取法
		echo "<br/> $row[0]--$row[1]--$row[2]-$row[3]-$row[4]";
		//第二种取法
		foreach($row as $key=>$val){
			echo "--$val";
		}
		echo "<br/>";
	}
	//6.释放资源，关闭连接
	mysql_free_result($res);
?>	
