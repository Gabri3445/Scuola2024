<?php
$month = date('n');
$year = date('Y');

$month_name = date('F', mktime(0, 0, 0, $month, 1, $year));

$first_day_of_month = date('w', mktime(0, 0, 0, $month, 1, $year));

$days_in_month = date('t', mktime(0, 0, 0, $month, 1, $year));

echo '<h2>' . $month_name . ' ' . $year . '</h2>';
echo '<table border="1">';

echo '<tr>';
echo '<th>Sun</th>';
echo '<th>Mon</th>';
echo '<th>Tue</th>';
echo '<th>Wed</th>';
echo '<th>Thu</th>';
echo '<th>Fri</th>';
echo '<th>Sat</th>';
echo '</tr>';

echo '<tr>';

for ($i = 0; $i < $first_day_of_month; $i++) {
    echo '<td></td>';
}


$current_day = 1;
while ($current_day <= $days_in_month) {
    if ($first_day_of_month % 7 == 0) {
        echo '</tr><tr>';
    }

    echo '<td>' . $current_day . '</td>';
    $current_day++;
    $first_day_of_month++;
}

while ($first_day_of_month % 7 != 0) {
    echo '<td></td>';
    $first_day_of_month++;
}

echo '</tr>';
echo '</table>';
