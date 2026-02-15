<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <style>
        table{
            width: 100vw;
            height: 100vh;
            max-width: 100%;
            border-collapse: collapse;
        }
        td{
            width: 20%;
            height: 20%;
            margin: auto;
        }
    </style>
</head>
<body>
<?php
echo "<table>";

for($rows = 1; $rows <= 5; $rows++){
    echo "<tr>";
    for($cols = 1; $cols <= 5; $cols++){
        $r = rand(0,255);
        $g = rand(0,255);
        $b = rand(0,255);
        echo "<td style='background-color:($r,$g,$b)'>";
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>


</body>
</html>