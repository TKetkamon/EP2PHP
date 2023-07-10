<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page_4_3</title>
    <style>
        /* Add any desired styling for the footer */
        footer {
            background-color: #f2f2f2;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>4.1แสดงชื่อ-นามสกุล ชื่อเล่น ด้วยตัวแปร</h1>
    <h2><?php echo "Hello PHP";
        ?></h2>
    <?php
    echo "Miss Ketkamon Phromplaikaew<br>";
    $nickname = "Toey";
    $age = 23;
    echo "nickname : " . $nickname;
    echo "<br>Age : ".$age." ปี";
    ?>
    <h3><a href="index.html">Home</a></h3>
</body>

<footer>&Copy Right by thonburi university</footer>

</html>