/* CREATE DATABASE deil; -- handled by mariadb docker automatically */
USE deil;
/*  -- handled by mariadb docker automatically
CREATE USER 'deil' IDENTIFIED BY 'password';
GRANT ALL ON *.* TO 'deil'@'%';
*/
create table docker_entrypoint_initdb (id int, created_at timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP);
insert into docker_entrypoint_initdb (id) values (1);
