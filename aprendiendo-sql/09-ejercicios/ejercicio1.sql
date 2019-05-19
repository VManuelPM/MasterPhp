/**
 * Author:  VManuel
 * Created: 19-may-2019
 */

/*
Diseñar y crear la base de datos de un concesionario.
*/

CREATE DATABASE IF NOT EXISTS concesionario;
USE concesionario;

CREATE TABLE coches(
id          int(10) auto_increment not null,
modelo      varchar(100) not null,
marca       varchar(50),
precio      int(20) not null,
stock       int(255) not null,
CONSTRAINT pK_coches PRIMARY KEY(id) 
)ENGINE=InnoDB;

CREATE TABLE grupos(
id          int(10) auto_increment not null,
nombre      varchar(100) not null,
ciudad      varchar(100) not null,
CONSTRAINT pk_grupos PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE vendedores(
id          int(10) auto_increment not null,
grupo_id    int(10) not null,
jefe        int(10),
nombre      varchar(100) not null,
apellidos   varchar(150),
cargo       varchar(50),
fecha       date,
sueldo      float(20,2),
comision    float(10,2),
CONSTRAINT pk_vendedores PRIMARY KEY(id),
CONSTRAINT fk_vendedor_grupo FOREIGN KEY(grupo_id) REFERENCES grupos(id),
CONSTRAINT fk_vendedor_jefe FOREIGN KEY(jefe) REFERENCES vendedores(id)
)ENGINE=InnoDB;


CREATE TABLE clientes(
id              int(10) auto_increment not null, 
vendedor_id     int(10),     
nombre          varchar(150) not null,
ciudad          varchar(100),
gastado         float(50,2),
fecha           date,
CONSTRAINT pk_clientes PRIMARY KEY(id),
CONSTRAINT fk_cliente_vendedor FOREIGN KEY(vendedor_id) REFERENCES vendedores(id)
)ENGINE=InnoDB;

CREATE TABLE encargos(
id              int(10) auto_increment not null,           
cliente_id      int(10) not null,      
coche_id        int(10) not null,
cantidad        int(100), 
fecha           date,
CONSTRAINT pk_encargos PRIMARY KEY(id),
CONSTRAINT fk_encargo_cliente FOREIGN KEY(cliente_id) REFERENCES clientes(id),
CONSTRAINT fk_encargo_coche FOREIGN KEY(coche_id) REFERENCES coches(id)
)ENGINE=InnoDB;

#RELLENAR BASE DE DATOS CON INFORMACION#

#COCHES# 
INSERT INTO coches VALUES(null,'Renault Clio','Renault',12000,13);
INSERT INTO coches VALUES(null,'Seat Panda','Seat',10000,10);
INSERT INTO coches VALUES(null,'Mercedez Ranchera','Mercedez Benz',32000,24);
INSERT INTO coches VALUES(null,'Porche Cayense','Porche',65000,5);
INSERT INTO coches VALUES(null,'Lambo Aventador','Lamborgini',17000,2);
INSERT INTO coches VALUES(null,'Ferrari Spider','Ferrari',245000,80);

#GRUPOS#
INSERT INTO grupos VALUES(null,'Vendedores A','Madrid');
INSERT INTO grupos VALUES(null,'Vendedores B','Madrid');
INSERT INTO grupos VALUES(null,'Directores Mecanicos','Madrid');
INSERT INTO grupos VALUES(null,'Vendedores A','Barcelona');
INSERT INTO grupos VALUES(null,'Vendedores B','Barcelona');
INSERT INTO grupos VALUES(null,'Vendedores C','Valencia');
INSERT INTO grupos VALUES(null,'Vendedores A','Bilbao');
INSERT INTO grupos VALUES(null,'Vendedores B','Pamplona');
INSERT INTO grupos VALUES(null,'Vendedores C','Santiago de Compostela');

#VENDEDORES#
INSERT INTO vendedores VALUES(null,1,null,'David','Lopez','Responsable de tienda',CURDATE(),30000,4);
INSERT INTO vendedores VALUES(null,1,1,'Fran','Martinez','Ayudante de tienda',CURDATE(),23000,2);
INSERT INTO vendedores VALUES(null,2,null,'Nelson','Sanchez','Responsable de tienda',CURDATE(),38000,5);
INSERT INTO vendedores VALUES(null,2,3,'Jesus','Lopez','Responsable de tienda',CURDATE(),12000,6);
INSERT INTO vendedores VALUES(null,3,null,'Victor','Lopez','Mecanico jefe',CURDATE(),50000,2);
INSERT INTO vendedores VALUES(null,4,null,'Antonio','Lopez','Vendedor de recambios',CURDATE(),13000,8);
INSERT INTO vendedores VALUES(null,5,null,'Salvador','Lopez','Vendedor experto',CURDATE(),60000,2);
INSERT INTO vendedores VALUES(null,6,null,'Joaquin','Lopez','Ejecutivo de cuentas',CURDATE(),80000,1);
INSERT INTO vendedores VALUES(null,6,8,'Luis','Lopez','Ayudante de tienda',CURDATE(),10000,10);

#CLIENTES#
INSERT INTO clientes VALUES(NULL,1,'Construcciones Diaz Inc','Alcobendas',20000,CURDATE());
INSERT INTO clientes VALUES(NULL,1,'Fruteria Antonia Inc','Fuenlabrada',40000,CURDATE());
INSERT INTO clientes VALUES(NULL,1,'Imprenta Martinez Inc','Barcelona',32000,CURDATE());
INSERT INTO clientes VALUES(NULL,1,'Jesus Colchones Inc','El prat',96000,CURDATE());
INSERT INTO clientes VALUES(NULL,1,'Bar Pepe Inc','Valencia',170000,CURDATE());
INSERT INTO clientes VALUES(NULL,1,'Tienda PC Inc','Murcia',245000,CURDATE());

#ENCARGOS#
INSERT INTO encargos VALUES(null,1,1,2, CURDATE());
INSERT INTO encargos VALUES(null,2,2,4, CURDATE());
INSERT INTO encargos VALUES(null,3,3,1, CURDATE());
INSERT INTO encargos VALUES(null,4,3,3, CURDATE()); 
INSERT INTO encargos VALUES(null,5,5,1, CURDATE());
INSERT INTO encargos VALUES(null,6,6,1, CURDATE());