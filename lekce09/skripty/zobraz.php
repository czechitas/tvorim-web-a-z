<!DOCTYPE>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Zobrazovač formuláře</title>
    <style>
    body {
       padding: 2rem;
    }
    pre {
       font-size: 1.5rem;
       background-color: #e2e2e2;
       padding: 15px;
       border: 1px solid black;
       border-radius: 2px;
    }
    </style>
  </head>
  <body>
<?php

if (isset($_POST) && !empty($_POST)) {
    $array = $_POST;
    $method = "POST";
} else {
    $array = $_GET;
    $method = "GET";
}
?>
  <p>Metoda: <?php echo $method; ?></p>

  <pre>
<?php

end($array);
$end = key($array);
reset($array);
foreach ($array as $key => $value) {
    echo $key . "=" . $value;
    if ($key !== $end) {
	echo "\n";
    }
}
?>
  </pre>
  </body>
</html>
