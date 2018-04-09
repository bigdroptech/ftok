    
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Seeking young agri-preneurs</title>

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
          <li class="active"><a href="<?php echo base_url();?>">Home</a></li>
          
          <li><a href="<?php echo base_url();?>index.php/downloads">Downloads</a></li>
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
        <div class="col-lg-4" style="text-align: justified;">
          <h3>About The Challenge</h3>
          <p>The 'Grow It Big' challenge is an online competition aimed at identifying agri-preneurs among the youth and also to establish why young people are less involved in agriculture. It closes on the <b>8th November, 2013</b>
            <br>It is <strong>FREE </strong>to Participate and open to all between the age of 18 and 35 years. Terms & Conditins apply
            <p></p>
          <p><a class="btn btn-primary" href="<?php echo base_url();?>index.php/about">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4" style="text-align: justified;">
          <h3>How To Participate</h3>
          With a wining idea in hand, participation is quite easy.
          <ol>
            <li>Fill an online form or Download one form the download page</li>
            <li>Attach your written idea and the participation form or online form</li>
            <li>Submit</li>
          </ol>
          <p><a class="btn btn-primary" href="<?php echo base_url();?>index.php/downloads">Participate &raquo;</a></p>
       </div>
        <div class="col-lg-4" style="text-align: justified;">
          <h3>Formal Regulations</h3>
          <p>All applications will be evaluated by an experienced jury. The jury will consider the following criteria:<br
            >
            <ul>
              <li>Innovation</li>
              <li>Creativity</li>
              <li>Originality</li>
            </ul></p>
          
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

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>