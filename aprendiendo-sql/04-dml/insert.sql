/**
 * Author:  VManuel
 * Created: 13-may-2019
 */

#Insertar nuevos registros#
INSERT into usuarios VALUES (null,'Victor','Moreno','victor@victor.com','1234','2019-05-01');
INSERT into usuarios VALUES (null,'Antonio','Martinez','antonio@antonio.com','1234','2019-08-10');
INSERT into usuarios VALUES (null,'Paco','Lopez','paco@paco.com','1234','2020-05-01');

#Insertar filas son con ciertas columnas#
INSERT INTO usuarios(email,password) VALUES('admin@admin.com','admin');