<?php
$servername = "db"; // Nome do servidor MySQL no Docker Compose
$username = "root"; // Nome do usuário do MySQL
$password = "mypassword"; // Senha do usuário do MySQL
$dbname = "mydatabase"; // Nome do banco de dados

// Cria uma conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se houve algum erro na conexão
if ($conn->connect_error) {
	die("Connection failed:
