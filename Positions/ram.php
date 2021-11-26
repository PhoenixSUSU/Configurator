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
        <th>Тип RAM</th>
        <th>Потребление Вт</th>
        <th>Цена</th>
        <th>    </th>

    </tr>

    <?php

    $sql = "SELECT * FROM rams";

    $result = mysqli_query($link, $sql);

    $position = mysqli_fetch_all($result, MYSQLI_ASSOC) ;

    foreach ($position as $ram){
        ?>
        <tr>
            <td><?= $ram["id"] ?></td>
            <td><?= $ram["name"] ?></td>
            <td><?= $ram["type_ram"] ?></td>
            <td><?= $ram["wt"] ?></td>
            <td><?= $ram["price"].' Rub' ?></td>
            <td><a href="../index.php?id_ram=<?= $ram["id"] ?>&name_ram=<?= $ram["name"] ?>&type_ram=<?= $ram["type_ram"] ?>&wt_ram=<?= $ram["wt"] ?>&price_ram=<?= $ram["price"] ?>">Выбрать</a>
        </tr>
        <?php
    }

    ?>

</table>
</body>
</html>