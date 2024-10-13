<?php
$n = $_GET["n"] ? $_GET["n"] : 5;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>text php</title>
    <!-- <link href="css/style.css" rel="stylesheet"> -->
    <style>
    tr:hover{
      background-color: red;
    }
    </style>
  </head>
  <body>
    <form action="">
      <input type="number" name="n" id="">
      <input type="submit" value="">
    </form>
    <table border="1"
      <?php
        for ($i = 1; $i < 10; $i++) {
            echo "<tr><td>$n</td>";
            echo "<td>$i</td>";
            echo "<td>".($n * $i)."</td></tr>";
        }
?>
    </table>
    <?php
    var_dump($n);
?>
  </body>
</html>
