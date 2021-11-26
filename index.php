<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Конфигуратор</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<table class="Configuration">
    <tr>
        <th>Процессор</th>
        <th>Кулер</th>
        <th>Оперативная память</th>
        <th>Материнская плата</th>
        <th>Жесткий диск</th>
        <th>Видеокарта</th>
        <th>Блок питания</th>
        <th>Корпус</th>
    </tr>

    <?php

        if ($_GET['id_processor'] != 0) {
            setcookie ("id_processor", $_GET["id_processor"]);
            setcookie ("name_processor", $_GET["name_processor"]);
            setcookie ("socet_processor", $_GET["socet_processor"]);
            setcookie ("wt_processor", $_GET["wt_processor"]);
            setcookie ("price_processor", $_GET["price_processor"]);

            header("Location: /index.php");
        }

        if ($_GET['id_cooler'] != 0) {
            setcookie ("id_cooler", $_GET["id_cooler"]);
            setcookie ("name_cooler", $_GET["name_cooler"]);
            setcookie ("socet_cooler", $_GET["socet_cooler"]);
            setcookie ("wt_cooler", $_GET["wt_cooler"]);
            setcookie ("price_cooler", $_GET["price_cooler"]);

            header("Location: /index.php");
        }

        if ($_GET['id_ram'] != 0) {
            setcookie ("id_ram", $_GET["id_ram"]);
            setcookie ("name_ram", $_GET["name_ram"]);
            setcookie ("type_ram", $_GET["type_ram"]);
            setcookie ("wt_ram", $_GET["wt_ram"]);
            setcookie ("price_ram", $_GET["price_ram"]);

            header("Location: /index.php");
        }

        if ($_GET['id_mb'] != 0) {
            setcookie ("id_mb", $_GET["id_mb"]);
            setcookie ("name_mb", $_GET["name_mb"]);
            setcookie ("socet_mb", $_GET["socet_mb"]);
            setcookie ("type_mb_ram", $_GET["type_mb_ram"]);
            setcookie ("type_mb", $_GET["type_mb"]);
            setcookie ("wt_mb", $_GET["wt_mb"]);
            setcookie ("price_mb", $_GET["price_mb"]);

            header("Location: /index.php");
        }

        if ($_GET['id_hdd'] != 0) {
            setcookie ("id_hdd", $_GET["id_hdd"]);
            setcookie ("name_hdd", $_GET["name_hdd"]);
            setcookie ("gb_hdd", $_GET["gb_hdd"]);
            setcookie ("wt_hdd", $_GET["wt_hdd"]);
            setcookie ("price_hdd", $_GET["price_hdd"]);

            header("Location: /index.php");
        }

        if ($_GET['id_gpu'] != 0) {
            setcookie ("id_gpu", $_GET["id_gpu"]);
            setcookie ("name_gpu", $_GET["name_gpu"]);
            setcookie ("type_gpu", $_GET["type_gpu"]);
            setcookie ("wt_gpu", $_GET["wt_gpu"]);
            setcookie ("price_gpu", $_GET["price_gpu"]);

            header("Location: /index.php");
        }

        if ($_GET['id_pu'] != 0) {
            setcookie ("id_pu", $_GET["id_pu"]);
            setcookie ("name_pu", $_GET["name_pu"]);
            setcookie ("type_pu", $_GET["type_pu"]);
            setcookie ("wt_pu", $_GET["wt_pu"]);
            setcookie ("price_pu", $_GET["price_pu"]);

            header("Location: /index.php");
        }

        if ($_GET['id_case'] != 0) {
            setcookie ("id_case", $_GET["id_case"]);
            setcookie ("name_case", $_GET["name_case"]);
            setcookie ("type_case_mb", $_GET["type_case_mb"]);
            setcookie ("price_case", $_GET["price_case"]);

            header("Location: /index.php");
        }
    ?>

    <tr>
        <td><?php echo $_COOKIE["name_processor"] ?></td>
        <td><?php echo $_COOKIE["name_cooler"] ?></td>
        <td><?php echo $_COOKIE["name_ram"] ?></td>
        <td><?php echo $_COOKIE["name_mb"] ?></td>
        <td><?php echo $_COOKIE["name_hdd"] ?></td>
        <td><?php echo $_COOKIE["name_gpu"] ?></td>
        <td><?php echo $_COOKIE["name_pu"] ?></td>
        <td><?php echo $_COOKIE["name_case"] ?></td>
    </tr>

    <tr>
        <td><?php

            if ($_COOKIE["name_processor"] == null and $_COOKIE["name_cooler"] == null) {
                echo '<a href="Positions/processor.php">Выбрать</a>';
            }
            elseif ($_COOKIE["name_processor"] != null and $_COOKIE["name_cooler"] == null) {
                echo '<a href="Positions/processor.php">Изменить<br><br></a>';
                echo "<a href='config/del.php?name=processor'>Удалить</a>";
            }
            elseif ($_COOKIE["name_processor"] != null and $_COOKIE["name_cooler"] != null) {
                echo '<a href="#">ВЫБРАНО!</a>';
            }


            ?></td>
        <td><?php

            if ($_COOKIE["name_processor"] == null){
                echo 'Введите прошлые<br>комплектующие';
            }

            elseif ($_COOKIE["name_cooler"] == null and $_COOKIE["name_ram"] == null) {
                echo '<a href="Positions/cooler.php">Выбрать</a>';
            }
            elseif ($_COOKIE["name_cooler"] != null and $_COOKIE["name_ram"] == null) {
                echo '<a href="Positions/cooler.php">Изменить<br><br></a>';
                echo "<a href='config/del.php?name=cooler'>Удалить</a>";
            }
            elseif ($_COOKIE["name_cooler"] != null and $_COOKIE["name_ram"] != null) {
                echo '<a href="#">ВЫБРАНО!</a>';
            }


            ?></td>
        <td><?php

            if ($_COOKIE["name_cooler"] == null){
                echo 'Введите прошлые<br>комплектующие';
            }

            elseif ($_COOKIE["name_ram"] == null and $_COOKIE["name_mb"] == null) {
                echo '<a href="Positions/ram.php">Выбрать</a>';
            }
            elseif ($_COOKIE["name_ram"] != null and $_COOKIE["name_mb"] == null) {
                echo '<a href="Positions/ram.php">Изменить<br><br></a>';
                echo "<a href='config/del.php?name=ram'>Удалить</a>";
            }
            elseif ($_COOKIE["name_ram"] != null and $_COOKIE["name_mb"] != null) {
                echo '<a href="#">ВЫБРАНО!</a>';
            }


            ?></td>
        <td><?php

            if ($_COOKIE["name_ram"] == null){
                echo 'Введите прошлые<br>комплектующие';
            }

            elseif ($_COOKIE["name_mb"] == null and $_COOKIE["name_hdd"] == null) {
                echo '<a href="Positions/mb.php">Выбрать</a>';
            }
            elseif ($_COOKIE["name_mb"] != null and $_COOKIE["name_hdd"] == null) {
                echo '<a href="Positions/mb.php">Изменить<br><br></a>';
                echo "<a href='config/del.php?name=mb'>Удалить</a>";
            }
            elseif ($_COOKIE["name_mb"] != null and $_COOKIE["name_hdd"] != null) {
                echo '<a href="#">ВЫБРАНО!</a>';
            }


            ?></td>
        <td><?php

            if ($_COOKIE["name_mb"] == null){
                echo 'Введите прошлые<br>комплектующие';
            }

            elseif ($_COOKIE["name_hdd"] == null and $_COOKIE["name_gpu"] == null) {
                echo '<a href="Positions/hdd.php">Выбрать</a>';
            }
            elseif ($_COOKIE["name_hdd"] != null and $_COOKIE["name_gpu"] == null) {
                echo '<a href="Positions/hdd.php">Изменить<br><br></a>';
                echo "<a href='config/del.php?name=hdd'>Удалить</a>";
            }
            elseif ($_COOKIE["name_hdd"] != null and $_COOKIE["name_gpu"] != null) {
                echo '<a href="#">ВЫБРАНО!</a>';
            }


            ?></td>
        <td><?php

            if ($_COOKIE["name_hdd"] == null){
                echo 'Введите прошлые<br>комплектующие';
            }

            elseif ($_COOKIE["name_gpu"] == null and $_COOKIE["name_pu"] == null) {
                echo '<a href="Positions/gpu.php">Выбрать</a>';
            }
            elseif ($_COOKIE["name_gpu"] != null and $_COOKIE["name_pu"] == null) {
                echo '<a href="Positions/gpu.php">Изменить<br><br></a>';
                echo "<a href='config/del.php?name=gpu'>Удалить</a>";
            }
            elseif ($_COOKIE["name_gpu"] != null and $_COOKIE["name_pu"] != null) {
                echo '<a href="#">ВЫБРАНО!</a>';
            }


            ?></td>
        <td><?php

            if ($_COOKIE["name_gpu"] == null){
                echo 'Введите прошлые<br>комплектующие';
            }

            elseif ($_COOKIE["name_pu"] == null and $_COOKIE["name_case"] == null) {
                echo '<a href="Positions/pu.php">Выбрать</a>';
            }
            elseif ($_COOKIE["name_pu"] != null and $_COOKIE["name_case"] == null) {
                echo '<a href="Positions/pu.php">Изменить<br><br></a>';
                echo "<a href='config/del.php?name=pu'>Удалить</a>";
            }
            elseif ($_COOKIE["name_pu"] != null and $_COOKIE["name_case"] != null) {
                echo '<a href="#">ВЫБРАНО!</a>';
            }


            ?></td>
        <td><?php

            if ($_COOKIE["name_pu"] == null){
                echo 'Введите прошлые<br>комплектующие';
            }
            elseif ($_COOKIE["name_case"] == null) {
                echo '<a href="Positions/case.php">Выбрать</a>';
            }
            elseif ($_COOKIE["name_gpu"] != null) {
                echo '<a href="Positions/case.php">Изменить<br><br></a>';
                echo "<a href='config/del.php?name=case'>Удалить</a>";
            }


            ?></td>
    </tr>
</table>

<?php

echo "<br><br><a href='config/del_all.php'>УДАЛИТЬ ВСЕ!</a>";

$sum = $_COOKIE['price_processor'] + $_COOKIE['price_cooler'] + $_COOKIE['price_ram'] + $_COOKIE['price_mb'] + $_COOKIE['price_hdd'] + $_COOKIE['price_gpu'] + $_COOKIE['price_pu'] + $_COOKIE['price_case'];
echo "<br><br><h3>Общая сумма сборки: ".$sum." Руб</h3>";

?>



</body>
</html>