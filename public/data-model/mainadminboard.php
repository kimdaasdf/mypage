<?php

  require_once('../data-model/config.php');

  $user_query = "SELECT * FROM boards where board_type = 'AB' order by board_id desc LIMIT 5";

  $result = mysqli_query($database, $user_query);

  $result_array = array();

  while( $row = mysqli_fetch_array( $result, MYSQLI_ASSOC ) ){
    $result_array[] = $row;
  };

  echo $result_array = json_encode( $result_array, JSON_UNESCAPED_UNICODE );

  mysqli_close($database);
 ?>