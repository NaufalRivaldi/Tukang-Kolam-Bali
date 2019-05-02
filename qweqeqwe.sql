CREATE DATABASE db_kolam

USE db_kolam

CREATE TABLE tb_user(
	id_user INT PRIMARY KEY AUTO_INCREMENT,
	username VARCHAR(100),
	pass VARCHAR(100)
)

CREATE TABLE tb_jasa(
	id_jasa INT PRIMARY KEY AUTO_INCREMENT,
	nama_jasa VARCHAR(100),
	harga DOUBLE,
	keterangan TEXT,
	keyword VARCHAR(100)
)

CREATE TABLE tb_gambar(
	id_gambar INT PRIMARY KEY AUTO_INCREMENT,
	nama_gambar VARCHAR(100),
	id_jasa INT REFERENCES tb_jasa(id_jasa)
)

