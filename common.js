
//1.封装函数，获取id值
function $(id){
  return document.getElementById(id);
}

//2.创建xhr对象
function createXhr(){
    var xhr=null;
    if(window.XMLHttpRequest){
        xhr=new XMLHttpRequest(); //标准创建
    }else{
        //IE8以下的创建方式
        xhr=new ActiveXObject("Microsoft.XMLHttp");
    }
    return xhr;
}
