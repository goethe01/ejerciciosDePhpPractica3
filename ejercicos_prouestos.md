# EJERCICIOS DE PRACTICA 3 PHP

## 1. Eliminar números duplicados

- Debes crear un nuevo array sin valores repetidos.
- Entrada
    - $numeros = [1,2,3,2,4,1,5,3];
- Salida
    - [1,2,3,4,5]

- (puedes usar array_unique o hacerlo manualmente)

## 2. Contar números pares e impares
- Entrada
    - $numeros = [4,7,10,3,8,5];
- Salida
    - Pares: 3
    - Impares: 3
## 3. Invertir un array sin usar array_reverse

- Entrada
    - $numeros = [1,2,3,4,5];
- Salida
    - [5,4,3,2,1]

- (usa bucles)

## 4. Encontrar el segundo número más grande
- Entrada
    - $numeros = [10, 5, 20, 8, 15];
- Salida
    - Segundo mayor: 15

## 5. Filtrar palabras que empiezan con una letra
- Entrada
    - $palabras = ["casa","carro","perro","cama","gato"];
    - $letra = "c";
- Salida
    - ["casa","carro","cama"]

## 6. Convertir un array de palabras a mayúsculas
- Entrada
    - $palabras = ["php","javascript","python"];
- Salida
    - ["PHP","JAVASCRIPT","PYTHON"]
- (usa array_map y strtoupper)

## 7. Crear un contador de vocales
- Entrada
    - $palabras = ["hola","mundo","php","programar"];
- Salida
    - hola => 2
    - mundo => 2
    - php => 0
    - programar => 3

## 8. Agrupar números pares e impares

- Debes generar dos arrays.

- Entrada
    - $numeros = [1,2,3,4,5,6,7];
- Salida
    - pares: [2,4,6]
    - impares: [1,3,5,7]
## 9. Analizar ventas (array asociativo)
- Entrada
    - $ventas = [
"Juan" => 200,
"Ana" => 450,
"Pedro" => 150,
"Laura" => 600
];

- Salida
    - Total ventas: 1400
    - Promedio ventas: 350
    - Mayor venta: Laura

## 10. Ordenar productos por precio
- Entrada
    - $productos = [
["nombre"=>"Laptop","precio"=>1200],
["nombre"=>"Mouse","precio"=>25],
["nombre"=>"Teclado","precio"=>80]
];

- Salida
    - Mouse - 25
    - Teclado - 80
    - Laptop - 1200

- (ordenado por precio)

## 11. Crear un histograma de números
- Entrada
    - $numeros = [1,1,2,3,3,3,4,4,4,4];
- Salida
    - 1: **
    - 2: *
    - 3: ***
    - 4: ****

## 12. Encontrar palabras duplicadas
- Entrada
    - $palabras = ["php","java","php","python","java","php"];
- Salida
    - php => 3
    - java => 2

## 13. Generar matriz 3x3

- Debes crear una matriz 3x3 usando bucles.

- Salida esperada
    - 1 2 3
    - 4 5 6
    - 7 8 9

## 14. Sumar columnas de una matriz
- Entrada
    - $matriz = [
[1,2,3],
[4,5,6],
[7,8,9]
];
- Salida
    - Columna 1: 12
    - Columna 2: 15
    - Columna 3: 18
## 15. Simular un sistema de estudiantes
- Entrada
    - $estudiantes = [
["nombre"=>"Ana","nota"=>4],
["nombre"=>"Luis","nota"=>2],
["nombre"=>"Carlos","nota"=>5],
["nombre"=>"Maria","nota"=>3]
];

- Debes:

    - contar aprobados (>=3)

    - contar reprobados

    - promedio general

- Salida
    - Aprobados: 3
    - Reprobados: 1
    - Promedio: 3.5

## BONUS (ejercicio tipo backend real)
- Analizador de usuarios
- Entrada
    - $usuarios = [
["nombre"=>"Ana","edad"=>17],
["nombre"=>"Luis","edad"=>21],
["nombre"=>"Carlos","edad"=>15],
["nombre"=>"Maria","edad"=>30]
];

- Debes generar:

- Mayores de edad:
    - Luis
    - Maria

- Menores de edad:
    - Ana
    - Carlos

## Consejo importante antes de entrar a POO en PHP

Si dominas bien:

- array_map

- array_filter

- array_reduce

- usort

- arrays multidimensionales

la transición a POO + Laravel será MUCHO más fácil.