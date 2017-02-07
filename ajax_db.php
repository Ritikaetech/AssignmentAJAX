<?php 
  mysqli_connect("localhost", "excelarf", "**T0y*6z8e0c") || die(mysqli_error());
  mysqli_select_db("excelarf_ritika") || die(mysqli_error());
  $result = mysqli_query("SELECT * FROM MyGuests ORDER BY id DESC LIMIT 5");
  $data = array();
  while ( $row = mysqli_fetch_row($result) )
   {
    $datas[] = $row;
   }
  echo json_encode( $datas );
?>
