<!doctype html>
<html>
 <head>
  <script language="javascript" type="text/javascript" src="jquery.js"></script>
  <style>
   *{padding:1px; margin:0px;}
   #output{width:850px; height:400px; background-color:#d3caba; }
   #tbl{position:relative; top:30px;}
   td{padding:8px;}
  </style>
 </head>
 <body>
  <div id="output"></div>
  <script id="source" language="javascript" type="text/javascript">
   $('#output').append("<br /><h3><center>Employee Table</center></h3>");
   function explode(){
    var html = "<br /><h3><center>Employee Table</center></h3>";
    $.ajax({                                      
     url: 'ajax_db.php', data: "", dataType: 'json', success: function(rows)       
      {
        html+= "<table  border=1 width='850' id='tbl'>";
        html+=  "<tr>" +
                  "<th>Employee Name</th>" +
                  "<th>Email</th>" +
                  "<th>Message</th>" +
                  "<th>Date</th>" +
                "</tr>"
        for (var i in rows)
         {
          var row = rows[i];
          var employee_name = row[0];
          var email = row[1];
          var message = row[2];
          var date = row[3];
          html+= "<tr>" +
                    "<td width='25%'>" + employee_name + "</td>" +
                    "<td width='25%'>" + email + "</td>" +
                    "<td width='25%'>" + message + "</td>" +
                    "<td width='25%'>" + date + "</td>" +
                 "</tr>";                  
         }
        html+= "</table>";
        $("#output").html(html);
      }
     });
    }
   setInterval(explode, 1000);
  </script>
 </body>
</html>  
