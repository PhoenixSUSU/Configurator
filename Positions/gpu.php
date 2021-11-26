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
        <th>Тип GPU</th>
        <th>Потребление Вт</th>
        <th>Цена</th>
        <th>    </th>

    </tr>

    <?php

    $sql = "SELECT * FROM gpus";

    $result = mysqli_query($link, $sql);

    $position = mysqli_fetch_all($result, MYSQLI_ASSOC) ;

    foreach ($position as $gpu){
        ?>
        <tr>
            <td><?= $gpu["id"] ?></td>
            <td><?= $gpu["name"] ?></td>
            <td><?= $gpu["type_gpu"] ?></td>
            <td><?= $gpu["wt"] ?></td>
            <td><?= $gpu["price"].' Rub' ?></td>
            <td><a href="../index.php?id_gpu=<?= $gpu["id"] ?>&name_gpu=<?= $gpu["name"] ?>&type_gpu=<?= $gpu["type_gpu"] ?>&wt_gpu=<?= $gpu["wt"] ?>&price_gpu=<?= $gpu["price"] ?>">Выбрать</a>
        </tr>
        <?php
    }

    ?>

</table>
</body>
</html>