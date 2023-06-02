<?php

    class Mysql {

        private static $pdo;
        
        public static function conectar(){
            $host = 'piagenda-mysql-1'; // substitua pelo nome do host do seu banco de dados
            $dbname = 'agenda_bd'; // substitua pelo nome do seu banco de dados
            $user = 'root'; // substitua pelo nome de usuário do banco de dados
            $password = 'root'; // substitua pela senha do banco de dados

            if (self::$pdo == null) {
                try {
                    self::$pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
                    self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    #echo 'Conexão bem-sucedida!';
                    }catch (PDOException $e) {
                        echo '<h2 style="color:red;">Erro ao conectar com BD!</h2>'. $e->getMessage();
                }
            }
            return self::$pdo;
        }
    }
?>
