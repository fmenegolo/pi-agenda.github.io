<?php
// Verifica se o formulário foi submetido
if(isset($_POST['submit'])) {
    // Conecta ao banco de dados
    $conn = mysqli_connect('localhost', 'username', 'password', 'database_name');
    
    // Verifica a conexão
    if (!$conn) {
        die("Conexão falhou: " . mysqli_connect_error());
    }
    
    // Obtém os dados do formulário
    $nome_professor = $_POST['nome_professor'];
    $mes = $_POST['mes'];
    $ano = $_POST['ano'];
    
    // Monta a query SQL
    $query = "SELECT * FROM quadro_trabalho WHERE nome_professor='$nome_professor' AND mes='$mes' AND ano='$ano'";
    
    // Executa a query e obtém os resultados
    $result = mysqli_query($conn, $query);
    
    // Verifica se há resultados
    if(mysqli_num_rows($result) > 0) {
        // Cria a tabela HTML
        echo "<table>";
        echo "<tr><th>Dia da Semana</th><th>Horário</th><th>Disciplina</th><th>Turma</th></tr>";
        
        // Loop através dos resultados e exibe cada linha na tabela
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>".$row['dia_semana']."</td><td>".$row['horario']."</td><td>".$row['disciplina']."</td><td>".$row['turma']."</td></tr>";
        }
        
        echo "</table>";
    } else {
        echo "Nenhum resultado encontrado.";
    }
    
    // Fecha a conexão com o banco de dados
    mysqli_close($conn);
}
?>
