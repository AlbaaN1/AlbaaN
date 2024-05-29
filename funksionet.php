<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function x()
        {
            echo "Eren Kacaniku";
        }
        x();
    ?>
    <br>
    <?php
        function text($emri)
        {
            echo $emri."<br>";
        }
        text("Arianit");
        text("Eren");
        text("Alban");

        function text1($emri1,$mbiemri)
        {
            echo $emri1.$mbiemri."<br>";
        }
        text1("Arianit ","Tershnjaku");
        text1("Ari ","Tershnjaku");
        text1("Niti ","Tershnjaku");
    ?>
</body>
</html>