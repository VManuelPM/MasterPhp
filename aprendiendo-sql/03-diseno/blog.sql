/**
 * Author:  VManuel
 * Created: 13-may-2019
 */

/*
CREACION DE BASE DE DATOS BLOG
*/

#CREACION DE TABLA USUARIO#

CREATE TABLE usuarios (
id          int(255) auto_increment not null,
nombre      varchar(100) not null,
apellidos   varchar(100) not null,
email       varchar(255) not null,
password    varchar(255) not null,
fecha       date not null,
CONSTRAINT pk_usuarios PRIMARY KEY(id),
CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb;


#CREACION DE TABLA CATEGORIAS#

CREATE TABLE categorias(
id          int(255) auto_increment not null,
nombre      varchar(100) not null,
CONSTRAINT pk_categorias PRIMARY KEY(id)
)ENGINE=InnoDb;


#CREACION DE TABLA ENTRADAS#

CREATE TABLE entradas(
id              int(255) auto_increment not null,
usuario_id      int(255) not null,
categoria_id    int(255) not null,
titulo          varchar(255) not null,
descripcion     MEDIUMTEXT, 
fecha           date not null,
CONSTRAINT pk_entradas PRIMARY KEY(id),
CONSTRAINT fk_entrada_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
CONSTRAINT fk_categoria_id FOREIGN KEY(categoria_id) REFERENCES categorias(id)
)ENGINE=InnoDb;
