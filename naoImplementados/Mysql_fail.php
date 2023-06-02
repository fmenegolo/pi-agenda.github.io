<?php

class Mysql {
    private static $pdo;

    public static function conectar() {
        if (self::$pdo == null) {
            try {
                self::$pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE, USER, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo '<h2 style="color:red;">Erro ao conectar com BD!</h2>';
                // Você pode tratar o erro de conexão de forma adequada aqui, como registrar em um log ou exibir uma mensagem personalizada.
                // Você também pode lançar uma exceção para que o chamador possa tratar o erro adequadamente.
            }
        }
        return self::$pdo;
    }
}    
?>
