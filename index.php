<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Chess Generator</title>
</head>
<body>
    <div style="width:100%;display:flex;justify-content:center;margin-bottom:100px;">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="number" name="input_number" style="width:400px;padding-top:10px;padding-bottom:10px;font-size:large;">
            <input type="submit" style="padding:10px;">
        </form>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["input_number"])) {
        // collect value of input field
        echo "<div style=marginTop:400px;height:100%;display:flex;justify-content:center;align-items:center>";
        echo "<table style=border:2px;border-color:black;border-style:solid;padding:0px>";

        $var = $_POST["input_number"];
        for ($i = 0; $i < $var; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $var; $j++) {
                if (($i + $j) % 2 == 0) {
                    echo "<td style=padding:30px;background-color:black;></td>";
                } else {
                    echo "<td style=padding:30px;background-color:white;></td>";
                }
            }
            echo "</tr>";
        }

        echo "</table>";
        echo "</div>";
    }
    ?>
</body>

</html>