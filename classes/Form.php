<?php

class Form
{
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

    public static function cadastrar($nome, $data, $horariosEntrada, $horariosSaida, $atividades)
    {
        $sql = Mysql::conectar()->prepare("INSERT INTO tb_aulas VALUES (null,?,?,?,?)");

        // Verifica se os arrays têm o mesmo número de elementos
        if (count($horariosEntrada) !== count($horariosSaida) || count($horariosEntrada) !== count($atividades)) {
            // Os arrays não possuem a mesma quantidade de elementos
            return; // ou lance uma exceção, dependendo do seu fluxo de código
        }

        for ($i = 0; $i < count($horariosEntrada); $i++) {
            $horarioIn = $horariosEntrada[$i];
            $horarioOut = $horariosSaida[$i];
            $atividade = $atividades[$i];

            $sql->execute(array($nome, $data, $horarioIn, $horarioOut, $atividade));
        }
    }
}
?>
