CREATE DATABASE IF NOT EXISTS agenda_bd;

USE meu_banco;

CREATE TABLE tb_aulas 
( 
 idAula INT INT AUTO_INCREMENT PRIMARY KEY,  
 nomeProf VARCHAR(100),  
 dataAula DATE,  
 horaIni DATE,  
 horaFim DATE,  
 atividade VARCHAR(80),  
); 
