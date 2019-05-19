/**
 * Author:  VManuel
 * Created: 19-may-2019
 */

/*
VISTAS:
    Se pueden definir como una consulta almacenada en la base de datos que 
    se utiliza como una tabla virtual
No almacena datos si no que utiliza asociaciones y los datos originales 
de las tablas, de forma que siempre se mantiene actualizada.
*/
CREATE VIEW entradas_con_nombres AS
SELECT e.id, e.titulo, u.nombre,c.nombre
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id=u.id
INNER JOIN categorias c ON e.categoria_id=c.id; 

