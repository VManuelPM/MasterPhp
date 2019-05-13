/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  VManuel
 * Created: 12-may-2019
 */

/*
TIPO DE DATO:
    int(n° de cifras) = ENTERO
    integer = ENTERO (maximo = 4294967295)
    varchar(n° de caracteres) = String (maximo 255)
    char
    float(n° de cifras, n° decimales) = decima/coma flotante
    date, time, timestamp

//STRING MAS GRANDES
    TEXT = permite guardar 65535 caracteres
    MEDIUMTEXT = 16 millones
    LONGTEXT = 16 billones de caracteres

//ENTEROS MAS GRANDES
    MEDIUMINT
    BIGINT

*/


/*
CREAR UNA TABLA
*/

CREATE TABLE usuarios(
id  int(11) auto_increment not null,
nombre varchar(100) not null,
apellidos varchar(255) default('Hola que tal'),
email varchar(100) not null,
password varchar(255),
CONSTRAINT pk_usuarios PRIMARY KEY(id)
);
