var xmlhttp;
	if(window.ActiveXObject){//如果是浏览器支持ActiveXObjext则创建ActiveXObject对象
	  xmlhttp=new ActiveXObject('Microsoft.XMLHTTP');
	}else if(window.XMLHttpRequest){//如果浏览器支持XMLHttpRequest对象则创建XMLHttpRequest对象
	  xmlhttp=new XMLHttpRequest();
	}
function login(form){
	var name = document.getElementById("name").value;   //获取表单提交的用户名
    var password = document.getElementById("pwd").value;  //获取密码
    var post_method="name="+name+"&password="+password; //定义传递的数据
    xmlhttp.open("POST","login.php",true);                        //调用指定文件
    xmlhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded;"); //设置请求头信息
    xmlhttp.onreadystatechange=StatHandler;                          //执行处理函数
    xmlhttp.send(post_method);                                      //将数据发送给服务器
}
function StatHandler(){                                                   //定义处理函数
	if(xmlhttp.readyState==4 && xmlhttp.status==200){          //判断如果执行成功，则输出下面内容
		document.getElementById("webpage").innerHTML=xmlhttp.responseText; //将服务器返回的数据定义到DIV中
	}
}

