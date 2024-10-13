<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Practice</title>
  </head>
  <body>
    <?php
    $n = 10;
    $s1 = isset($n) ? $n : 0;
    $s2 = $n ?? 0;
    const MYCAR = "Volvo";
    if (defined(MYCAR)) {
        echo "oke";
    }
    echo "xin chao";
    echo $s1;
    echo $s2;
    // echo $s3;

    ?>
  
  </body>
</html>
