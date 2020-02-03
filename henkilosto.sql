-- Copy this to create the database:
CREATE TABLE henkilosto(
henkiloNumero INTEGER NOT NULL PRIMARY KEY,
etunimi VARCHAR(20) NOT NULL,
sukunimi VARCHAR(30) NOT NULL,
puhelin VARCHAR(15) NOT NULL,
osasto VARCHAR(15),
palkka DECIMAL(6,2)
);

-- Copy this only if you want to insert data in phpMyAdmin:
INSERT INTO henkilosto VALUES
('1', 'Matti', 'Puro', '0403234255', 'IT', '4400.00'), 
('2', 'Pirjo', 'Hakkila', '0445144086', 'Hallinto', '4100.00'),
('3', 'Liisa', 'Wallin', '0503250251', 'Markkinointi', '3800.00');


