<?php
 $conn=mysql_connect("127.0.0.1","root","");		//连接数据库服务器
 mysql_select_db("zhibo",$conn);					//连接指定的数据库
 mysql_query("set names utf-8");						//对数据库中的编码格式进行转换,避免出现中文乱码的问题
?>