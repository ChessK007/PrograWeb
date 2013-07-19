<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Expresiones Regulares</title>
</head>

<body>
</body>
</html>

<?php
  $string = "Hhfhfhddkkdkdkd45";
  $alfabeto='/^[a-z\[[:digit:]]]{0,40}$/i';
  
  $email='/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/';
  $mail='hector.9107@hotmail.com';
  if(preg_match($email, $mail)){
     echo "Chido tu cotorreo";
  }
  else{
     echo "Nel";
  }
  echo "<br>";
  $edad='/^[0-9]{1,2}$/i';
  $miedad=23;
  if(preg_match($edad, $miedad)){
     echo "Chido tu cotorreo";
  }
  else{
     echo "Nel";
  }
  
  echo "<br>";
  
  $nombre='/^(([a-z]\s*)*)$/i';
  $nom="Hector Miguel Abraham";
  if(preg_match($nombre, $nom)){
     echo "Chido tu cotorreo";
  }
  else{
     echo "Nel";
  }
  echo "<br>";
  
  $valAp='/^([a-z]*)$/i';
  $apellido="Capulin";
  if(preg_match($valAp, $apellido)){
     echo "Chido tu cotorreo";
  }
  else{
     echo "Nel";
  }
  
  echo "<br>";
  
  $fec='/^\d{4}\-\d{1,2}\-\d{1,2}$/';
  $date="2012-01-31";
  if(preg_match($fec, $date)){
     echo "Chido tu cotorreo";
  }
  else{
     echo "Nel";
  }
  echo "<br>";
  
  
  $control='/^\d{8}$/i';
  $nctr="09030613";
  if(preg_match($control, $nctr)){
     echo "Chido tu cotorreo";
  }
  else{
     echo "Nel";
  }
  
  echo "<br>";
  
  $h=array(
  'i'=>array('Hectorin')
  );
  
  echo $h['i'];
?>
