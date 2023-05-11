const tabelaHorarios = document.getElementById('tabela-horarios');
const checkboxTurno = document.querySelectorAll('input[name="turno"]');

// Função para preencher os horários de acordo com a escolha do turno
function preencherHorarios(turno) {
  // Limpa a tabela antes de preencher
  tabelaHorarios.innerHTML = '';

  const horarios = turno === 'manha-tarde' ?
    ['07:00', '07:45', '08:30', '09:30', '10:15', '11:00', '12:30', '13:15', '14:00', '14:45', '15:30'] :
    ['12:15', '13:00', '13:45', '14:15', '15:00', '15:45', '16:45', '17:30', '18:15', '19:45', '20:30'];

  // Preenche a tabela com os horários
  for (let i = 0; i < horarios.length; i++) {
    const tr = document.createElement('tr');
    const td1 = document.createElement('td');
    const td2 = document.createElement('td');
    const td3 = document.createElement('td');
    const inputInicio = document.createElement('input');
    const inputFim = document.createElement('input');
    const inputObservacao = document.createElement('input');

    inputInicio.type = 'time';
    inputInicio.name = `horario-inicio-${i}`;
    inputInicio.required = true;
    inputFim.type = 'time';
    inputFim.name = `horario-fim-${i}`;
    inputFim.required = true;
    inputObservacao.type = 'text';
    inputObservacao.name = `observacao-${i}`;

    td1.appendChild(inputInicio);
    td2.appendChild(inputFim);
    td3.appendChild(inputObservacao);

    // Desabilita a edição dos horários de acordo com o turno escolhido
    if (turno === 'manha-tarde' && i >= 9) {
      inputInicio.disabled = true;
      inputFim.disabled = true;
    } else if (turno === 'tarde-noite' && i <= 5) {
      inputInicio.disabled = true;
      inputFim.disabled = true;
    }

    tr.appendChild(td1);
    tr.appendChild(td2);
    tr.appendChild(td3);
    tabelaHorarios.appendChild(tr);
  }
}

// Evento que chama a função para preencher os horários de acordo com o turno escolhido
checkboxTurno.forEach((checkbox) => {
  checkbox.addEventListener('change', () => {
    const turno = document.querySelector('input[name="turno"]:checked').value;
    preencherHorarios(turno);
  });
});
