
-- use P1;
-- set storage_engine=Innodb;

Drop table if exists Fruit;
CREATE TABLE Fruit (
    product_id  INT NOT NULL AUTO_INCREMENT   
    , name  VARCHAR(150) NOT NULL
    , description TEXT NOT NULL
    , quantity_stock INTEGER(7) NOT NULL
    , kilo_price DECIMAL(9,2) NOT NULL
    , PRIMARY KEY (product_id)
);
INSERT INTO Fruit VALUES 
(1, 'Orange', 'Provenance de Italie', 12, 2.95)
, (2, 'Pèche', 'provenance d un producteur local', 50, 1.95)
, (3, 'Poire', 'Origine Belgique', 21, 5.95)
, (4, 'Fraise', 'provenance d Espagne', 16, 3.70)
, (5, 'Pomme', 'Producteur local', 85, 4.75)
, (6, 'Banane', 'originaire de Somalie', 74, 4.75);

Drop table if exists Produits;
CREATE TABLE Produits (
    product_id  INT NOT NULL AUTO_INCREMENT   
    , name  VARCHAR(150) NOT NULL
    , description TEXT NOT NULL
    , quantity_stock INTEGER(7) NOT NULL
    , kilo_price DECIMAL(9,2) NOT NULL
    , fruit boolean NOT NULL
    , PRIMARY KEY (product_id)
);
INSERT INTO Produits VALUES 
(1, 'Courgette', 'Provenance de Italie', 17, 1.95 ,false)
, (2, 'Carotte', 'provenance d un producteur local', 30, 8.95 ,false)
, (3, 'Obergine', 'Origine Belgique', 41, 6.95 ,false)
, (4, 'Poireau', 'provenance d Espagne', 76, 4.70 ,false)
, (5, 'Salade', 'Producteur local', 85, 2.75 ,false)
, (6, 'Epinard', 'originaire de Somalie', 44, 5.75 ,false)
, (7, 'Orange', 'Provenance de Italie', 12, 2.95 ,true)
, (8, 'Pèche', 'provenance d un producteur local', 50, 1.95 ,true)
, (9, 'Poire', 'Origine Belgique', 21, 5.95 ,true)
, (10, 'Fraise', 'provenance d Espagne', 16, 3.70 ,true)
, (11, 'Pomme', 'Producteur local', 85, 4.75 ,true)
, (12, 'Banane', 'originaire de Somalie', 74, 4.75 ,true);
Drop table if exists Client;
CREATE TABLE Client (
    client_id  INT NOT NULL AUTO_INCREMENT   
    , name  VARCHAR(150) NOT NULL
    , first_name  VARCHAR(150) NOT NULL
    , mail  VARCHAR(150) NOT NULL
    , password  VARCHAR(150) NOT NULL
    , PRIMARY KEY (client_id)
);
INSERT INTO Client VALUES 
(1, 'Admin','Admin', 'Admin@admin.fr', 'admin');