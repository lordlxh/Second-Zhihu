function dianzan(id) {
			if(/▲喜欢/.test(id.innerHTML)){
				id.style.color="white";
				//id.style.fontWeight="bold";
				id.style.background="#0066FF";
				var xmlhttp;

			if (window.XMLHttpRequest)
  			{// code for IE7+, Firefox, Chrome, Opera, Safari
  				xmlhttp=new XMLHttpRequest();
  				}

		else
  		{// code for IE6, IE5
  		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  			}
  			xmlhttp.open("GET","add.php?qid="+id.id,true);
  			//window.open("add.php?qid="+id.id);
			xmlhttp.send();
		xmlhttp.onreadystatechange=function()
  		{
  		if (xmlhttp.readyState==4 && xmlhttp.status==200)
    		{
    		id.innerHTML="▲已赞"+xmlhttp.responseText;
    		}
  			}

			}


			else {
				id.style.color="#0066FF";
				//id.style.fontWeight="bold";
				id.innerHTML="";
				id.style.background="#E5EFFF"
				var xmlhttp;

			if (window.XMLHttpRequest)
  			{// code for IE7+, Firefox, Chrome, Opera, Safari
  				xmlhttp=new XMLHttpRequest();
  				}
  				
		else
  		{// code for IE6, IE5
  		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  			}
  			xmlhttp.open("GET","minus.php?qid="+id.id,true);
  			//window.open("add.php?qid="+id.id);
			xmlhttp.send();
		xmlhttp.onreadystatechange=function()
  		{
  		if (xmlhttp.readyState==4 && xmlhttp.status==200)
    		{
    		id.innerHTML="▲喜欢"+xmlhttp.responseText;
    		}
  			}

			}

				
}
function c(id) {
			if (id.innerHTML==="▼踩") {
				id.style.color="white";
				//id.style.fontWeight="bold";
				id.innerHTML="▼已踩";
				id.style.background="#0066FF"
			}
			else {
				id.style.color="#0066FF";
				//id.style.fontWeight="bold";
				id.innerHTML="▼踩";
				id.style.background="#E5EFFF"
			};
}
function cnt(a){
	alert(getElementById("cntbdy"));
	getElementById("cntbdy").style.display="none";
	var user=getParamter("uname");
	document.getElementById('commenters').value=user;
}

function zt(id){
	
			if(/▲喜欢/.test(id.innerHTML)){
				id.style.color="white";
				//id.style.fontWeight="bold";
				id.style.background="#0066FF";
				var xmlhttp;

			if (window.XMLHttpRequest)
  			{// code for IE7+, Firefox, Chrome, Opera, Safari
  				xmlhttp=new XMLHttpRequest();
  				}

		else
  		{// code for IE6, IE5
  		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  			}
  			xmlhttp.open("GET","addc.php?cid="+id.id,true);
  			//window.open("add.php?qid="+id.id);
			xmlhttp.send();
		xmlhttp.onreadystatechange=function()
  		{
  		if (xmlhttp.readyState==4 && xmlhttp.status==200)
    		{
    		id.innerHTML="▲已赞"+xmlhttp.responseText;
    		}
  			}

			}


			else {
				id.style.color="#0066FF";
				//id.style.fontWeight="bold";
				id.innerHTML="";
				id.style.background="#E5EFFF"
				var xmlhttp;

			if (window.XMLHttpRequest)
  			{// code for IE7+, Firefox, Chrome, Opera, Safari
  				xmlhttp=new XMLHttpRequest();
  				}
  				
		else
  		{// code for IE6, IE5
  		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  			}
  			xmlhttp.open("GET","minusc.php?cid="+id.id,true);
  			//window.open("add.php?qid="+id.id);
			xmlhttp.send();
		xmlhttp.onreadystatechange=function()
  		{
  		if (xmlhttp.readyState==4 && xmlhttp.status==200)
    		{
    		id.innerHTML="▲喜欢"+xmlhttp.responseText;
    		}
  			}

			}

				
}
