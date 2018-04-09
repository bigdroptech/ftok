    
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Downloads - Seeking young agri-preneurs</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/justified-nav/justified-nav.css" rel="stylesheet">

    <script type="text/javascript" src="http://ftok.org/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/crawler.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://getbootstrap.com/assets/js/html5shiv.js"></script>
      <script src="http://getbootstrap.com/assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <div class="masthead">
        <h2 class="text-muted">Grow It Big!</h2>
        <ul class="nav nav-justified">
          <li><a href="<?php echo base_url();?>">Home</a></li>
          
          <li class="active"><a href="<?php echo base_url();?>index.php/downloads">Downloads</a></li>
          <li><a href="<?php echo base_url();?>index.php/about">About</a></li>
        </ul>
      </div>

<br>
      <!-- Jumbotron -->
      <div class="jumbotron" style="background: #e5f3bb;padding: 0px;'">
        <img src="<?php echo base_url();?>img/banner.jpg">
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-3" style="text-align: justified;">
          <h3>Downloads</h3>
          <hr>
          <p>
            <ul>
              
              <li><a href="http://ftok.org/docs/entry_form.doc" class="">Entry Form</a></li>

            </ul>
          </p>
        </div>
        <div class="col-lg-9" style="text-align: justified;">
          <h3>Description</h3>
          <hr>
          <p>This challenge participation guide gives information about the background of the challenge and explains how you can participate.</p>
          <p><a class="btn btn-primary" href="http://ftok.org/docs/entry_form.doc">Download Here &raquo;</a></p>
        </div>
      </div>

      <div class="span12">
        <hr> <center>
        <div class="marquee" id="mycrawler1">
         
                 <img src="<?php echo base_url();?>img/ygrk.png" alt="">
                 <img src="<?php echo base_url();?>img/farmspace.png" alt="">
                 <img src="<?php echo base_url();?>img/ftoklogo.png" alt="">
                 <img src="<?php echo base_url();?>img/apflogo.png" alt="">
                 <img src="<?php echo base_url();?>img/growthhub.png" alt="">
                 <img src="<?php echo base_url();?>img/OAYouth.png" alt="">
                 <img src="<?php echo base_url();?>img/cic.png" alt="">
         
            </div> </center>
      </div>

      <!-- Site footer -->
      <div class="footer">
        <p>Fair Trade Organisation of Kenya&copy; 2013</p>
      </div>


    </div> <!-- /container -->

<script type="text/javascript">
      marqueeInit({
  uniqueid: 'mycrawler1',
  style: {
    'padding': '0px 20px 0px 20px',
    'width': '1000px',
    'height': '73px',
    'top':'0px'
  },
  inc: 2, //speed - pixel increment for each iteration of this marquee's movement
  mouse: 'cursor driven', //mouseover behavior ('pause' 'cursor driven' or false)
  moveatleast: 2,
  neutral: 150,
  savedirection: true,
  random: true
});

      </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>