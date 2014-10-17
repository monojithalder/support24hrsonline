// JavaScript Document
xmlhttp2 = new XMLHttpRequest();

function insertdata(page_name,box_name,head)
{
	///alert('aSDADA');
	var obj1=document.getElementById(box_name).value;
	if(obj1 != "")
	{
		var serverpage='insertdata.php?page_name='+page_name+'&data='+obj1+'&head='+head;
		xmlhttp2.open('GET',serverpage,true);
		xmlhttp2.onreadystatechange = function() {
				if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
					alert(xmlhttp2.responseText);
					
				}
				
		}
	}
	else
	{
		alert("Pls Enter Information");
	}
	//alert(string);
	xmlhttp2.send(null);
	xmlhttp2.close();
}
function enter(id)
{
	//alert('asdsa');
	var obj1=document.getElementById(id);
	var val=obj1.value;
	obj1.value=val+"<br />";
	obj1.focus();
	
}