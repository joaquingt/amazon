<?php
  include 'simplexlsx.class.php';
  echo 'this is a test';
  $xlsx = new SimpleXLSX('kdp-report-1-2015.xls');
  echo '<h1>$xlsx->rows()</h1>';
  echo '<pre>';
  print_r( $xlsx->rows() );
  echo '</pre>';

  echo '<h1>$xlsx->rowsEx()</h1>';
  echo '<pre>';
  print_r( $xlsx->rowsEx() );
  echo '</pre>';
  ?>
