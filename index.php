<?php

	include('config.php');
	Mysql::conectar();

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Formulário de Registro de Aulas</title>
	<link rel="stylesheet" href="style.css">
	<script>
		function preencherHorarios(turno) {
			var horarios = document.getElementsByName("horario-inicio[]");
			var fim = document.getElementsByName("horario-fim[]");

			if (turno === "manha-tarde") {
				horarios[0].value = "07:00";
				horarios[1].value = "07:45";
				horarios[2].value = "08:30";
				horarios[3].value = "09:30";
				horarios[4].value = "10:15";
				horarios[5].value = "11:00";
				horarios[6].value = "12:30";
				horarios[7].value = "13:15";
				horarios[8].value = "14:00";
				horarios[9].value = "14:45";
				horarios[10].value = "15:30";

				fim[0].value = "07:45";
				fim[1].value = "08:30";
				fim[2].value = "09:15";
				fim[3].value = "10:15";
				fim[4].value = "11:00";
				fim[5].value = "11:45";
				fim[6].value = "13:15";
				fim[7].value = "14:00";
				fim[8].value = "14:45";
				fim[9].value = "15:30";
				fim[10].value = "16:00";
			} else if (turno === "tarde-noite") {
				horarios[0].value = "12:15";
				horarios[1].value = "13:00";
				horarios[2].value = "13:45";
				horarios[3].value = "14:15";
				horarios[4].value = "15:00";
				horarios[5].value = "15:45";
				horarios[6].value = "16:45";
				horarios[7].value = "17:30";
				horarios[8].value = "18:15";
				horarios[9].value = "19:45";
				horarios[10].value = "20:30";

				fim[0].value = "13:00";
				fim[1].value = "13:45";
				fim[2].value = "14:15";
				fim[3].value = "15:00";
				fim[4].value = "15:45";
				fim[5].value = "16:30";
				fim[6].value = "17:30";
				fim[7].value = "18:15";
				fim[8].value = "19:00";
				fim[9].value = "20:30";
				fim[10].value = "21:15";
			}
		}

	</script>
</head>

