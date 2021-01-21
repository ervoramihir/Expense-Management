<?php include('includes/server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Reset-Password</title>
	 <link rel="stylesheet" type="text/css" href="css/style.css">
       <link href="css/font-awesome.min.css" rel="stylesheet">

     <link href="img/IMG-20200127-WA0008.png" rel="icon">

</head>
<body>
      <div class="header">
    <h2>Reset Your Password</h2>
  </div> 

<form method="post" action="">
    <?php include('errors.php'); ?>
     <div class="input-group">
      <label><i class="fa fa-envelope"> Email</i></label>
    <input type="text" name="email">
  </div>
  <div class="input-group">
      <button type="submit" class="btn" name="reset"><em class="fa fa-arrow-right" style="font-size: 20px;"></em> Reset Password</button>
    </div>
    <p>
      Back To Login? <a href="login.php" style="text-decoration: none;">Click here</a>
    </p>
</form>


</body>
</html>