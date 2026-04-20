-- Setiap perintah diakhir semicolon (;)

CREATE DATABASE nama_database;
   
USE nama_database;
-- select database

DROP DATABASE nama_database;
-- hapus

ALTER DATABASE nama_database READ ONLY = 1;
-- ganti ke read only

CREATE TABLE nama_tabel (
   id_karyawan    INT,
   nama           VARCHAR(50),
   gaji           INT,
   hire_date      DATE
);

RENAME TABLE nama_tabel TO tabel_nama;
-- ganti nama tabel

ALTER TABLE nama_tabel -- Dibawah adalah semua statement menggunakan ALTER TABLE

ADD no_tlp VARCHAR(15);
-- nambah kolom ke tabel

RENAME COLUMN no_tlp TO no_hp;

MODIFY COLUMN no_hp VARCHAR(16);
-- ngubah tipe data kolom tertentu

AFTER nama_kolom
FIRST
-- ngubah posisi kolom ke posisi tertentu

INSERT INTO nama_tabel
VALUES (001, "Fathir", 100000000, 2025-06-20);
VALUES (), 
       ();
-- masukan nilai ke kolom tabel. Bisa sekaligus banyak

SELECT * FROM nama_tabel;
SELECT nama_kolom FROM nama_tabel;
-- ngeluarin tabel sesuai apa yang dicari, * = semua

WHERE nama_kolom = A001;
WHERE nama_kolom > A001;
WHERE nama_kolom IS NOT NULL;
-- Keluarin baris yang sesuai dengan nilai nama_kolom

UPDATE nama_tabel
SET nama_kolom = nilai_baru
WHERE id_karyawan = "A001";
-- ubah nilai pada kolom dan baris tertentu tergantung lokasi yang ditunjuk "WHERE"