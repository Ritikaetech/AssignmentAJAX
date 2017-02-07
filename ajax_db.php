<?php 
  mysql_connect("localhost", "excelarf", "**T0y*6z8e0c") || die(mysql_error());
  mysql_select_db("excelarf_ritika") || die(mysql_error());
  $result = mysql_query("SELECT * FROM MyGuests ORDER BY id DESC LIMIT 5");
  $data = array();
  while ( $row = mysql_fetch_row($result) )
   {
    $datas[] = $row;
   }
  echo json_encode( $datas );
?>