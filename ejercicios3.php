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

// Punto 6
echo "<hr>";
$palabras = ["php","javascript","python"];

$mayusculas = array_map("strtoupper", $palabras);

foreach($mayusculas as $key){
    echo "$key ";
}

// Punto 7
echo "<hr>";
$palabras = ["hola","mundo","php","programar"];

function contarVocales(string $palabra): int {
    $vocales = ['a', 'e', 'i', 'o', 'u'];
    $contador = 0;

    for ($i = 0; $i < strlen($palabra); $i++) {
        if (in_array(strtolower($palabra[$i]), $vocales)) {
            $contador++;
        }
    }

    return $contador;
}

foreach ($palabras as $palabra) {
    echo $palabra . " => " . contarVocales($palabra) . "<br>";
}
// Punto 8
echo "<hr>";
$pares = [];
$impares = [];
$numeros = [1,2,3,4,5,6,7];

foreach($numeros as $key){
    if ($key % 2 === 0){
        $pares[] = $key;
    } else {
        $impares[] = $key;
    }
}
echo "pares: ";

foreach($pares as $key){
    echo "$key ";
}
echo "<br>";
echo "impares: ";
foreach($impares as $key){
    echo "$key ";
}

//Punto 9
echo "<hr>";
$ventas = [ "Juan" => 200, "Ana" => 450, "Pedro" => 150, "Laura" => 600 ];

$mayor_venta = 0;
$nombre_persona_venta = null;

$total = 0;
foreach($ventas as $key => $value){
    $total += $value; 
    if ($value >= $mayor_venta){
        $mayor_venta = $value;
        $nombre_persona_venta = $key; 
    }
}


$promedio_ventas = $total/count($ventas);
echo "Total ventas: $total";
echo "<br>";
echo "Promedio ventas: $promedio_ventas";
echo "<br>";
echo "$nombre_persona_venta $mayor_venta ";




// Punto 10
echo "<hr>";
$productos = [
    ["nombre"=>"Laptop","precio"=>1200],
    ["nombre"=>"Mouse","precio"=>25],
    ["nombre"=>"Teclado","precio"=>80]
];

usort($productos, function($a, $b) {
    return $a["precio"] <=> $b["precio"];
});

foreach ($productos as $producto) {
    echo $producto["nombre"] . " - " . $producto["precio"] . PHP_EOL;
}

//Punto 11
echo "<hr>";
$numeros = [1,1,2,3,3,3,4,4,4,4];

foreach($numeros as $numero){
    for($i = 0; $i < $numero; $i++){
        echo "*";
    }
    echo "<br>";
}

// Punto 12
echo "<hr>";
$palabras = ["php","java","php","python","java","php"];
$palabras_no_repetidas = [];
foreach($palabras as $key){
    if(!in_array($key, $palabras_no_repetidas)){
        $palabras_no_repetidas[] = $key;
    }
}
$contador = [];
foreach($palabras_no_repetidas as $key){
    $contador[$key] = 1;
    foreach($palabras as $key2){
        if ($key === $key2){
            $contador[$key] += 1; 
        }
    }
}

// Punto 13
// Punto 14
$matriz = [ [1,2,3], [4,5,6], [7,8,9] ];
$suma = [];

foreach($matriz as $fila){
    foreach($fila as $columna => $valor){
        $suma[$columna] = ($suma[$columna] ?? 0) + $valor;
    }
}

foreach($suma as $key => $value){
        echo "$key => $value <br>";
}

// Punto 15
echo "<hr>";
$estudiantes = [ 
    ["nombre"=>"Ana","nota"=>4],
    ["nombre"=>"Luis","nota"=>2],
    ["nombre"=>"Carlos","nota"=>5],
    ["nombre"=>"Maria","nota"=>3]
];
$estudiantes = [
    ["nombre"=>"Ana","nota"=>4],
    ["nombre"=>"Luis","nota"=>2],
    ["nombre"=>"Carlos","nota"=>5],
    ["nombre"=>"Maria","nota"=>3]
];

$aprobados = 0;
$reprobados = 0;
$suma = 0;

foreach ($estudiantes as $estudiante) {
    $nota = $estudiante["nota"];
    
    $suma += $nota;

    if ($nota >= 3) {
        $aprobados++;
    } else {
        $reprobados++;
    }
}

$promedio = $suma / count($estudiantes);

echo "Aprobados: $aprobados <br>";
echo "Reprobados: $reprobados <br>";
echo "Promedio: $promedio <br>";

// Bonus
echo "<hr>";
$usuarios = [ 
    ["nombre"=>"Ana","edad"=>17], 
    ["nombre"=>"Luis","edad"=>21], 
    ["nombre"=>"Carlos","edad"=>15], 
    ["nombre"=>"Maria","edad"=>30] 
];

$mayores = [];
$menores = [];
foreach($usuarios as $key){
    $edad = $key["edad"];
    if ($edad >= 18){
        $mayores[] = $key["nombre"];
    }else{
        $menores[] = $key["nombre"];
    }
}
echo "Mayores de edad: <br>";
foreach($mayores as $key){
    echo "  - $key <br>";
}
echo "<br>";
echo "Menores de edad: <br>";
foreach($menores as $key){
    echo "  - $key <br>";
}