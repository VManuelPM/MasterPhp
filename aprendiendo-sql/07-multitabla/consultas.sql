/**
 * Author:  VManuel
 * Created: 19-may-2019
 */

/*
CONSULTAS MULTITABLAS:
    Son consultas que sirven para consultar varias tablas en una sola sentencia
*/

#Mostrar las entradas con el nombre del usuario, del autor y la categoria#

SELECT e.titulo,u.nombre, c.nombre 
FROM entradas e,usuarios u, categorias c
WHERE e.usuario_id=u.id AND e.categoria_id=c.id;


#INNER JOIN#
#hace practicamente lo mismo que las multitablas#
SELECT e.id, e.titulo, u.nombre,c.nombre
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id=u.id
INNER JOIN categorias c ON e.categoria_id=c.id; 


#Mostrar el nombre de las categorias y al lado cuantas entradas tienen#
SELECT c.nombre, count(e.id) FROM categorias c, entradas e 
WHERE e.categoria_id=c.id GROUP BY e.categoria_id; 

/*LEFT JOIN mantiene todas las filas de la tabla de la izquierda y si hay una coincidencia 
muestra los valores en caso de que no haya nada null o muestra cero*/
SELECT c.nombre, count(e.id) FROM categorias c, entradas e
LEFT JOIN entradas e ON e.categoria_id = c.id 
GROUP BY e.categoria_id;

/*RIGHT JOIN mantiene todas las filas de la tabla de la derecha y si hay una coincidencia 
muestra los valores en caso de que no haya nada null o muestra cero*/
SELECT c.nombre, count(e.id) FROM categorias c, entradas e
RIGHT JOIN entradas e ON e.categoria_id = c.id 
GROUP BY e.categoria_id;


#Mostrar el email de los usuarios y al lado cuantas entradas tienen#
SELECT u.email, COUNT(titulo) FROM usuarios u, entradas e
WHERE e.usuario_id = u.id GROUP BY e.usuario_id;


 