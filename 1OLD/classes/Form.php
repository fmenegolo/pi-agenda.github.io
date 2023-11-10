<?php

    class Form{

        public static function alert($tipo, $mensagem)
        {
            if ($tipo == 'erro') {
                echo '<div style="color:red; font-size:25px;">' . $mensagem . '</div>';
                return false;
            } else if ($tipo == 'sucesso') {
                echo '<div style="color:blue; font-size:25px;">' . $mensagem . '</div>';
                return true;
            }
        }

        public static function cadastrar($nome,$data,$horarioIn_1,$horarioIn_2,$horarioIn_3,$horarioIn_4,$horarioIn_5,$horarioIn_6,$horarioIn_7,$horarioIn_8,$horarioIn_9,$horarioIn_10,$horarioIn_11,
        $horarioOut_1,$horarioOut_2,$horarioOut_3,$horarioOut_4,$horarioOut_5,$horarioOut_6,$horarioOut_7,$horarioOut_8,$horarioOut_9,$horarioOut_10,$horarioOut_11,
        $atividade_1,$atividade_2,$atividade_3,$atividade_4,$atividade_5,$atividade_6,$atividade_7,$atividade_8,$atividade_9,$atividade_10,$atividade_11){
            
            $mysql = new Mysql(); // Cria uma instância da classe Mysql
            $conexao = $mysql->conectar();

            if ($conexao) {
                $sql = Mysql::conectar()->prepare("INSERT INTO tb_aulas VALUES (null,?,?,?,?,?)");
                
                // Executar a primeira linha
                $sql->execute(array($nome, $data, $horarioIn_1, $horarioOut_1, $atividade_1));

                // Executar a segunda linha
                $sql->execute(array($nome, $data, $horarioIn_2, $horarioOut_2, $atividade_2));

                // Executar a terceira linha
                $sql->execute(array($nome, $data, $horarioIn_3, $horarioOut_3, $atividade_3));

                // Executar a quarta linha
                $sql->execute(array($nome, $data, $horarioIn_4, $horarioOut_4, $atividade_4));
                
                // Executar a 5a linha
                $sql->execute(array($nome, $data, $horarioIn_5, $horarioOut_5, $atividade_5));

                // Executar a 6a linha
                $sql->execute(array($nome, $data, $horarioIn_6, $horarioOut_6, $atividade_6));

                // Executar a 7a linha
                $sql->execute(array($nome, $data, $horarioIn_7, $horarioOut_7, $atividade_7));

                // Executar a 8a linha
                $sql->execute(array($nome, $data, $horarioIn_8, $horarioOut_8, $atividade_8));

                // Executar a 9a linha
                $sql->execute(array($nome, $data, $horarioIn_9, $horarioOut_9, $atividade_9));

                // Executar a 10a linha
                $sql->execute(array($nome, $data, $horarioIn_10, $horarioOut_10, $atividade_10));

                // Executar a 11a linha
                $sql->execute(array($nome, $data, $horarioIn_11, $horarioOut_11, $atividade_11));                           

            } else {
                echo '<h2 style="color:orange;">Erro ao conectar com BD!</h2>'. $conexao->getMessage();
            }
        }
    }
