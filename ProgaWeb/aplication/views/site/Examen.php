<?php
$str ="a/bn";
echo $str;

echo "<br>";


$a=false;
$b=true;
$c=false;
if($a ? $b :$c){
   echo "false"; 
}
else{
   echo "true";//operador ternario 
}
 echo "<br>";

 /*for(;;){
    echo '<p>hola</p>';//esto es un ciclo infinito 
}*/
 
 echo "<br>";
 $a =array(1,2,3);
 foreach($a as $x){
     $x*=2;
 }
 echo $a[0]*$a[1]*$a[2];//respuesta es 6 
 
 echo "<br>";
 
 //en la pregunta  6 no puede haber herencia multiple
 $perro="Gato";
 $gato=&$perro;
 $gato= "Perro";
 echo $perro." ".$gato;
 echo "<br>";
 
 $val=0;
 if(!$val){
     echo ";verdadero";
     
 }else{
     echo ";falso";
 }
 //0 es falso en php tonses la respuesta es verdadero
 //10 es igual d la 11 es igual a d 
 
?>
