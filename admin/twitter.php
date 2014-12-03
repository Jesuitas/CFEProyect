
<html>
<head>
<title> Login</title>
 <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>

<link href="css/csspage.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php

$id = $_POST["ids"]; 
$twitter = $_POST["twitter"];
echo '
<div class="container">
<form id="log" action="acciones/twitter.php" class="form-signin" method="post">
<div class="control-group">
<label class="control-label" for="usuario">Twitter:</label>
<div class="controls">
<input type="text" name="email" id="email" value="'.$twitter.'"  />
<input type="hidden" name="ids" value="'.$id.'">
</div>
</div>
<div class="control-group">
<div class="controls">
<input type="submit" value="modificar" class="btn" name="modificar" />
<input type="submit" class="btn" value="Cancelar" name="cancelar">
</div>
</div>
</form>';
?>
</div>
</body>
</html>







					