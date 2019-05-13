/**
 * Author:  VManuel
 * Created: 12-may-2019
 */

/*
RENOMBRAR TABLA
*/
ALTER TABLE usuarios RENAME TO usuarios_renombre;

# CAMBIAR EL NOMBRE DE UNA COLUMNA #
ALTER TABLE usuarios_renombre CHANGE apellidos apellido varchar(100);

# MODIFICAR COLUMNA SIN CAMBIAR NOMBRE #
ALTER TABLE usuarios_renombre MODIFY apellido char(40) not null;