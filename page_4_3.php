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
    <h1>4.3เปลี่ยนตัวอักษรเป็นตัวพิมพ์ใหญ่ทั้งหมด และ เปลี่ยนตัวอักษรเป็นตัวพิมพ์เล็กทั้งหมด</h1>
    <?php
    $text = "Ketkamon Phromplaikaew";
    ?>
    <h3>
        Matn Text : <?php echo $text;?>
    </h3>
    <h3>
        Upper Text :<?php echo strtoupper ($text);?>
    </h3>
    <h3>
        Lower Text :<?php echo strtolower ($text);?>
    </h3>
<h3><a href="index.html">Home</a></h3>
</body>
<footer>&Copy Right by thonburi university</footer>

</html>