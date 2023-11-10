CREATE DATABASE IF NOT EXISTS agenda_bd;

USE agenda_bd;

CREATE TABLE tb_aulas
(
    idAula INT AUTO_INCREMENT PRIMARY KEY,
    nomeProf VARCHAR(100),
    dataAula DATE,
    horaIni VARCHAR(10),
    horaFim VARCHAR(10),
    atividade VARCHAR(80)
);

ALTER TABLE tb_aulas CHARACTER SET utf8 COLLATE utf8_general_ci;
