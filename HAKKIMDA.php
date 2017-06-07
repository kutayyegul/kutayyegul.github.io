<!DOCTYPE html>
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400, 600" rel="stylesheet">
  <link href="assets/style4.css" type="text/css" rel="stylesheet">
  <link rel="icon" href="img/demo_icon.ico" sizes="32x32">
  </head>
<body>

  <div class="header">
    <div class="container">
      <ul class="nav">
	   <a href="https://twitter.com/kutayyegul" target="_blank"><img src="img/Twitter_Logo_Blue.png" height="32px" width="32px" ></a>
      <a href="https://www.facebook.com/kutay.yegul" target="_blank"><img src="https://www.facebook.com/images/fb_icon_325x325.png" height="28px" width="28px" ></a>
      <a href="https://tr.linkedin.com/in/kutay-yegül-61588252" target="_blank"><img src="img/In-2C-28px-TM.png" alt="Linkedin Icon"></a>
	  </ul>
    </div>
  </div>

  <div class="jumbotron">
    <div class="container">  
      <div class="main">
        
        <!--<a class="btn-main" href="#">Get started</a> -->
		 <img class="resim" src="img/photo.jpg" height="150px" width="150px">
		 <h1>HAKKIMDA</h1>
	  </div>
    </div>
  </div>

  <div class="supporting">
    <div class="container">
      <?php
        for ($leap = 2004; $leap < 2050; $leap + 4) {
        echo "<p>$leap</p>";
      }
      ?>


    </div>
    <div class="clearfix"></div>
  </div>

  <div class="footer">
    <div class="container">
      <p>&copy; Kutay YEGÜL 2016</p>
    </div>
  </div>

</body>
</html>