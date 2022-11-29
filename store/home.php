<?php
  session_start();
  if(isset($_SESSION['user'])){
      echo '<html>
      <head>
          <link rel="stylesheet" href="Design/style.css" type="text/css">
          <frameset cols="375,*" border="3">
              <frame name="nav" src="welcome.html" />
              <frame name= "main" src="main1.html">
          </frameset>
      </head>
      <body bgcolor="#e0961f">
          <div class="loginbox">
          
          </div>
      </body>
  </html>';
  }
  else{
      header('location:../user_logging/user_logging_form.html');
  }
?>
