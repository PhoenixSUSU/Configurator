<?php
require_once "../config/database.php";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Processor</title>
</head>
<style>
    th, td {
        padding: 10px;
    }
    th {
        background: #606060;
        color: white;
    }
    td {
        background: #c6c6c6;
    }
</style>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>Наименование</th>
        <th>ГБ</th>
        <th>Потребление Вт</th>
        <th>Цена</th>
        <th>    </th>

    </tr>

    <?php

    $sql = "SELECT * FROM hddes";

    $result = mysqli_query($link, $sql);

    $position = mysqli_fetch_all($result, MYSQLI_ASSOC) ;

    foreach ($position as $hdd){
        ?>
        <tr>
            <td><?= $hdd["id"] ?></td>
            <td><?= $hdd["name"] ?></td>
            <td><?= $hdd["gb"] ?></td>
            <td><?= $hdd["wt"] ?></td>
            <td><?= $hdd["price"].' Rub' ?></td>
            <td><a href="../index.php?id_hdd=<?= $hdd["id"] ?>&name_hdd=<?= $hdd["name"] ?>&gb_hdd=<?= $hdd["gb"] ?>&wt_hdd=<?= $hdd["wt"] ?>&price_hdd=<?= $hdd["price"] ?>">Выбрать</a>
        </tr>
        <?php
    }

    ?>

</table>
</body>
</html>