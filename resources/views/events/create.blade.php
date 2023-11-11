@extends('layouts.main')

@section('title', 'Cadrastrar Aulas')

@section('content')
<h1>Formulário de Registro de Aulas</h1>
	<form method="POST">
		{{-- Parte 1 --}}
		<table>
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
			<label for="tarde-noite">Tarde/Noite</label>
		</table><br>

		{{-- OUTRAS OPÇOES --}}
		<h4>Outras Opções</h4>
		<table>
			<thead>
				<tr>
					<th>
						<p>
							Para ser direcionado à página de
						</p> 
						<strong>
							Relatório de Atividades, 
						<a target="_blank" href="relatorio.php">
							clique aqui.
						</a>
                    	</strong>
					</th>					
				</tr>
			</thead>			
		</table><br>

		{{-- Parte 2 --}}
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
					<td><input type="text" name="horario-inicio[]" id="horario-inicio-1" value="" readonly></td>
					<td><input type="text" name="horario-fim[]" id="horario-fim-1" value="" readonly></td>
					<td><input type="text" name="atividade[]" value=""></td>
				</tr>
				<tr>
					<td><input type="text" name="horario-inicio[]" id="horario-inicio-2" value="" readonly></td>
					<td><input type="text" name="horario-fim[]" id="horario-fim-2" value="" readonly></td>
					<td><input type="text" name="atividade[]" value="" required></td>
				</tr>
				<tr>
					<td><input type="text" name="horario-inicio[]" id="horario-inicio-3" value="" readonly></td>
					<td><input type="text" name="horario-fim[]" id="horario-fim-3" value="" readonly></td>
					<td><input type="text" name="atividade[]" value="" required></td>
				</tr>
				<tr>
					<td><input type="text" name="horario-inicio[]" id="horario-inicio-4" value="" readonly></td>
					<td><input type="text" name="horario-fim[]" id="horario-fim-4" value="" readonly></td>
					<td><input type="text" name="atividade[]" value="" required></td>
				</tr>
				<tr>
					<td><input type="text" name="horario-inicio[]" id="horario-inicio-5" value="" readonly></td>
					<td><input type="text" name="horario-fim[]" id="horario-fim-5" value="" readonly></td>
					<td><input type="text" name="atividade[]" value="" required></td>
				</tr>
				<tr>
					<td><input type="text" name="horario-inicio[]" id="horario-inicio-6" value="" readonly></td>
					<td><input type="text" name="horario-fim[]" id="horario-fim-6" value="" readonly></td>
					<td><input type="text" name="atividade[]" value="" required></td>
				</tr>
				<tr>
					<td><input type="text" name="horario-inicio[]" id="horario-inicio-7" value="" readonly></td>
					<td><input type="text" name="horario-fim[]" id="horario-fim-7" value="" readonly></td>
					<td><input type="text" name="atividade[]" value="" required></td>
				</tr>
				<tr>
					<td><input type="text" name="horario-inicio[]" id="horario-inicio-8" value="" readonly></td>
					<td><input type="text" name="horario-fim[]" id="horario-fim-8" value="" readonly></td>
					<td><input type="text" name="atividade[]" value="" required></td>
				</tr>
				<tr>
					<td><input type="text" name="horario-inicio[]" id="horario-inicio-9" value="" readonly></td>
					<td><input type="text" name="horario-fim[]" id="horario-fim-9" value="" readonly></td>
					<td><input type="text" name="atividade[]" value="" required></td>
				</tr>
				<tr>
					<td><input type="text" name="horario-inicio[]" id="horario-inicio-10" value="" readonly></td>
					<td><input type="text" name="horario-fim[]" id="horario-fim-10" value="" readonly></td>
					<td><input type="text" name="atividade[]" value="" required></td>
				</tr>
				<tr>
					<td><input type="text" name="horario-inicio[]" id="horario-inicio-11" value="" readonly></td>
					<td><input type="text" name="horario-fim[]" id="horario-fim-11" value="" readonly></td>
					<td><input type="text" name="atividade[]" value="" required></td>
				</tr>
			</tbody>
		</table>
		<div><button type="submit" name="acao" value="cadastrar">Enviar</button></div>
		
	</form>  
@endsection