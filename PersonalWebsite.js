var handIn = {
    Success: function(){
    	window.alert('欢迎登陆');
    }
}
function MakeItVisiable(){
	var obj=document.getElementById("one");
	if(obj.style.visibility==="hidden"){
	obj.style.visibility="visible";}
	else obj.style.visibility="hidden";
}