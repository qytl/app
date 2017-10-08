<template>
<div id="aaa" v-cloak>
    <h1>♛统计粉丝♛</h1>
    <ul>
        <li v-for="item in items" @click="toggleActive(item)" :class="{'active':item.active}">{{item.name}}<span>{{item.price | currency}}</span></li>
    </ul>
    <p>总数: <span>{{total() | currency}}</span></p>
</div>
</template>

<script>
export default {

    data(){
    return { active:'点击一下',
        items: [
        	{
        		name: '黑粉',
        		price: 600,
        		active:false
        	},{
        		name: '豆哥哥的铁粉',
        		price: 5000,
        		active:false
        	},{
        		name: '小白白粉丝',
        		price: 2500,
        		active:false
        	},{
        		name: 'bobo粉丝',
        		price: 220,
        		active:false
        	}]
             }
           },
    methods: {
    	toggleActive: function(i){
            i.active = !i.active;
    	},
    	total: function(){
        	var total = 0;
        	this.items.forEach(function(s){
        		if (s.active){
        			total+= s.price;
        		}
        	});
    	   return total;
        }
    }
}
</script>

<style>
[v-cloak] {
  display: none;
}
*{
	margin:0;
	padding:0;
}
body{
    font-family:Microsoft YaHei;
}
li{list-style:none;}
#aaa {
    width:400px;
    background-color:#61a1bc;
    margin:50px auto;
    padding:35px 60px;
}
#aaa h1{
    font-size:44px;
    text-align:center;
}
#aaa ul{
    font-size:20px;
    text-align:left;
    margin:20px 0 15px;
}
#aaa ul li{
    padding:20px 30px;
	background-color:#e35885;
	margin-bottom:8px;
	cursor:pointer;
}
#aaa ul li span{float:right;}
#aaa ul li.active{
    background-color:#8ec16d;
}
p{
    border-top:1px solid rgba(255,255,255,0.5);
	padding:15px 30px;
	font-size:20px;
	text-align: left;
}
p span{float:right;}

</style>