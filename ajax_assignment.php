<!doctype html>
<html>
 <head>
  <script language="javascript" type="text/javascript" src="jquery.js"></script>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
   *{padding:1px; margin:0px;}
   #output{width:850px; height:400px; background-color:#d3caba; }
   #tbl{position:relative; top:30px;}
   td{padding:8px;}
  </style>
 </head>
 <body>
 
<div class="container">
  <br>
  <div class="col-md-8"></div>
  <!-- Trigger the modal with a button -->
  <div class="col-md-4"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Entries</button></div>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Employee Form</h4>
      	</div>
      <div class="modal-body">
          <form action="insert.php" method="post">
            <div class="container">
               <div class="col-md-2">Name:</div><div class="col-md-10"> <input type="text" name="name"><br><br></div>
               <div class="col-md-2">E-mail:</div><div class="col-md-10"><input type="text" name="email"><br><br></div>
               <div class="col-md-2">Message:</div><div class="col-md-10"> <input type="text" name="message"><br><br></div>
               <div class="col-md-2">Date:</div><div class="col-md-10"> <input type="date" name="dob"><br><br></div>
               <input type="submit" id="submit">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
<script>

     $(document).ready(function(){
     $("#submit").click(function() {
 	/*
      var Name = $("input[name]").val(); 
      var email = $("input[email]").val();
      var message = $("input[message]").val();
      var dob = $("input[dob]").val();
       */
       $.ajax({
          url:'insert.php',
          type:'post',
          data: {
                    'Name': $("#names").val(),
                    'email': $("#email").val(),
                    'message':$("#message").val(),
                    'dob':$("#dob").val() ,
                 },

          //dataType: "json",
          success:function(data) {
          alert(data);
     //alert("message");
     //url:'insert.php'
           }
   	   });
   	   return false;
    });
  });
 </script>
 
  <div class="container" id="output"></div>
  <script id="source" language="javascript" type="text/javascript">
   $('#output').append("<br /><h3><center>Employee Table</center></h3>");
   function explode(){
    var html = "<br /><h3><center>Employee Table</center></h3>";
    $.ajax({                                      
     url: 'ajax_db.php', data: "", dataType: 'json', success: function(rows)       
      {
        html+= "<table  border=1 width='800' id='tbl'>";
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
    };
  setInterval(explode, 1000);


  </script>
 </body>
</html>  
