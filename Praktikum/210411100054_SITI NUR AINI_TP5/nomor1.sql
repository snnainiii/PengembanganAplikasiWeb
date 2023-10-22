CREATE DATABASE mahasiswa

CREATE TABLE tbl_mahasiswa (
id_mhs INT NOT NULL AUTO_INCREMENT ,
nrp_mhs VARCHAR(12),
nama_mhs VARCHAR(45),
email_mhs VARCHAR(100),
alamat_mhs VARCHAR(150),
PRIMARY KEY (id_mhs)
);

SELECT * FROM mahasiswa.tbl_mahasiswa

INSERT INTO tbl_mahasiswa (id_mhs, nrp_mhs, nama_mhs, email_mhs, alamat_mhs)
VALUES (NULL, 060411100757, 'Khozaimi', 'zem@mhs.utm.ac.id', 'Pamekasan'),
(NULL, 060411100762, 'Ali', 'ali@mhs.utm.ac.id', 'Surabaya')

SELECT * FROM mahasiswa.tbl_mahasiswa;

