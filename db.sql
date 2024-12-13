CREATE TABLE `movies` (
  `id_movie` INT(11) NOT NULL auto_increment,
  `name` VARCHAR(100),
  `priority` INT NOT NULL,
  `description` VARCHAR(1023),
  PRIMARY KEY  (`id_movie`)
);