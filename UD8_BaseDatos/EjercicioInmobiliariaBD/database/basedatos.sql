CREATE DATABASE IF NOT EXISTS `lindavista` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lindavista`;
DROP TABLE IF EXISTS viviendas;

CREATE TABLE viviendas
(
    id            smallint unsigned                                                    NOT NULL AUTO_INCREMENT,
    tipo          enum ('Piso','Adosado','Chalet','Casa')                              NOT NULL,
    zona          enum ('Centro','Chana','Zaidin', 'Albaicin','Sacromonte', 'Realejo') NOT NULL,
    direccion     varchar(100)                                                         NOT NULL,
    ndormitorios  enum ('1','2','3','4','5')                                           NOT NULL DEFAULT '3',
    precio        decimal                                                              NOT NULL,
    tamano        decimal                                                              NOT NULL,
    extras        set ('Piscina','Jardin','Garage')                                    NOT NULL,
    foto          varchar(50)                                                          NULL,
    observaciones text                                                                 NULL,
    PRIMARY KEY (id)
) ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

INSERT INTO viviendas (tipo, zona, direccion, ndormitorios, precio, tamano, extras, foto, observaciones)
VALUES ('Piso', 'Centro', 'Calle Recogidas 1', '3', 150000, 100, 'Piscina,Jardin', 'recogidas.jpg',
        'Piso en el centro de Granada'),
       ('Piso', 'Centro', 'Calle Gran Via 2', '2', 120000, 80, 'Garage', 'granvia.jpg', 'Piso en el centro de Granada'),
       ('Piso', 'Centro', 'Calle Mesones 3', '1', 100000, 60, 'Piscina', 'mesones.jpg',
        'Piso en el centro de Granada');

-- borrar datos vivienda

select * from viviendas;