<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	$conn=mysql_connect("localhost","root","");
	if(!$conn){
		die("error".mysql_error());
	}
	mysql_select_db("test",$conn) or die(mysql_error());
	
	mysql_query("set names utf8");
	
	$sql="insert into user1 (name, passwd, email,age) 
	values('小明',md5('123'),'xm@sohu.com',20)";
	$sql="insert into user1 (name, passwd, email,age) 
	values('小明',md5('123'),'xm@sohu.com',20)";
	$sql="insert into user1 (name, passwd, email,age) 
	values('小明',md5('123'),'xm@sohu.com',20)";
	$sql="delete from user1 where id=5";
	$sql="update user1 set age=100 where id=6";
	//如果是dml操作，则返回bool
	$res=mysql_query($sql,$conn);
	if(!$res){
		die("fail".mysql_error());
	}
	//看看有几条数据
	if(mysql_affected_rows($conn)>0){
		echo "success";
	}else{
		echo "no operation";
	}
	
	mysql_close($conn);

?>