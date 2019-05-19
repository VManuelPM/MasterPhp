/**
 * Author:  VManuel
 * Created: 18-may-2019
 */

#Consulta con una condición#
SELECT * FROM USUARIOS WHERE email='victor@victor.com';

/*
OPERADORES DE COMPARACIÓN

Entre       between A and B
En          in
Es nulo     is null
No nulo     is not null
Como        like
No es como  not like
*/

/*
OPERADORES LOGICOS
 
O   OR
Y   AND
NO  NOT
*/

/*
COMODINES:
cualquier cantidad de caracteres: %
Un caracter desconocido: _

*/

#Ejemplos#

SELECT nombre,apellidos FROM usuarios WHERE YEAR(fecha) = 2019;

SELECT nombre,apellidos FROM usuarios WHERE YEAR(fecha) != 2019;

SELECT nombre,apellidos FROM usuarios WHERE apellidos LIKE '%a%' AND password='1234';

SELECT UPPER(nombre), apellidos FROM usuarios WHERE (LENGTH(nombre)>5) AND (YEAR(fecha) < 2020);



