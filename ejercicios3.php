<?php
// Punto 1
$numeros = [1,2,3,2,4,1,5,3];

$filtro = array_unique($numeros);
foreach($filtro as $key){
    echo $key;
}

// Punto 2
echo "<hr>";
$numeros = [4,7,10,3,8,5];
$pares = 0;
$inpares = 0;
foreach(array_filter($numeros, fn($key) => $key % 2 == 0) as $llave){
    $pares++;
};
foreach(array_filter($numeros, fn($key) => $key % 2 != 0 ) as $llave){
    $inpares++;
};
echo "Pares: $pares <br>";
echo "Inpares: $inpares <br>";


// Punto 3

echo "<hr>";
$numeros = [1,2,3,4,5];
$invertido = [];

for ($i = count($numeros) - 1; $i >= 0; $i--) {
    $invertido[] = $numeros[$i];
}

foreach($invertido as $key){
    echo "$key ";
}

// Punto 4
echo "<hr>";

$numeros = [21, 5, 20, 18, 15];
$mayor = 0;
$semayor = 0;
foreach($numeros as $key){
    if ($key > $mayor){
        $mayor = $key;
    }
}
foreach($numeros as $key){
    if ($key > $semayor and $key < $mayor){
        $semayor = $key;
    }
}
echo "Mayor: " . $mayor . "<br>";
echo "Segundo numero mas grande: " . $semayor;

// Punto 5
echo "<hr>";

$palabras = ["casa","carro","perro","cama","gato"];
$letra = "c";

foreach(array_filter($palabras,fn($key) => $key[0] === $letra) as $value){
    echo $value . " ";
}

