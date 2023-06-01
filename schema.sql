CREATE DATABASE IF NOT EXISTS agenda_bd;

USE agenda_bd;

CREATE TABLE tb_aulas
(
    idAula INT AUTO_INCREMENT PRIMARY KEY,
    nomeProf VARCHAR(100),
    dataAula DATE,
    horaIni TIME,
    horaFim TIME,
    atividade VARCHAR(80)
);
