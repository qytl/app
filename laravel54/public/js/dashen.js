function $(id){
	return document.getElementById(id);
}
window.onload = function(){
	var designWidth=750;/*定义尺寸大小*/
	function fontsize(){
		var CW=document.documentElement.clientWidth;/*设备尺寸*/
		var size=CW/designWidth*100+"px";
		document.querySelector("html").style.fontSize=size;/*设置html的font-size*/
	}
	fontsize();
	window.onresize=fontsize;/*监测窗口发生改变*/
	$('regname').focus();
	var cname1,cname2,cpwd1,cpwd2;
	//验证用户名
	$('regname').onkeyup = function (){
		name = $('regname').value;
		cname2 = '';
		if(name.match(/^[a-zA-Z_]*/) == ''){
			$('namediv').innerHTML = '<img src="img/zc-cw.png">';
			cname1 = '';
		}else if(name.length <= 3){
			$('namediv').innerHTML = '<img src="img/zc-cw.png">';
			cname1 = '';
		}else{
			$('namediv').innerHTML = '<img src="img/zc-zq.png">';
			cname1 = 'yes';
		}
		chkreg();
	}
	$('regname').onblur = function(){
		name = $('regname').value;
		if(cname1 == 'yes'){
			xmlhttp.open('get','chkname.php?name='+name,true);
			xmlhttp.onreadystatechange = function(){
				if(xmlhttp.readyState == 4){
					if(xmlhttp.status == 200){
						var msg = xmlhttp.responseText;
						if(msg == '1'){
							$('namediv').innerHTML="<font color=green>恭喜您，该用户名可以使用!</font>";
							cname2 = 'yes';
						}else if(msg == '2'){
							$('namediv').innerHTML="<font color=red>用户名被占用！</font>";
							cname2 = '';
						}else{
							$('namediv').innerHTML="<font color=red>"+msg+"</font>";
							cname2 = '';
						}
					}
				}
			}
			xmlhttp.send(null);
			chkreg();
		}
	}
	$('regpwd1').onkeyup = function(){
		pwd = $('regpwd1').value;
		if(pwd.length < 6){
			$('pwddiv1').innerHTML = '<img src="img/zc-cw.png">';
			cpwd1 = '';
		}else{
			$('pwddiv1').innerHTML = '<img src="img/zc-zq.png">';
			cpwd1 = 'yes';
		}
		chkreg();
	}
	function chkreg(){
		if((cname1 == 'yes') & (cpwd1 == 'yes')){
			$('regbtn2').style.display = 'block';
			$('regbtn1').style.display = 'none';
		}else{
			$('regbtn2').style.display = 'none';
			$('regbtn1').style.display = 'block';
			$('regbtn1').style.display = true;
		}
	}
	$('morebtn').onclick = function(){
		if($('morediv').style.display == ''){
			$('morediv').style.display = 'none';
		}else{
			$('morediv').style.display = '';
		}
	}
	//正式注册
	$('regbtn').onclick = function(){
		if($('email').value != ''){
			reg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
			$('email').value.match(reg);
			if($('email').value.match(reg) == null){
				alert('您可以选择不填写email，但一定要写正确的格式');
				$('email').select();
				return false;
			}
			
		}
		
		name = $('regname').value;
		pwd = $('regpwd1').value;
		email1 = $('email').value;
		url = 'register_chk.php?name='+name+'&pwd='+pwd;
		url += '&email='+email;
		xmlhttp.open('get',url,true);
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState == 4){
				if(xmlhttp.status == 200){
					msg = xmlhttp.responseText;
					if(msg == '1'){
						alert('注册成功!');
						top.opener.location.reload();
						window.close();
					}else{
						alert(msg);
					}
				}
			}
		}
		xmlhttp.send(null);
	}
}