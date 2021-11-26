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
        <th>Сокет</th>
        <th>Потребление Вт</th>
        <th>Цена</th>
        <th>    </th>

    </tr>

    <?php

    $sql = "SELECT * FROM coolers WHERE socet = "."$_COOKIE[socet_processor]";

    $result = mysqli_query($link, $sql);

    $position = mysqli_fetch_all($result, MYSQLI_ASSOC) ;

    foreach ($position as $cooler){
        ?>
        <tr>
            <td><?= $cooler["id"] ?></td>
            <td><?= $cooler["name"] ?></td>
            <td><?= $cooler["socet"] ?></td>
            <td><?= $cooler["wt"] ?></td>
            <td><?= $cooler["price"].' Rub' ?></td>
            <td><a href="../index.php?id_cooler=<?= $cooler["id"] ?>&name_cooler=<?= $cooler["name"] ?>&socet_cooler=<?= $cooler["socet"] ?>&wt_cooler=<?= $cooler["wt"] ?>&price_cooler=<?= $cooler["price"] ?>">Выбрать</a>
        </tr>
        <?php
    }

    ?>

</table>
</body>
</html>