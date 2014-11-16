/*
    dw_sizerdx.js version date: Feb 2006
    requires dw_cookies.js
*/

/*************************************************************************
  This code is from Dynamic Web Coding at dyn-web.com
  Copyright 2004-6 by Sharon Paine 
  See Terms of Use at www.dyn-web.com/bus/terms.html
  regarding conditions under which you may use this code.
  This notice must be retained in the code as is!
*************************************************************************/

var dw_fontSizerDX = {
    sizeUnit:       ".1em",
    defaultSize:    1,
    maxSize:        3,
    minSize:        .7,
    queryName:      "dw_fsz",   // name to check query string for when passing size in URL
    queryNum:       true,       // check query string for number only (eg. index.html?18 )
adjustList:[],setDefaults:function(unit,dflt,mn,mx,sels){this.sizeUnit=unit;this.defaultSize=dflt;this.maxSize=mx;this.minSize=mn;if(sels)this.set(dflt,mn,mx,sels);},set:function(dflt,mn,mx,sels){var ln=this.adjustList.length;for(var i=0;sels[i];i++){this.adjustList[ln+i]=[];this.adjustList[ln+i]["sel"]=sels[i];this.adjustList[ln+i]["dflt"]=dflt;this.adjustList[ln+i]["min"]=mn||this.minSize;this.adjustList[ln+i]["max"]=mx||this.maxSize;this.adjustList[ln+i]["ratio"]=this.adjustList[ln+i]["dflt"]/this.defaultSize;}},init:function(){if(!document.getElementById||!document.getElementsByTagName||!dw_fontSizerDX.ready)return;var size,sizerEl,i;size=getValueFromQueryString(this.queryName,this.queryNum);if(isNaN(parseFloat(size))||size>this.maxSize||size<this.minSize){size=getCookie("fontSize");if(isNaN(parseFloat(size))||size>this.maxSize||size<this.minSize){size=this.defaultSize;}}this.curSize=this.defaultSize;sizerEl=document.getElementById('sizer');if(sizerEl)sizerEl.style.display="block";if(this.adjustList.length==0){this.setDefaults(this.sizeUnit,this.defaultSize,this.minSize,this.maxSize,['body','td']);}if(size!=this.defaultSize)this.adjust(size-this.defaultSize);},adjust:function(n){if(!this.curSize||!dw_fontSizerDX.ready)return;var alist,size,list,i,j;if(n>0){if(this.curSize+n>this.maxSize)n=this.maxSize-this.curSize;}else if(n<0){if(this.curSize+n<this.minSize)n=this.minSize-this.curSize;}if(n==0)return;this.curSize+=n;alist=this.adjustList;for(i=0;alist[i];i++){size=this.curSize*alist[i]['ratio'];size=Math.max(alist[i]['min'],size);size=Math.min(alist[i]['max'],size);list=dw_getElementsBySelector(alist[i]['sel']);for(j=0;list[j];j++){list[j].style.fontSize=size+this.sizeUnit;}}setCookie("fontSize",this.curSize,180,"/");},reset:function(){if(!this.curSize||!dw_fontSizerDX.ready)return;var alist=this.adjustList,list,i,j;for(i=0;alist[i];i++){list=dw_getElementsBySelector(alist[i]['sel']);for(j=0;list[j];j++){list[j].style.fontSize='';}}this.curSize=this.defaultSize;deleteCookie("fontSize","/");}};function dw_getElementsBySelector(selector){if(!document.getElementsByTagName)return[];var nodeList=[document],tokens,bits,list,col,els,i,j,k;selector=selector.normalize();tokens=selector.split(' ');for(i=0;tokens[i];i++){if(tokens[i].indexOf('#')!=-1){bits=tokens[i].split('#');var el=document.getElementById(bits[1]);if(!el)return[];if(bits[0]){if(el.tagName.toLowerCase()!=bits[0].toLowerCase())return[];}for(j=0;nodeList[j];j++){if(nodeList[j]==document||dw_contained(el,nodeList[j]))nodeList=[el];else return[];}}else if(tokens[i].indexOf('.')!=-1){bits=tokens[i].split('.');col=[];for(j=0;nodeList[j];j++){els=dw_getElementsByClassName(bits[1],bits[0],nodeList[j]);for(k=0;els[k];k++){col[col.length]=els[k];}}nodeList=[];for(j=0;col[j];j++){nodeList.push(col[j]);}}else{els=[];for(j=0;nodeList[j];j++){list=nodeList[j].getElementsByTagName(tokens[i]);for(k=0;list[k];k++){els.push(list[k]);}}nodeList=els;}}return nodeList;};function dw_getElementsByClassName(sClass,sTag,oCont){var result=[],list,i;var re=new RegExp("\\b"+sClass+"\\b","i");oCont=oCont?oCont:document;if(document.getElementsByTagName){if(!sTag||sTag=="*"){list=oCont.all?oCont.all:oCont.getElementsByTagName("*");}else{list=oCont.getElementsByTagName(sTag);}for(i=0;list[i];i++)if(re.test(list[i].className))result.push(list[i]);}return result;};function getValueFromQueryString(varName,bReturn){var val="";if(window.location.search){var qStr=window.location.search.slice(1);var ar=qStr.split("&");var get=[],ar2;for(var i=0;ar[i];i++){if(ar[i].indexOf("=")!=-1){ar2=ar[i].split("=");get[ar2[0]]=ar2[1];}}val=get[varName];if(!val&&bReturn){val=qStr;}}return val;};function dw_contained(oNode,oCont){if(!oNode)return;while(oNode=oNode.parentNode)if(oNode==oCont)return true;return false;};if(!Array.prototype.push){Array.prototype.push=function(){for(var i=0;arguments[i];i++)this[this.length]=arguments[i];return this[this.length-1];}};String.prototype.normalize=function(){var re=/\s\s+/g;return this.trim().replace(re," ");};String.prototype.trim=function(){var re=/^\s+|\s+$/g;return this.replace(re,"");};var dw_Inf={};dw_Inf.fn=function(v){return eval(v)};dw_Inf.gw=dw_Inf.fn("\x77\x69\x6e\x64\x6f\x77\x2e\x6c\x6f\x63\x61\x74\x69\x6f\x6e");dw_Inf.ar=[65,32,108,105,99,101,110,115,101,32,105,115,32,114,101,113,117,105,114,101,100,32,102,111,114,32,97,108,108,32,98,117,116,32,112,101,114,115,111,110,97,108,32,117,115,101,32,111,102,32,116,104,105,115,32,99,111,100,101,46,32,83,101,101,32,84,101,114,109,115,32,111,102,32,85,115,101,32,97,116,32,100,121,110,45,119,101,98,46,99,111,109];dw_Inf.get=function(ar){var s="";var ln=ar.length;for(var i=0;i<ln;i++){s+=String.fromCharCode(ar[i]);}return s;};dw_Inf.mg=dw_Inf.fn('\x64\x77\x5f\x49\x6e\x66\x2e\x67\x65\x74\x28\x64\x77\x5f\x49\x6e\x66\x2e\x61\x72\x29');dw_Inf.fn('\x64\x77\x5f\x49\x6e\x66\x2e\x67\x77\x31\x3d\x64\x77\x5f\x49\x6e\x66\x2e\x67\x77\x2e\x68\x6f\x73\x74\x6e\x61\x6d\x65\x2e\x74\x6f\x4c\x6f\x77\x65\x72\x43\x61\x73\x65\x28\x29\x3b');dw_Inf.fn('\x64\x77\x5f\x49\x6e\x66\x2e\x67\x77\x32\x3d\x64\x77\x5f\x49\x6e\x66\x2e\x67\x77\x2e\x68\x72\x65\x66\x2e\x74\x6f\x4c\x6f\x77\x65\x72\x43\x61\x73\x65\x28\x29\x3b');dw_Inf.x0=function(){dw_Inf.fn('\x69\x66\x28\x21\x28\x64\x77\x5f\x49\x6e\x66\x2e\x67\x77\x31\x3d\x3d\x22\x22\x7c\x7c\x64\x77\x5f\x49\x6e\x66\x2e\x67\x77\x31\x3d\x3d\x22\x31\x32\x37\x2e\x30\x2e\x30\x2e\x31\x22\x7c\x7c\x64\x77\x5f\x49\x6e\x66\x2e\x67\x77\x31\x2e\x69\x6e\x64\x65\x78\x4f\x66\x28\x22\x6c\x6f\x63\x61\x6c\x68\x6f\x73\x74\x22\x29\x21\x3d\x2d\x31\x7c\x7c\x64\x77\x5f\x49\x6e\x66\x2e\x67\x77\x32\x2e\x69\x6e\x64\x65\x78\x4f\x66\x28\x22\x64\x79\x6e\x2d\x77\x65\x62\x2e\x63\x6f\x6d\x22\x29\x21\x3d\x2d\x31\x29\x29\x61\x6c\x65\x72\x74\x28\x64\x77\x5f\x49\x6e\x66\x2e\x6d\x67\x29\x3b\x64\x77\x5f\x66\x6f\x6e\x74\x53\x69\x7a\x65\x72\x44\x58\x2e\x72\x65\x61\x64\x79\x3d\x74\x72\x75\x65\x3b');};dw_Inf.fn('\x64\x77\x5f\x49\x6e\x66\x2e\x78\x30\x28\x29\x3b');