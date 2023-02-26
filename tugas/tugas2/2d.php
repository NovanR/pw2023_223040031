<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2d</title>

    <style>
        .kotak {
            display: inline-block;
            border: 1px solid black;
            width: 50px;
            height: 50px;
        }
        .hitam {
            background-color: black;
        }
        .putih {
            background-color: white;
        }
        .catur {
            line-height: 10px;
        }
        </style>
</head>

<body>
    <div class="catur">
        <?php
        for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j < 5; $j++) {
                if (($i + $j) % 2 == 0) {
                    echo "<div class='kotak hitam'></div>";
                } else {
                    echo "<div class='kotak putih'></div>";
                }
            }
            echo "<br>";
        }
        ?>
    </div>
</body>

</html>