/*
* @Author: Administrator
* @Date:   2017-04-01 10:54:47
* @Last Modified by:   LX
* @Last Modified time: 2017-04-13 11:58:46
*/




'use strict';

var left=document.querySelector('.sea-nav_left');
var cen=document.querySelector('.sea-nav_cen');
var right=document.querySelector('.sea-nav_right');
var xlk1=document.querySelector('.sea-nav_xlk1');
var xlk2=document.querySelector('.sea-nav_xlk2');
var xlk3=document.querySelector('.sea-nav_xlk3');

var sj1=document.getElementById('sea-nav_sj1');
var sj2=document.getElementById('sea-nav_sj2');
var sj3=document.getElementById('sea-nav_sj3');
var xs1=document.querySelector('.sea-nav_xs1');
var xs2=document.querySelector('.sea-nav_xs2');
var xs3=document.querySelector('.sea-nav_xs3');
var xx1=document.querySelector('.sea-nav_xx1');
var xx2=document.querySelector('.sea-nav_xx2');
var xx3=document.querySelector('.sea-nav_xx3');

var banner=document.querySelector('.sea-banner');
var neirong=document.querySelector('.sea-neirong');



var bs=document.querySelector('.bs');



left.addEventListener("touchstart",function(){
    xlk1.style.display="block";
	xlk2.style.display="none";
	xlk3.style.display="none";

	sj1.style.display="block";
	sj2.style.display="none";
	sj3.style.display="none";

	xs1.style.display="none";
	xs2.style.display="block";
	xs3.style.display="block";
	xx1.style.display="block";
	xx2.style.display="none";
	xx3.style.display="none";
})

cen.addEventListener("touchstart",function(){
    xlk1.style.display="none";
	xlk2.style.display="block";
	xlk3.style.display="none";


	sj1.style.display="none";
	sj2.style.display="block";
	sj3.style.display="none";

	xs1.style.display="block";
	xs2.style.display="none";
	xs3.style.display="block";
	xx1.style.display="none";
	xx2.style.display="block";
	xx3.style.display="none";

})
right.addEventListener("touchstart",function(){
    xlk1.style.display="none";
	xlk2.style.display="none";
	xlk3.style.display="block";

	sj1.style.display="none";
	sj2.style.display="none";
	sj3.style.display="block";

	xs1.style.display="block";
	xs2.style.display="block";
	xs3.style.display="none";
	xx3.style.display="block";
	xx1.style.display="none";
	xx2.style.display="none";
})


bs.addEventListener("touchstart",function(){
  this.style.background="#F1DC2F"
})

banner.addEventListener("touchstart",function(){
    xlk1.style.display="none";
	xlk2.style.display="none";
	xlk3.style.display="none";

	sj1.style.display="none";
	sj2.style.display="none";
	sj3.style.display="none";

	xs1.style.display="block";
	xs2.style.display="block";
	xs3.style.display="block";
	xx1.style.display="none";
	xx2.style.display="none";
	xx3.style.display="none";
})

neirong.addEventListener("touchstart",function(){
 	xlk1.style.display="none";
	xlk2.style.display="none";
	xlk3.style.display="none";

	sj1.style.display="none";
	sj2.style.display="none";
	sj3.style.display="none";

	xs1.style.display="block";
	xs2.style.display="block";
	xs3.style.display="block";
	xx1.style.display="none";
	xx2.style.display="none";
	xx3.style.display="none";
})