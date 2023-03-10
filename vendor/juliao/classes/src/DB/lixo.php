<!DOCTYPE html>
<html>

<body>

    <?php

    //Объявление переменных
    $str = "apple banana orange apple"; //Строка, которая была дана
    $aux = ""; //Вспомогательная переменная для хранения каждого слова в нашей строке
    $arrInitial = array(); //Массив, в котором будут храниться все слова в строке, кроме пробелов.
    $arrFinal = array(); // Массив, который будет содержать слова с соответствующими повторениями, которые у них есть. Где слово будет нашим ключом, а количество слов (число) будет нашим значением.
    $count = 0; //Переменная, которая будет представлять количество слов, повторяющихся в нашей строке.
    $len = strlen($str); //Переменная, которую мы собираемся использовать для получения количества символов в нашей строке, включая пробелы. Для этого мы используем функцию strlen, чтобы получить такое же количество символов.


    //Сначала нам нужно получить слова, которые есть в нашей строке, для этого мы используем цикл for, чтобы мы могли перебирать каждый символ
    for ($i = 0; $i < $len; $i++) {
        if ($str[$i] !== ' ') { // Здесь мы проверим, было ли найдено пробелы.
            $aux = $aux . $str[$i]; // Если не найдено пробелы, мы можем объединить эти символы, чтобы получить слово.
        }
        if ($str[$i] == ' ' || $i == $len - 1) { //Здесь мы собираемся проверить, нашли ли мы пустое место, если да, значит, слово образовалось.
            array_push($arrInitial, $aux); // Если слово образовано. Это означает, что это слово можно добавить в наш исходный массив, который в принципе пуст. Для этого мы используем функцию array_push(), которая позволяет нам добавлять элемент в массив без ключа.
            $aux = ""; // После того, как слово размещено, нам нужно очистить вспомогательную переменную, чтобы позволить нам поместить новое слово, поскольку мы знаем, что хотим получить все слова.
        }
    }

    //После того, как нам удалось получить все слова, теперь нам нужно посчитать количество повторений этих самых слов, 
    //для этого мы используем цикл foreach, который позволит нам получить каждый элемент нашего массива
    foreach ($arrInitial as $value1) { //Первый foreach должен получить каждое слово из нашего массива, который был сформирован.
        foreach ($arrInitial as $value2) { //Второй — позволить каждому слову сравниваться со всеми элементами, к сожалению, повторы будут.
            if ($value1 == $value2) { // Теперь мы сравниваем, равно ли одно значение другому, и если да, то оно увеличивает это соответствующее слово.
                $count++; // Инкремент происходит здесь.
            }
        }


        //После того, как мы подсчитали слова, нам нужно добавить те же самые слова вместе с их соответствующим количеством внутри нашего arrayFinal.
        if (!isset($arrFinal[$value1])) { //  Чтобы элементы, которые повторяются, не добавлялись более одного раза, то мы можем использовать функцию isset(), чтобы проверить, находится ли элемент, который мы хотим добавить, уже внутри нашего массива, то есть он будет добавлен, элементы, которые еще не добавлены.
            $arrFinal[$value1] = $count; //Мы добавляем элемент вместе с его ключом, где ключ — это слово, а значение — количество слов в строке.
        }

        $count = 0;  // Нам снова нужно сбросить количество, потому что нам нужно будет проверить другое слово.
    }

    // Ведь нам нужно показать слова с соответствующим количеством повторений. Для этого снова воспользуемся функцией foreach.
    foreach ($arrFinal as $key => $value) {
        echo "$key - $value <br>"; //Линия, которая позволит показать
    }

    ?>

</body>

</html>