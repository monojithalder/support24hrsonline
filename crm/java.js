// JavaScript Document
xmlhttp2 = new XMLHttpRequest();

function updatedate(id)
{
	var name=document.getElementById('cust_name'+id).value;
	var address=document.getElementById('cust_address'+id).value;
	var phone=document.getElementById('cust_phone'+id).value;
	var system=document.getElementById('cust_system'+id).value;
	var os=document.getElementById('cust_os'+id).value;
	var problem=document.getElementById('cust_problem'+id).value;
	var serverpage='updatedate.php?name='+name+'&address='+address+'&phone='+phone+'&system='+system+'&os='+os+'&problem='+problem+'&id='+id;
	xmlhttp2.open('GET',serverpage,true);
	xmlhttp2.onreadystatechange = function() {
			if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
				//alert('asdas');
				alert(xmlhttp2.responseText);
				location.reload();
			}
	}
	xmlhttp2.send(null);
	xmlhttp2.close;
}
function deletedate(id)
{
	//var name=document.getElementById('cust_name'+id).value;
	//var address=document.getElementById('cust_address'+id).value;
	//var phone=document.getElementById('cust_phone'+id).value;
	//var system=document.getElementById('cust_system'+id).value;
	//var os=document.getElementById('cust_os'+id).value;
	//var problem=document.getElementById('cust_problem'+id).value;
	var serverpage='deletedata.php?id='+id;
	xmlhttp2.open('GET',serverpage,true);
	xmlhttp2.onreadystatechange = function() {
			if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
				alert(xmlhttp2.responseText);
				location.reload();
			}
	}
	xmlhttp2.send(null);
	xmlhttp2.close;
}
