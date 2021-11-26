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

    $sql = "SELECT * FROM cpus";

    $result = mysqli_query($link, $sql);

    $position = mysqli_fetch_all($result, MYSQLI_ASSOC) ;

    foreach ($position as $processor){
        ?>
        <tr>
            <td><?= $processor["id"] ?></td>
            <td><?= $processor["name"] ?></td>
            <td><?= $processor["socet"] ?></td>
            <td><?= $processor["wt"] ?></td>
            <td><?= $processor["price"].' Rub' ?></td>
            <td><a href="../index.php?id_processor=<?= $processor["id"] ?>&name_processor=<?= $processor["name"] ?>&socet_processor=<?= $processor["socet"] ?>&wt_processor=<?= $processor["wt"] ?>&price_processor=<?= $processor["price"] ?>">Выбрать</a>
        </tr>
        <?php
    }

    ?>

</table>
</body>
</html>