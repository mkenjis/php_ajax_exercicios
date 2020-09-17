<?php

  $callback = isset($_GET['callback']) ? $_GET['callback'] : false;

  $conn = mysqli_connect("localhost","andes","123456","andes");

  $select = "select nomeproduto,precounitario from produtos";
  $prod = mysqli_query($conn, $select);

  $ret = array();
  while ($line = mysqli_fetch_object($prod)) {
    $ret[] = $line;
  }
 
  print_r($ret);
//  echo ($callback ? $callback . '(' : '') . json_encode($ret) . ($callback ? ')' : '');

  mysqli_close($conn);
?>
