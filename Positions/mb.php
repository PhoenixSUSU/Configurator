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
        <th>Тип RAM</th>
        <th>Тип MB</th>
        <th>WT</th>
        <th>Цена</th>
        <th>    </th>

    </tr>

    <?php

    $sql = "SELECT * FROM `mbes` WHERE `socet` = "."$_COOKIE[socet_processor]"." AND `type_ram` = "."'$_COOKIE[type_ram]'";


    $result = mysqli_query($link, $sql);

    $position = mysqli_fetch_all($result, MYSQLI_ASSOC) ;

    foreach ($position as $mb){
        ?>
        <tr>
            <td><?= $mb["id"] ?></td>
            <td><?= $mb["name"] ?></td>
            <td><?= $mb["socet"] ?></td>
            <td><?= $mb["type_ram"] ?></td>
            <td><?= $mb["type_mb"] ?></td>
            <td><?= $mb["wt"] ?></td>
            <td><?= $mb["price"].' Rub' ?></td>
            <td><a href="../index.php?id_mb=<?= $mb["id"] ?>&name_mb=<?= $mb["name"] ?>&socet_mb=<?= $mb["socet"] ?>&socet_mb=<?= $mb["socet_mb"] ?>&type_mb=<?= $mb["type_mb"] ?>&wt_mb=<?= $mb["wt"] ?>&price_mb=<?= $mb["price"] ?>">Выбрать</a>
        </tr>
        <?php
    }

    ?>

</table>
</body>
</html>