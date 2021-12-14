CREATE DATABASE `pendaftaran_siswa`;

CREATE TABLE `pendaftaran_siswa`.`calon_siswa` (
    `id` INT NOT NULL AUTO_INCREMENT ,  
    `nama` VARCHAR(64) NOT NULL ,  
    `alamat` VARCHAR(255) NOT NULL ,  
    `jenis_kelamin` VARCHAR(16) NOT NULL ,  
    `agama` VARCHAR(16) NOT NULL ,  
    `sekolah_asal` VARCHAR(64) NOT NULL ,    
    PRIMARY KEY  (`id`)
) ENGINE = InnoDB;

ALTER TABLE calon_siswa ADD COLUMN foto varchar(200) NOT NULL DEFAULT 'uploaded_images/default.jpg';