<?php
	include('config.php');
	Mysql::conectar();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Pesquisa de Professores</title>
    <link rel="stylesheet" href="style.css">
    <script>
        const form = document.querySelector('#myForm');
        form.addEventListener('submit', function (event) {
            event.preventDefault();
            const professor = document.querySelector('#professor').value;
            const mes = document.querySelector('#mes').value;
            const ano = document.querySelector('#ano').value;
            pesquisarDados(professor, mes, ano);
        });

    </script>
</head>

<body>

    <form id="myForm" method="GET">
        <label for="professor">Nome do Professor:</label>
        <input type="text" id="professor" name="professor"><br>

        <label for="mes">Mês:</label>
        <input type="text" id="mes" name="mes"><br>

        <label for="ano">Ano:</label>
        <input type="text" id="ano" name="ano"><br>

        <button type="submit" value="Pesquisar">Gerar Relatório</button>
    </form>
</body>