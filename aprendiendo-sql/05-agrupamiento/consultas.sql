/**
 * Author:  VManuel
 * Created: 18-may-2019
 */

#CONSULTAS DE AGRUPAMIENTO#

SELECT titulo FROM entradas GROUP BY categoria_id;
SELECT COUNT(titulo) FROM entradas GROUP BY categoria_id;

#CONSULTAS DE AGRUPAMIENTO CON CONDICION#
/*HAVING ES COMO EL where normal pero para las condiciones de agrupamiento*/
SELECT COUNT(titulo) FROM entradas GROUP BY categoria_id HAVING COUNT(titulo) >=2 ;

SELECT AVG(id) AS 'Media de entradas' FROM entradas;
SELECT MAX(id) AS 'maximo id', titulo FROM entradas;