<!DOCTYPE html>
<html>
<head>
  <title>120-MTT | Kirish</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/mine.js"></script>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> KIRISH </h2>

    <form method="post" action="?page=start" >
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
      <button type="submit" class="btn btn-outline-primary btn-lg btn-block"  style="padding:10px;" name="hook" value="ToDashboard">Kirish</button>
    </form>
       <span class="errors"><?php echo $_SESSION['errors'];?></span>
   

  </div>
</div>
</body>
</html>