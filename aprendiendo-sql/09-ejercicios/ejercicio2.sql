/**
 * Author:  VManuel
 * Created: 22-may-2019
 */

/*
2. Modificar la comision de los vendedores y ponerla al 0.5% cuando
ganan mas de 50000
*/

UPDATE vendedores SET comision=0.5 WHERE sueldo >= 5000;