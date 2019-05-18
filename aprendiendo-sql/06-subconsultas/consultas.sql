/**
 * Author:  VManuel
 * Created: 18-may-2019
 */

/*
-Las subconsultas son consultas que se ejecutan dentro de otras.
-También consiste en utilizar los resultados de la subconsulta para operar en la
    consulta principal
- Jugamos con las claves foraneas.
*/

#SACAR USUARIOS CON ENTRADAS#
SELECT * FROM usuarios WHERE id IN(SELECT usuario_id FROM entradas);

#SACAR LOS USURIOS QUE TENGAN ALGUNA ENTRADA QUE EN SU TITULO HABLEN DE GTA#
SELECT nombre,apellidos FROM usuarios WHERE id
IN
(SELECT usuario_id FROM entradas WHERE titulo LIKE '%GTA%');

#sacar todas las entradas de la categoria acción utilizando su nombre#
SELECT titulo FROM entradas WHERE categoria_id
IN(SELECT id FROM categorias WHERE nombre='Acción');

#mostrar las categorias con mas de tres entradas#
SELECT nombre FROM categorias WHERE
id IN (SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(categoria_id)>=3);

#mostrar los usuarios que crearon una entrada un martes#
SELECT * FROM usuarios WHERE id IN(SELECT usuario_id FROM entradas WHERE DAYOFWEEK(fecha)=2);

#mostrar el nombre del usuario que tenga mas entradas#
SELECT nombre FROM usuarios WHERE id =
(SELECT usuario_id from entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1);

#mostrar las categorias sin entradas