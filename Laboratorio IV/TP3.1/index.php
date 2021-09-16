<?php
 $name = 'juan,maria,pepe,andrea,jorgelina,cecilia';

///PUNTO 1
$arrayNames = array();
$arrayNames = explode(',',$name);

var_dump($arrayNames);
echo "-----------------------------";

//b
sort($arrayNames);
var_dump($arrayNames);

//c
$newArray = array();

for($i=0;$i<count($arrayNames);$i++){
    $newArray[$i] = ucfirst($arrayNames[$i]);
}
var_dump($newArray);

//d
$keys = array(1,2,3,4,5,6);

$arrayCombinado = array_combine($keys, $newArray);

var_dump($arrayCombinado);

//PUNTO 2
/*
$valor = 1;

function funcion($value, $array){
    $boolean = false; 
    $boolean = in_array($value, $array);
    return $boolean;
}
$boolean;
$boolean = funcion($valor, $keys);

if($boolean === false){
    echo "false";
}else{
    echo "true";
}

*/

//PUNTO 3
/*
$array = [  
    1     => "first value",
    2  => "second value",    
    3  => "tirth value",    
    4 => "fourth value",    
    5 => "fifth value",    
    6 => "sixth value", 
];

function funcion($key, $array){
    $boolean = array_key_exists($key, $array);
    if($boolean === true){
        echo "existe y es: " .$array[$key];
    }else
        echo "la key no existe pa";
}

funcion(1, $array);
*/

$string = array_keys($arrayCombinado);
var_dump($string);

?>