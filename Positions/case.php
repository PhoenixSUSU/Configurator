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
        <th>Тип </th>
        <th>Цена</th>
        <th>    </th>

    </tr>

    <?php

    $sql = "SELECT * FROM `cases` WHERE `type_mb` = "."'$_COOKIE[type_mb]'";

    $result = mysqli_query($link, $sql);

    $position = mysqli_fetch_all($result, MYSQLI_ASSOC) ;

    foreach ($position as $case){
        ?>
        <tr>
            <td><?= $case["id"] ?></td>
            <td><?= $case["name"] ?></td>
            <td><?= $case["type_mb"] ?></td>
            <td><?= $case["price"].' Rub' ?></td>
            <td><a href="../index.php?id_case=<?= $case["id"] ?>&name_case=<?= $case["name"] ?>&type_case_mb=<?= $case["type_case_mb"] ?>&price_case=<?= $case["price"] ?>">Выбрать</a>
        </tr>
        <?php
    }

    ?>

</table>
</body>
</html>