<body>
	<?php
	if (isset($_POST['acao']) && $_POST['form'] == 'f_form') {
		$nome = $_POST['nome'];
		$data = $_POST['data'];
		$horarioIn_1 = $_POST['horario-inicio'][0];
		$horarioIn_2 = $_POST['horario-inicio'][1];
		$horarioIn_3 = $_POST['horario-inicio'][2];
		$horarioIn_4 = $_POST['horario-inicio'][3];
		$horarioIn_5 = $_POST['horario-inicio'][4];
		$horarioIn_6 = $_POST['horario-inicio'][5];
		$horarioIn_7 = $_POST['horario-inicio'][6];
		$horarioIn_8 = $_POST['horario-inicio'][7];
		$horarioIn_9 = $_POST['horario-inicio'][8];
		$horarioIn_10 = $_POST['horario-inicio'][9];
		$horarioIn_11 = $_POST['horario-inicio'][10];
		$horarioOut_1 = $_POST['horario-fim'][0];
		$horarioOut_2 = $_POST['horario-fim'][1];
		$horarioOut_3 = $_POST['horario-fim'][2];
		$horarioOut_4 = $_POST['horario-fim'][3];
		$horarioOut_5 = $_POST['horario-fim'][4];
		$horarioOut_6 = $_POST['horario-fim'][5];
		$horarioOut_7 = $_POST['horario-fim'][6];
		$horarioOut_8 = $_POST['horario-fim'][7];
		$horarioOut_9 = $_POST['horario-fim'][8];
		$horarioOut_10 = $_POST['horario-fim'][9];
		$horarioOut_11 = $_POST['horario-fim'][10];
		$atividade_1 = $_POST['atividade'][0];
		$atividade_2 = $_POST['atividade'][1];
		$atividade_3 = $_POST['atividade'][2];
		$atividade_4 = $_POST['atividade'][3];
		$atividade_5 = $_POST['atividade'][4];
		$atividade_6 = $_POST['atividade'][5];
		$atividade_7 = $_POST['atividade'][6];
		$atividade_8 = $_POST['atividade'][7];
		$atividade_9 = $_POST['atividade'][8];
		$atividade_10 = $_POST['atividade'][9];
		$atividade_11 = $_POST['atividade'][10];

		if ($nome == '') {
			Form::alert('erro', 'O campo nome não foi preenchido');
		} else if ($data == '') {
			Form::alert('erro', 'O campo data não foi preenchido');
		} else if (empty($atividade_1) || empty($atividade_2) || empty($atividade_3) || empty($atividade_4) || empty($atividade_5) || empty($atividade_6) || empty($atividade_7) || empty($atividade_8) || empty($atividade_9) || empty($atividade_10) || empty($atividade_11)) {
			Form::alert('erro', 'Preencha todos os campos de atividade');
		} else {
			Form::cadastrar(
				$nome,
				$data,
				$horarioIn_1,
				$horarioIn_2,
				$horarioIn_3,
				$horarioIn_4,
				$horarioIn_5,
				$horarioIn_6,
				$horarioIn_7,
				$horarioIn_8,
				$horarioIn_9,
				$horarioIn_10,
				$horarioIn_11,
				$horarioOut_1,
				$horarioOut_2,
				$horarioOut_3,
				$horarioOut_4,
				$horarioOut_5,
				$horarioOut_6,
				$horarioOut_7,
				$horarioOut_8,
				$horarioOut_9,
				$horarioOut_10,
				$horarioOut_11,
				$atividade_1,
				$atividade_2,
				$atividade_3,
				$atividade_4,
				$atividade_5,
				$atividade_6,
				$atividade_7,
				$atividade_8,
				$atividade_9,
				$atividade_10,
				$atividade_11
			);

			Form::alert('sucesso', 'Aulas do Professor ' . $nome . ' cadastrado(a) com sucesso!');
		}
	}
	?>


	<h1>Formulário de Registro de Aulas</h1>
	<form method="POST">
		<!-- Parte 1 -->
		<h2>Informações do Professor</h2>
		<label for="nome">Nome:</label>
		<input type="text" id="nome" name="nome" placeholder="Insira o Nome" required><br>
		<label for="data">Data:</label>
		<input type="date" id="data" name="data" placeholder="Insira a Data" required><br>
		<label>Turno de aula:</label>
		<input type="radio" id="manha-tarde" name="turno" value="manha-tarde" required
			onclick="preencherHorarios('manha-tarde')">
		<label for="manha-tarde">Manhã/Tarde</label>
		<input type="radio" id="tarde-noite" name="turno" value="tarde-noite" required
			onclick="preencherHorarios('tarde-noite')">
		<label for="tarde-noite">Tarde/Noite</label><br>
		<!--
		<button type="button"
			onclick="preencherHorarios(document.querySelector('input[name=turno]:checked').value)">Preencher
			Horários</button>
		-->

		<!-- Parte 2 -->
		<h2>Horários e Aulas</h2>
		<table>
			<thead>
				<tr>
					<th>Horário de início</th>
					<th>Horário de fim</th>
					<th>Atividade</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><input type="text" name="horario-inicio[]" id="horario-inicio-1" value="" disabled></td>
					<td><input type="text" name="horario-fim[]" id="horario-fim-1" value="" disabled></td>
					<td><input type="text" name="atividade[]" value=""></td>
				</tr>
				<tr>
					<td><input type="text" name="horario-inicio[]" id="horario-inicio-2" value="" disabled></td>
					<td><input type="text" name="horario-fim[]" id="horario-fim-2" value="" disabled></td>
					<td><input type="text" name="atividade[]" value="" required></td>
				</tr>
				<tr>
					<td><input type="text" name="horario-inicio[]" id="horario-inicio-3" value="" disabled></td>
					<td><input type="text" name="horario-fim[]" id="horario-fim-3" value="" disabled></td>
					<td><input type="text" name="atividade[]" value="" required></td>
				</tr>
				<tr>
					<td><input type="text" name="horario-inicio[]" id="horario-inicio-4" value="" disabled></td>
					<td><input type="text" name="horario-fim[]" id="horario-fim-4" value="" disabled></td>
					<td><input type="text" name="atividade[]" value="" required></td>
				</tr>
				<tr>
					<td><input type="text" name="horario-inicio[]" id="horario-inicio-5" value="" disabled></td>
					<td><input type="text" name="horario-fim[]" id="horario-fim-5" value="" disabled></td>
					<td><input type="text" name="atividade[]" value="" required></td>
				</tr>
				<tr>
					<td><input type="text" name="horario-inicio[]" id="horario-inicio-6" value="" disabled></td>
					<td><input type="text" name="horario-fim[]" id="horario-fim-6" value="" disabled></td>
					<td><input type="text" name="atividade[]" value="" required></td>
				</tr>
				<tr>
					<td><input type="text" name="horario-inicio[]" id="horario-inicio-7" value="" disabled></td>
					<td><input type="text" name="horario-fim[]" id="horario-fim-7" value="" disabled></td>
					<td><input type="text" name="atividade[]" value="" required></td>
				</tr>
				<tr>
					<td><input type="text" name="horario-inicio[]" id="horario-inicio-8" value="" disabled></td>
					<td><input type="text" name="horario-fim[]" id="horario-fim-8" value="" disabled></td>
					<td><input type="text" name="atividade[]" value="" required></td>
				</tr>
				<tr>
					<td><input type="text" name="horario-inicio[]" id="horario-inicio-9" value="" disabled></td>
					<td><input type="text" name="horario-fim[]" id="horario-fim-9" value="" disabled></td>
					<td><input type="text" name="atividade[]" value="" required></td>
				</tr>
				<tr>
					<td><input type="text" name="horario-inicio[]" id="horario-inicio-10" value="" disabled></td>
					<td><input type="text" name="horario-fim[]" id="horario-fim-10" value="" disabled></td>
					<td><input type="text" name="atividade[]" value="" required></td>
				</tr>
				<tr>
					<td><input type="text" name="horario-inicio[]" id="horario-inicio-11" value="" disabled></td>
					<td><input type="text" name="horario-fim[]" id="horario-fim-11" value="" disabled></td>
					<td><input type="text" name="atividade[]" value="" required></td>
				</tr>
			</tbody>
		</table>
		<div><button type="submit" name="acao" value="cadastrar">Enviar</button></div>
		<div><input type="hidden" name="form" value="f_form" required></div>

	</form>
</body>

</html>