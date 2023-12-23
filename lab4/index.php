<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Web Application</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px;
            text-align: center;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>

<?php
// Читаємо дані з CSV-файлу
$csvFile = fopen('data.csv', 'r');
$csvData = [];

while (($row = fgetcsv($csvFile)) !== false) {
    $csvData[] = $row;
}

fclose($csvFile);

// Виводимо дані у вигляді таблиці
if (!empty($csvData)) {
    echo '<table>';
    echo '<tr><th>' . implode('</th><th>', $csvData[0]) . '</th></tr>';

    foreach (array_slice($csvData, 1) as $row) {
        echo '<tr><td>' . implode('</td><td>', $row) . '</td></tr>';
    }

    echo '</table>';
} else {
    echo '<p>No data available.</p>';
}
?>

</body>
</html>