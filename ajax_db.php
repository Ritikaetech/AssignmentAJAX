<?php 
  mysqli_connect("localhost", "root", "java@123") || die(mysqli_error());
  mysqli_select_db("ritika") || die(mysqli_error());
  $result = mysqli_query("SELECT * FROM MyGuests ORDER BY id DESC LIMIT 5");
  $data = array();
  while ( $row = mysqli_fetch_row($result) )
   {
    $datas[] = $row;
   }
  echo json_encode( $datas );
?>