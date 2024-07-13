<!DOCTYPE html>
<html>
<head>
	<title>SimpleXML | LeeArchivo</title>
	<meta charset="utf-8">
	<?php
//$libros = simplexml_load_file("libros.xml");
//$libros2 = new SimpleXMLElement("libros.xml",null,true);
$autos = <<< END
<autos>
	<auto>
		<marca>Ford</marca>
		<color>negro</color>
	</auto>
	<auto>
		<marca>Toyota</marca>
		<color>rojo</color>
	</auto>
</autos>
END;
//$autos_xml = simplexml_load_string($autos);
$autos2_xml = new SimpleXMLElement($autos);
		print "<pre>";
		print var_dump($autos2_xml);
		print "</pre>";
	?>
</head>
<body>

</body>
</html>