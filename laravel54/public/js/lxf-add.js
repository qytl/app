/**
 * Created by 廉大爷 on 2017/4/13.
 */
var  kahao=document.querySelector('#kahao');
var  user=document.querySelector('#user');
var  zhengjian=document.querySelector('#zhengjian');
var  call=document.querySelector('#call');
var  radio=document.querySelector('#radio');
var  btn=document.querySelector('#btn');



call.addEventListener('blur',function () {
    if(kahao.value.length>2&&user.value.length>=2&&zhengjian.value.length>2&&call.value.length>1){
        btn.style.backgroundColor="#3B74E8"
        btn.style.color="#fff";
    }
    btn.addEventListener('touchstart',function () {
        window.location.href="lxf-ka.html"
    })
})

