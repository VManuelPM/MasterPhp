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

#Añadir Columna#
Alter Table usuarios_renombre ADD website varchar(100) not null;

#Añadir restriccion a columna#
ALTER TABLE usuarios_renombre ADD CONSTRAINT uq_email UNIQUE(email);

#Borrar una columna#
ALTER TABLE usuarios_renombre DROP website;