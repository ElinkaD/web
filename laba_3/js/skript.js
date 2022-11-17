var first = true;

var rows = 0;
var row_number = 0;

//функция создает заголок таблицы
createTable.onclick = function() {
    if (first){
        // создание таблицы
        var table = document.createElement('table');
        document.body.appendChild(table);
        table.id = 'MainTable';

        //Создание и заполнение заголовка 
        let row_1 = document.createElement('tr');
        let heading_1 = document.createElement('th');
        heading_1.innerHTML = "№";
        let heading_2 = document.createElement('th');
        heading_2.innerHTML = "WHAT";

        row_1.appendChild(heading_1);
        row_1.appendChild(heading_2);
        table.appendChild(row_1);

        first = false;
        //снимает ограничения с кнопок удаления и добавления строк
        addTable.removeAttribute("disabled");
        removeTable.removeAttribute("disabled");
        vvodnumber.removeAttribute("disabled");
    }
    else{
        alert("Ошибка!");
    }
};

addTable.onclick = function(){
    let table = document.getElementById('MainTable');

    //Создание и заполнение строки 
    let newRow = document.createElement('tr');
    let row_next_data_1 = document.createElement('td');
    let row_next_data_2 = document.createElement('td');
    row_next_data_1.innerText = ++row_number;
    row_next_data_2.innerHTML = "text";

    newRow.appendChild(row_next_data_1);
    newRow.appendChild(row_next_data_2);
    table.appendChild(newRow);
    rows++;
};



removeTable.onclick = function(){
    let table = document.getElementById('MainTable');
    let number = document.getElementById("vvodnumber").value;
    document.getElementById("vvodnumber").value = ""; //очистка поля ввода числа
    if(rows > 0){
        if(isNaN(number)){ //проверка на число
            alert("Ошибка! Ведите натуральное число");
        }
        else{
            let id = 0;
            for (var i = 0, row; row = table.rows[i]; i++) //нахождение числа в таблице
                    if (row.cells[0].innerText == +number){
                        id = i;
                        break;
                    }
                if (id == 0){
                    alert('Ошибка! Строки с таким номером не существует');
                    return;
                }
            table.deleteRow(id);
            rows--;
        }
    }    
    else{
        alert("Ошибка! Добавьте строку в таблицу");
    }
};
