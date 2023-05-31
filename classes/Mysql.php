<?php
    class Mysql{
        public static function conectar(){
            if(self::$pdo == null){
                try{
                    self::$spdo = new PDO('mysqlhost='.HOST.'dbname='.DATABASE,USER,PASSWORD,array(PDO::
                    MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                    self::$pdo->setAttibute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXEPTION);
                    }catch(Exeption $e){
                    echo '<h2 style="color:red;"> Erro ao conectarcom BD :/<h2>';    
                }
            }
            return self::$pdo;
        }
    }
?>