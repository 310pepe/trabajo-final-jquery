# trabajojqueryestudio
Para poder utilizar este proyecto se necesita una conexión a internet, ya que es necesario para que carguen algunos componentes
# Se necesita
Para utilizar el ejercicio con jquery y ajax se necesita una base de datos y un servidor web local, coloque los archivos dentro de la carpeta htdocs o www para que el programa se ejecute correctamente, se necesita que cree una base de datos llamada trabajo y ejecutar el siguiente script

use trabajo;
CREATE TABLE `prueba_users` (
  `ID` bigint UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `url` varchar(100) NOT NULL DEFAULT ''
) ;
INSERT INTO `prueba_users` (`ID`, `username`, `email`, `url`) VALUES
(1, 'Pedro', 'thisismy@email.com', 'http://miblog.name'),
(2, 'Juan', 'elcorreode@juan.com', 'http://www.misitio.com'),
(3, 'Ana', 'escribrea@ana.com', 'http://lawebdeana.com');
CREATE TABLE IF NOT EXISTS `items` (
`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
`title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
`description` text COLLATE utf8_unicode_ci NOT NULL,
`created_at` timestamp NULL DEFAULT NULL,
`updated_at` timestamp NULL DEFAULT NULL,
PRIMARY KEY (`id`)
) ;
CREATE TABLE `items` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) 
