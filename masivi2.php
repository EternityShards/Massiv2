<?php
// Определение массива с текущей температурой в городе для каждого дня недели
$weather = array(
    "понедельник" => 22,
    "вторник" => 23,
    "среда" => 21,
    "четверг" => 20,
    "пятница" => 19,
    "суббота" => 18,
    "воскресенье" => 20
);

// Вывод массива с использованием цикла foreach
echo "Прогноз погоды на неделю:<br>";
foreach ($weather as $day => $temperature) {
    echo "Температура в городе в $day: $temperature °C<br>";
}
?>
