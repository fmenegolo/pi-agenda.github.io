console.log("está funcionando!");

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
};

window.onload = function() {
    var elementBody = document.querySelector('body');
    var elementBtnIncreaseFont = document.getElementById('increase-font');
    var elementBtnDecreaseFont = document.getElementById('decrease-font');
    // Padrão de tamanho, equivale a 100% do valor definido no Body
    var fontSize = 100;
    // Valor de incremento ou decremento, equivale a 10% do valor do Body
    var increaseDecrease = 10;

    // Evento de click para aumentar a fonte
    elementBtnIncreaseFont.addEventListener('click', function(event) {
        fontSize = fontSize + increaseDecrease;
        elementBody.style.fontSize = fontSize + '%';
    });

    // Evento de click para diminuir a fonte
    elementBtnDecreaseFont.addEventListener('click', function(event) {
        fontSize = fontSize - increaseDecrease;
        elementBody.style.fontSize = fontSize + '%';
    });
}
