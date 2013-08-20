function nuevoAjax()
{
	var xmlhttp=false; 
 		try 
    		{ 
        	xmlhttp=new ActiveXObject("Msxml2.XMLHTTP"); 
    		}
    		catch(e)
    		{ 
        		try
        		{ 
            	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP"); 
        		} 
        		catch(E) {xmlhttp=false;}
    		}
    if (!xmlhttp && typeof XMLHttpRequest!='undefined') {xmlhttp=new XMLHttpRequest();} 
    return xmlhttp;
}

function traerDatos()
{
    var cod=document.getElementById("placa").value;
    var campo1=document.getElementById("marca");
    var campo2=document.getElementById("config");
    var campo3=document.getElementById("placas");
	var campo4=document.getElementById("pesov");
	var campo5=document.getElementById("poliza");
	var campo6=document.getElementById("soat");
	var campo7=document.getElementById("fechav");
	var campo8=document.getElementById("propietario");
	var campo9=document.getElementById("ccp");
	var campo10=document.getElementById("direccionp");	
	var campo11=document.getElementById("telp");
	var campo12=document.getElementById("ciudadp");	
	var campo13=document.getElementById("conductor");
	var campo14=document.getElementById("ccc");
	var campo15=document.getElementById("direccionc");	
	var campo16=document.getElementById("lic");
	var campo17=document.getElementById("ciudadc");	
	var campo18=document.getElementById("tenedor");
	var campo19=document.getElementById("cct");
	var campo20=document.getElementById("direcciont");	
	var campo21=document.getElementById("telt");
	var campo22=document.getElementById("ciudadt");	

    var ajax=nuevoAjax();
    ajax.open("POST", "buscar-php.php", true); //cambiar campos y nombre scrip php
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("v="+cod);   
    ajax.onreadystatechange=function()
    {
        if (ajax.readyState==4)
        {
        var respuesta=ajax.responseXML;
        campo1.value=respuesta.getElementsByTagName("marca")[0].childNodes[0].data;
        campo2.value=respuesta.getElementsByTagName("config")[0].childNodes[0].data;
		campo3.value=respuesta.getElementsByTagName("placas")[0].childNodes[0].data;
        campo4.value=respuesta.getElementsByTagName("pesov")[0].childNodes[0].data;
        campo5.value=respuesta.getElementsByTagName("poliza")[0].childNodes[0].data;
		campo6.value=respuesta.getElementsByTagName("soat")[0].childNodes[0].data;
        campo7.value=respuesta.getElementsByTagName("fechav")[0].childNodes[0].data;
        campo8.value=respuesta.getElementsByTagName("propietario")[0].childNodes[0].data;
		campo9.value=respuesta.getElementsByTagName("ccp")[0].childNodes[0].data;
		campo10.value=respuesta.getElementsByTagName("direccionp")[0].childNodes[0].data;		
		campo11.value=respuesta.getElementsByTagName("telp")[0].childNodes[0].data;
		campo12.value=respuesta.getElementsByTagName("ciudadp")[0].childNodes[0].data;		
        campo13.value=respuesta.getElementsByTagName("conductor")[0].childNodes[0].data;
		campo14.value=respuesta.getElementsByTagName("ccc")[0].childNodes[0].data;
		campo15.value=respuesta.getElementsByTagName("direccionc")[0].childNodes[0].data;		
		campo16.value=respuesta.getElementsByTagName("lic")[0].childNodes[0].data;
		campo17.value=respuesta.getElementsByTagName("ciudadc")[0].childNodes[0].data;		
        campo18.value=respuesta.getElementsByTagName("tenedor")[0].childNodes[0].data;
		campo19.value=respuesta.getElementsByTagName("cct")[0].childNodes[0].data;
		campo20.value=respuesta.getElementsByTagName("direcciont")[0].childNodes[0].data;		
		campo21.value=respuesta.getElementsByTagName("telt")[0].childNodes[0].data;
		campo22.value=respuesta.getElementsByTagName("ciudadt")[0].childNodes[0].data;		

        }
    }
}
