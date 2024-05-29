use gnomo;
select*from allenatori;
CREATE TABLE Allenatori(
 id INT AUTO_INCREMENT PRIMARY KEY,
logo VARCHAR(255) Unique,
nomeallenatore VARCHAR (255),
discipline VARCHAR (255),
descrizione TEXT,
trimestre VARCHAR(255),
semestre VARCHAR(255),
annuale VARCHAR(255),
email VARCHAR(255) Unique,
cellulare VARCHAR(255) Unique,
sede VARCHAR(255),
info VARCHAR(255)
)ENGINE='innoDb';



CREATE TABLE Utenti(
 id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(255) ,
cognome VARCHAR(255) ,
email VARCHAR(255) Unique,
genere VARCHAR(255) ,
nascita DATE,
username VARCHAR(255) COLLATE utf8mb4_bin UNIQUE,
tipo VARCHAR(255) ,
password VARCHAR(255) 
)ENGINE='innoDb';


create table Associa(
profilo INT UNIQUE PRIMARY KEY,
allenatore INT UNIQUE,
FOREIGN KEY (profilo) REFERENCES Utenti(id),
FOREIGN KEY (allenatore) REFERENCES Allenatori(id)
)ENGINE='innoDb';



