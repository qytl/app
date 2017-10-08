var LZString=function(){function f(h,e){if(!b[h]){b[h]={};for(var i=0;i<h.length;i++){b[h][h.charAt(i)]=i}}return b[h][e]}var c=String.fromCharCode,g="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",d="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+-$",b={},a={compressToBase64:function(h){if(null==h){return""}var e=a._compress(h,6,function(i){return g.charAt(i)});switch(e.length%4){default:case 0:return e;case 1:return e+"===";case 2:return e+"==";case 3:return e+"="}},decompressFromBase64:function(e){return null==e?"":""==e?null:a._decompress(e.length,32,function(h){return f(g,e.charAt(h))})},compressToUTF16:function(e){return null==e?"":a._compress(e,15,function(h){return c(h+32)})+" "},decompressFromUTF16:function(e){return null==e?"":""==e?null:a._decompress(e.length,16384,function(h){return e.charCodeAt(h)-32})},compressToUint8Array:function(l){for(var j=a.compress(l),m=new Uint8Array(2*j.length),k=0,h=j.length;h>k;k++){var i=j.charCodeAt(k);m[2*k]=i>>>8,m[2*k+1]=i%256}return m},decompressFromUint8Array:function(k){if(null===k||void 0===k){return a.decompress(k)}for(var l=new Array(k.length/2),j=0,h=l.length;h>j;j++){l[j]=256*k[2*j]+k[2*j+1]}var i=[];return l.forEach(function(e){i.push(c(e))}),a.decompress(i.join(""))},compressToEncodedURIComponent:function(e){return null==e?"":a._compress(e,6,function(h){return d.charAt(h)})},decompressFromEncodedURIComponent:function(e){return null==e?"":""==e?null:(e=e.replace(/ /g,"+"),a._decompress(e.length,32,function(h){return f(d,e.charAt(h))}))},compress:function(e){return a._compress(e,16,function(h){return c(h)})},_compress:function(q,j,w){if(null==q){return""}var C,I,z,J={},k={},H="",E="",F="",y=2,B=3,A=2,D=[],x=0,G=0;for(z=0;z<q.length;z+=1){if(H=q.charAt(z),Object.prototype.hasOwnProperty.call(J,H)||(J[H]=B++,k[H]=!0),E=F+H,Object.prototype.hasOwnProperty.call(J,E)){F=E}else{if(Object.prototype.hasOwnProperty.call(k,F)){if(F.charCodeAt(0)<256){for(C=0;A>C;C++){x<<=1,G==j-1?(G=0,D.push(w(x)),x=0):G++}for(I=F.charCodeAt(0),C=0;8>C;C++){x=x<<1|1&I,G==j-1?(G=0,D.push(w(x)),x=0):G++,I>>=1}}else{for(I=1,C=0;A>C;C++){x=x<<1|I,G==j-1?(G=0,D.push(w(x)),x=0):G++,I=0}for(I=F.charCodeAt(0),C=0;16>C;C++){x=x<<1|1&I,G==j-1?(G=0,D.push(w(x)),x=0):G++,I>>=1}}y--,0==y&&(y=Math.pow(2,A),A++),delete k[F]}else{for(I=J[F],C=0;A>C;C++){x=x<<1|1&I,G==j-1?(G=0,D.push(w(x)),x=0):G++,I>>=1}}y--,0==y&&(y=Math.pow(2,A),A++),J[E]=B++,F=String(H)}}if(""!==F){if(Object.prototype.hasOwnProperty.call(k,F)){if(F.charCodeAt(0)<256){for(C=0;A>C;C++){x<<=1,G==j-1?(G=0,D.push(w(x)),x=0):G++}for(I=F.charCodeAt(0),C=0;8>C;C++){x=x<<1|1&I,G==j-1?(G=0,D.push(w(x)),x=0):G++,I>>=1}}else{for(I=1,C=0;A>C;C++){x=x<<1|I,G==j-1?(G=0,D.push(w(x)),x=0):G++,I=0}for(I=F.charCodeAt(0),C=0;16>C;C++){x=x<<1|1&I,G==j-1?(G=0,D.push(w(x)),x=0):G++,I>>=1}}y--,0==y&&(y=Math.pow(2,A),A++),delete k[F]}else{for(I=J[F],C=0;A>C;C++){x=x<<1|1&I,G==j-1?(G=0,D.push(w(x)),x=0):G++,I>>=1}}y--,0==y&&(y=Math.pow(2,A),A++)}for(I=2,C=0;A>C;C++){x=x<<1|1&I,G==j-1?(G=0,D.push(w(x)),x=0):G++,I>>=1}for(;;){if(x<<=1,G==j-1){D.push(w(x));break}G++}return D.join("")},decompress:function(e){return null==e?"":""==e?null:a._decompress(e.length,32768,function(h){return e.charCodeAt(h)})},_decompress:function(B,C,I){var r,F,x,z,q,K,L,E,H=[],G=4,J=4,D=3,k="",j=[],y={val:I(0),position:C,index:1};for(F=0;3>F;F+=1){H[F]=F}for(z=0,K=Math.pow(2,2),L=1;L!=K;){q=y.val&y.position,y.position>>=1,0==y.position&&(y.position=C,y.val=I(y.index++)),z|=(q>0?1:0)*L,L<<=1}switch(r=z){case 0:for(z=0,K=Math.pow(2,8),L=1;L!=K;){q=y.val&y.position,y.position>>=1,0==y.position&&(y.position=C,y.val=I(y.index++)),z|=(q>0?1:0)*L,L<<=1}E=c(z);break;case 1:for(z=0,K=Math.pow(2,16),L=1;L!=K;){q=y.val&y.position,y.position>>=1,0==y.position&&(y.position=C,y.val=I(y.index++)),z|=(q>0?1:0)*L,L<<=1}E=c(z);break;case 2:return""}for(H[3]=E,x=E,j.push(E);;){if(y.index>B){return""}for(z=0,K=Math.pow(2,D),L=1;L!=K;){q=y.val&y.position,y.position>>=1,0==y.position&&(y.position=C,y.val=I(y.index++)),z|=(q>0?1:0)*L,L<<=1}switch(E=z){case 0:for(z=0,K=Math.pow(2,8),L=1;L!=K;){q=y.val&y.position,y.position>>=1,0==y.position&&(y.position=C,y.val=I(y.index++)),z|=(q>0?1:0)*L,L<<=1}H[J++]=c(z),E=J-1,G--;break;case 1:for(z=0,K=Math.pow(2,16),L=1;L!=K;){q=y.val&y.position,y.position>>=1,0==y.position&&(y.position=C,y.val=I(y.index++)),z|=(q>0?1:0)*L,L<<=1}H[J++]=c(z),E=J-1,G--;break;case 2:return j.join("")}if(0==G&&(G=Math.pow(2,D),D++),H[E]){k=H[E]}else{if(E!==J){return null}k=x+x.charAt(0)}j.push(k),H[J++]=x+k.charAt(0),G--,x=k,0==G&&(G=Math.pow(2,D),D++)}}};return a}();"function"==typeof define&&define.amd?define(function(){return LZString}):"undefined"!=typeof module&&null!=module&&(module.exports=LZString);function SimplePush(j,g){window.WebSocket=window.WebSocket||window.MozWebSocket;var f=new Object;f.reconnectCount=0;f.wsReconnectCount=0;f.options=$.extend({debug:false,reconnectInterval:10000,reconnectLimit:3,wsdowngradeLimit:3,pollingTimeout:30000,compress:false,ssl:false},g);f.debug=f.options.debug||false;f.forOpen=function(){};f.forMessage=function(a){};f.forError=function(a){};f.forClose=function(){};f.forReconnect=function(a){};f.forChangeTransport=function(){};f.sid=null;f.host=j;f.log=function(a){if(!f.debug){return}try{console.log("["+(new Date()).toLocaleString()+"]");console.log(a)}catch(b){}};f.encodeURIData=function(a){if(f.options.compress){a=LZString.compressToEncodedURIComponent(a)}return a};f.decodeURIData=function(a){if(f.options.compress){a=LZString.decompressFromEncodedURIComponent(a)}return a};var i=function(b){b.ws=null;b.transport="websocket";b.reconnect=function(){if(b.reconnectCount<b.options.reconnectLimit){setTimeout(function(){b.reconnectCount++;b.wsReconnectCount++;b.forReconnect(b.reconnectCount);b.ws=a(b)},b.options.reconnectInterval)}else{b.forClose()}};var a=function(d){window.WebSocket=window.WebSocket||window.MozWebSocket;if(window.WebSocket){var c="ws";if(d.options.ssl){c="wss"}d.wshost=c+"://"+d.host+"/websocket";var e=new WebSocket(d.wshost);e.onopen=function(){d.reconnectCount=0;d.connect()};e.onerror=function(l){d.forError(l)};e.onmessage=function(m){var n=JSON.parse(m.data);if(n.state==0){d.sid=n.json;d.forOpen()}else{if(n.state==1){d.forMessage(d.decodeURIData(n.json))}}};e.onclose=function(l){d.forClose();if(d.wsReconnectCount>=d.options.wsdowngradeLimit){d.ws=null;d.forChangeTransport();d.reconnectCount=0;return h(d)}d.reconnect()}}return e};b.ws=a(b);b.doSendMessage=function(c){if(window.WebSocket&&b.ws.readyState==WebSocket.OPEN){b.ws.send(JSON.stringify(c))}};b.sendMessage=function(d){var c={state:1,json:b.encodeURIData(d)};b.doSendMessage(c)};b.connect=function(){var c={state:0,json:{isCompress:b.options.compress}};b.doSendMessage(c)};return b};var h=function(a){a.transport="";a.pdata={type:"down",isCompress:a.options.compress};a.pollingAjaxOption={data:a.pdata,async:true,cache:false,dataType:"jsonp",contentType:"application/json;charset=utf-8",jsonpCallback:"pollingCallbackFunc",timeout:a.options.pollingTimeout,crossDomain:true};a.abort=false;a.pollingReady=false;a.transport="polling";a.reconnect=function(){if(a.reconnectCount<a.options.reconnectLimit){setTimeout(function(){a.reconnectCount++;a.forReconnect(a.reconnectCount);a.pdata.sid=0;a.pollingOpen()},a.options.reconnectInterval)}else{a.forClose()}};a.pollingOpen=function(){var b="http";if(a.options.ssl){b="https"}a.pollinghost=b+"://"+a.host+"/polling";a.pollingAjaxOption.url=a.pollinghost;$.ajax(a.pollingAjaxOption).done(function(c){a.reconnectCount=0;a.pollingReady=true;a.log(c);if(c.state==0){a.sid=c.json;a.pdata.pd={state:0};a.pdata.sid=c.json}else{a.pdata.pd={state:2};if(c.state==5){a.forOpen()}if(c.state==1){try{setTimeout(function(){if($.isArray(c.json)){$.each(c.json,function(e,k){a.forMessage(a.decodeURIData(k))})}else{a.forMessage(a.decodeURIData(c.json))}},0)}catch(d){a.log(d)}}if(c.state==4){a.forClose();return}}if(a.abort){a.log("disconnect!");a.pollingSendOp(4,"close");a.forClose()}else{a.pollingOpen()}}).fail(function(e,c,d){a.pollingReady=false;a.log(d);a.forError(d);a.reconnect()})};a.pollingSendOp=function(d,b){var c={pd:JSON.stringify({state:d,json:b}),isCompress:a.options.compress};$.ajax({url:a.pollinghost+"?type=up&sid="+a.sid,data:c,async:true,cache:false,dataType:"jsonp",contentType:"application/json;charset=utf-8",crossDomain:true}).done(function(e){a.log(e)}).fail(function(n,e,m){a.log(n);a.forError(n)})};a.sendMessage=function(b){if(a.sid==null){a.forError("sid is null")}else{if(!a.pollingReady){a.forError("polling is not ready")}else{a.pollingSendOp(1,a.encodeURIData(b))}}};a.connect=function(){setTimeout(function(){a.pollingOpen()},0)};a.disconnect=function(){a.abort=true};a.connect();return a};if(window.WebSocket){return i(f)}else{return h(f)}}window.pushReponseFunctions={test:function(a){PushService.pushLog("["+(new Date()).toLocaleString()+"]"+a)}};window.currentUid=window.NAV_UTIL.isLogin()?window.NAV_UTIL.getUserInfo().yyID:"";var PushService={attemptCount:0,pushOption:{debug:false},pushOpen:function(a){},pushError:function(a){},pushGetMessage:function(a){},pushClose:function(){},pushReconnect:function(a){},pushChangeTransport:function(){},init:function(){if(window.PUSH_ENABLE){var a=this;setTimeout(function(){if(window.WEB_PUSH_TLS_ENABLE){a.initSimplePush(window.WEB_PUSH_URL,true)}else{a.getChannelIp()}},10000)}},getChannelIp:function(){var a=this;$.ajax({url:window.PUSH_PROXY_URL+"addressService",type:"GET",dataType:"jsonp",timeout:3000,success:function(b){if(b.status==200){a.initSimplePush(b.data,false)}else{if(a.attemptCount<2){a.attemptCount++;a.getChannelIp()}}}}).fail(function(){if(a.attemptCount<2){a.attemptCount++;a.getChannelIp()}})},pushLog:function(){try{window.console&&console.log&&console.log.apply(console,arguments)}catch(a){}},callFunc:function(returnJson){if(typeof returnJson!="undefined"){if(typeof returnJson.event!="undefined"){if(window.pushReponseFunctions[returnJson.event]){window.pushReponseFunctions[returnJson.event](returnJson.data)}else{try{eval(returnJson.event)(returnJson.data)}catch(err){if(err.name=="ReferenceError"&&err.message==returnJson.event+" is not defined"){if(this.pushOption.debug){this.pushLog("function not defined")}}else{throw err}}}}}},unix_to_datetime:function(a){var b=new Date(parseInt(a)*1000);return b.toLocaleString()},stat:function(a){$.ajax({url:window.PUSH_PROXY_URL+"statService",type:"POST",dataType:"jsonp",data:a,success:function(b){}})},initSimplePush:function(g,f){var c={debug:false,reconnectInterval:30000,reconnectLimit:20,wsdowngradeLimit:10,pollingTimeout:60000,compress:true,ssl:f};$.extend(c,this.pushOption);var b=SimplePush(g,c);var e=0;var d=0;var a=this;b.forOpen=function(){a.pushLog("["+(new Date()).toLocaleString()+"]simplepush\u6210\u529f\u8fde\u63a5!");d=Date.parse(new Date());e=b.sid;a.pushOpen(b)};b.forError=function(h){a.pushLog("["+(new Date()).toLocaleString()+"]simplepush\u9519\u8bef");a.pushError(h)};b.forMessage=function(h){if(typeof h!="undefined"){if(typeof(h)=="string"){h=JSON.parse(h)}a.callFunc(h);a.pushGetMessage(h)}};b.forClose=function(){a.pushLog("["+(new Date()).toLocaleString()+"]simplepush\u5173\u95ed");a.pushClose()};b.forReconnect=function(h){a.pushLog("["+(new Date()).toLocaleString()+"]simplepush\u91cd\u8fde:"+h);a.stat({type:"simplepushreconnect",reconnectTime:h,transport:b.transport,sid:e,uid:window.currentUid,serverhost:g,connectingTime:d});d=0;a.pushReconnect(h)};b.forChangeTransport=function(){a.pushLog("["+(new Date()).toLocaleString()+"]simplepush\u534f\u8bae\u8f6c\u6362");a.stat({type:"simplepushChangeTransport",transport:b.transport,sid:e,uid:window.currentUid,serverhost:g,connectingTime:d});d=0;a.pushChangeTransport()}}};
