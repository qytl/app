
var cent1=document.querySelectorAll('.main .center');
var rig1=document.querySelectorAll('.main .right');
//var cent=Array.from(cent1);
//var rig=Array.from(rig1);




for(var i=0;i<cent1.length;i++){
    cent1[i].index=i;
    cent1[i].addEventListener('touchstart',function () {
        for (var j=0;j<rig1.length;j++){
            rig1[j].style.backgroundColor="#fff"
        };
        rig1[this.index].style.backgroundColor="#09BB07";
    });
};

