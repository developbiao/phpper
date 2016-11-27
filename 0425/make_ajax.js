/*
@Descrie:自己动手封闭一个Ajax
@Sutdent:GongBiao
@Date:2016/04/25
*/

function ajax(url, fnSucce, fnFaild){
	//1. creaet ajax object
	if(window.XMLHttpRequest){
		var oAjax = new XMLHttpRequest();
	}else{
		var oAjax = new ActiveXObject("Micorosoft.XMLHTTP");
	}

	//2. connect server
	oAjax.open('GET', url + '?t='  + new Date().getTime(), true);

	//3. send client request
	oAjax.send();

	//4.revice call back
	oAjax.onreadystatechange = function (){
		if(oAjax.readyState == 4){ //browser finsihed read serer 
				if(oAjax.status == 200){
					fnSucce(oAjax.responseText);
				}else{
					if(fnFaild){
						fnFaild(oAjax.status);
					}
				}
		}
	};
}