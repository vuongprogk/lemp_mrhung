<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <!-- <link href="css/style.css" rel="stylesheet"> -->
  </head>
  <body>
    <?php

    $a1 = [];
    $a2 = array();
    $a3 = [1,5,3];
    $a4 = ['x' => 1, 'y' => 'ab'];
    $a6 = array( 'x' => 1, 'y' => 'ab' );
    $a5 = [1,5,3];
    echo "<hr><br>Check if a5 is set or not";
    if (isset($a5)) {
        echo "<br>a5 is set";
    }
    echo "<hr><br> Print duplex array <br>";
    echo $a6['y'] . "<br>";
    echo "<hr><br> Unset value at index 1";
    unset($a3[1]);
    echo "<hr><br>Print number of elements in array a3";
    echo count($a3);
    echo "<hr><br>Enter debug mode to print elements in array a3";
    echo "<br>";
    print_r($a3);

    echo "<hr><br>Dumps information about a variable";
    echo "<br>";
    var_dump($a6);
    echo "<hr><br>Example 2<br>";
    $a = array('x1' => 1, 'x2' => 3, "x3" => 5);
    $t = 0;
    foreach ($a as $k => $v) {
        if ($v % 2) {
            $t += $v;
        }
        echo "<br> k = $k, v = $v, a[$k] = {$a[$k]}";
    }
    echo "<br>Tong = $t";
    echo "<hr><br>Example add anchor point to some website using array<br>";
    $a_anchor = [
    ['id' => 'gg', 'title' => "Google", "url" => "https://www.google.com/"],
    ['id' => 'bing', 'title' => "Bing", "url" => "https://www.bing.com/"],
    ['id' => 'fb', 'title' => "Facebook", "url" => "https://facebook.com/"],
    ]
    ?>
    <ul>
    <?php
    foreach ($a_anchor as $key => $value) {
        echo "<li><a href=\"{$value['url']}\" " .
        "target=\"_blank\">{$value['title']}</a> </li>";
    }
    ?>

    <?php

    echo "<hr><br>Example show table with exist array values<br>";
    $a_invoce = [
      ["id" => 1, "name" => "SP1", 'soluong' => 10, "gia" => 1000000],
      ["id" => 2, "name" => "SP2", 'soluong' => 20, "gia" => 2000000],
      ["id" => 3, "name" => "SP3", 'soluong' => 30, "gia" => 3000000],
      ["id" => 8, "name" => "SP8", 'soluong' => 80, "gia" => 8000000],
    ]
    ?>
    <table border="1">
      <thead>
        <td>STT</td>
        <td>ID</td>
        <td>Name</td>
        <td>Quantity</td>
        <td>Price</td>
        <td>Total</td>
      </thead>
    <?php
    foreach ($a_invoce as $key => $value) {
        ?>
        <tr>
          <td><?php echo $key + 1 ?></td>
          <td><?php echo $value['id'] ?></td>
          <td><?php echo $value['name'] ?></td>
          <td><?php echo $value['soluong'] ?></td>
          <td><?php echo number_format($value['gia']) ?></td>
          <td><?php echo number_format($value['soluong'] * $value['gia']) ?></td>
      </tr>
    <?php
    }
    ?>
    </table>
  
  </body>
</html>
