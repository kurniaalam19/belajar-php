CREATE DATABASE fakultas;

CREATE TABLE jurusan (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    kode CHAR(4) NOT NULL,
    nama VARCHAR(50) NOT NULL
);

CREATE TABLE mahasiswa (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    id_jurusan INTEGER NOT NULL,
    nim CHAR(8) NOT NULL,
    nama VARCHAR(50) NOT NULL,
    jenis_kelamin enum('laki-laki', 'perempuan') NOT NULL,
    tempat_lahir VARCHAR(50) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    alamat VARCHAR(255) NOT NULL,
    FOREIGN KEY (id_jurusan) REFERENCES jurusan(id)
);

-- insert jurusan
insert into jurusan(kode, nama) values ("ITKA", "Informatika");
insert into jurusan(kode, nama) values ("ELKT", "Elektro");

-- insert mahasiswa
insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat) 
value (1, "20192690", "Alam Kurnia Al Fatah", "laki-laki", "Malang", "2002-03-19", "Jl. Singosari");

insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat)
value (2, "20202690", "Goku", "laki-laki", "Namek", "2000-01-02", "Jl. Naga Hijau 76");

-- update mahasiswa
update mahasiswa set alamat = "Jl. Buntu 66" where id = 1;

-- delete mahasiswa
delete from mahasiswa where id = 2;