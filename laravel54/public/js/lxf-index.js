
var jia=document.querySelectorAll('.jia');
var jian=document.querySelectorAll('.jian');
var text=document.querySelectorAll('.text');
//var jian1=Array.from(jian);
//var jia1=Array.from(jia);
//var text1=Array.from(text);


// 减号
for(var j=0;j<jian.length;j++){
    jian[j].index=j;
    jian[j].addEventListener("touchstart",function () {
        var val=text[this.index].value-1;
        if(val<1){
            val=0;
        };
       text[this.index].value=val;
    });
};
// 加号
for(var j=0;j<jia.length;j++){
    jia[j].index=j;
    jia[j].addEventListener("touchstart",function () {
        var v=text[this.index].value;
        text[this.index].value=parseInt(v)+1;
    });
};

var fot=document.querySelector('footer');
for(var j=0;j<text.length;j++){
    text[j].addEventListener("focus",function () {
            fot.style.visibility='hidden';
    })
    text[j].addEventListener("blur",function () {
    
        fot.style.visibility='visible';
    });
};




// jia.addEventListener("touchstart",function () {
//     num++;
//     text.value=num;
//     // if(text.value<1){
//     //     text.value=0;
//     // }
// })








