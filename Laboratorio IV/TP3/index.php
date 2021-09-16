<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //PUNTO 1
    //$myNumber = 123; 
    //$numberString = “123”;
    
     //echo $myNumber.$numberString;
     if(1-1){
        echo "It's right"; 
     }

     $var1 = 2;
     $var2 = 2;

     //punto 3 
     function multiplicar($var1, $var2){
         echo $var1 * $var2;
     }
     
     function dividir($var1, $var2){
        echo $var1 / $var2;
    }

     //multiplicar($var1, $var2);
     //dividir($var1, $var2);

     //punto 4
     $array = [  
        1     => "first value",
        "1"  => "second value",    
        1.2  => "tirth value",    
        true => "fourth value",    
        1+0.2 => "fifth value",    
        false !== null => "sixth value", 
    ];

    //punto 5
    $people = [ 
        ['name' => 'Martin', 'age' => 18, 'sex' => 'm'], 
        ['name' => 'Martina', 'age' => 25, 'sex' => 'f'], 
        ['name' => 'Pablo', 'age' => 27, 'sex' => 'm'], 
        ['name' => 'Paula', 'age' => 12, 'sex' => 'f'], 
        ['name' => 'Alexis', 'age' => 8, 'sex' => 'm'], 
        ['name' => 'Jacinta', 'age' => 33, 'sex' => 'f'], 
        ['name' => 'Epifania', 'age' => 45, 'sex' => 'f'], 
];

//var_dump($people);
//echo count($people);

$count=0;
/*
//inciso a
foreach ($people as $p){
    foreach($p as $key => $value){
        if($key === 'age'){
            if($value >= 18){
                $count ++;
            }
        }
    }
}
//echo "hay " . $count . " personas mayores de edad"; */

//inciso b
/*
$count=0;

foreach($people as $p) {
    $lessThan18 = false;
    $isFemale = false;
	foreach($p as $key => $value) {
		if($key === "age" ){
			if($value < 18) {
				$lessThan18 = true;
			}
		}
        
		if($key === "sex") {
			if($value === "f") {
				$isFemale = true;
			}
		}
		if($isFemale && $lessThan18) {
			$count++;
		}
	}
}

echo "hay " . $count . " mujeres menores de edad";
*/

//inciso c
/*
$s ='<table border="1">';

foreach ($people as $r) {
    $s .= '<tr>';

    foreach ($r as $v) {
        $s .= '<td>'.$v.'</td>';
    }

    $s .= '</tr>';
}

$s .= '</table>';
echo $s; */

/*
$s ='<table border="1">';

foreach ($people as $r) {
    $s .= '<tr>';

    foreach ($r as $key => $value) {
        if($key === "age"){
        $s .= '<td>'.$value.'</td>';
        }
    }

    $s .= '</tr>';
}

$s .= '</table>';
echo $s;
*/
//inciso d
/*
$arrayAge = array();
foreach($people as $s){
    foreach($s as $key => $value){
        if($key === "age")
        array_push($arrayAge, $value);
    }
} 

var_dump($arrayAge);
*/

//PUNTO 6 
/*
$day =  Date("l");
echo "El dia de la semana es en ingles dea " .$day;
    */

//

    ?>
<!-- PUNTO 7
<form action="action.php" method="post">
    <input type="number" name="totalSale" placeholder="Ingrese monto"> <br/>
    <input type="radio" name ="type" id="ropa" value="ropa">
    <label for="ropa">Ropa</label>
    <input type="radio" name ="type" id="mascota" value="mascota">
    <label for="mascota">Mascota</label>
    <button type="submit">Send</button>
</form>
-->
</body>

</html>