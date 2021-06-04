function zt(id) {
			if (id.innerHTML==="▲赞同") {
				id.style.color="white";
				//id.style.fontWeight="bold";
				id.innerHTML="▲已赞";
				id.style.background="#0066FF"
			}
			else {
				id.style.color="#0066FF";
				//id.style.fontWeight="bold";
				id.innerHTML="▲赞同";
				id.style.background="#E5EFFF"
			};

				
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