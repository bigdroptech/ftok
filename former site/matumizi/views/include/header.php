 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $title;?></title>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="www.gwijie.com">
    <meta name="google-site-verification" content="aoTvylLDLCZtOycnYAiOXzQ4KEuDWF9MdPrZpphV0z8" />


    <!-- Le styles -->
    <link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/bootstrap-responsive.css" rel="stylesheet">

    <link href="<?php echo base_url();?>css/style.css" rel="stylesheet">
    <!-- End Of Styles -->
    
    <!-- Javascript -->
    <script type="text/javascript" src="<?php echo base_url();?>js/jquery.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap.js" type="text/javascript" language="javascript" charset="utf-8" /> </script>
    <script src="<?php echo base_url();?>js/bootstrap-dropdown.js" type="text/javascript" language="javascript" charset="utf-8" /> </script>
    <script src="<?php echo base_url();?>js/jquery.nivo.slider.pack.js" type="text/javascript" language="javascript" charset="utf-8" /> </script>
    <script src="<?php echo base_url();?>js/jquery.nivo.slider.js" type="text/javascript" language="javascript" charset="utf-8" /> </script>
        <script type="text/javascript" src="<?php echo base_url();?>js/script.js"></script>
    
    <!-- End Of Javascript -->
    
</head>
<body>
<div id="" style="border-top: 7px solid #82bedd;padding: 3px;width: 100%;margin-top: 0px;"></div>
<div id="bodi" style="width: 960px;margin: 0px auto;">
<div style="">
<img src="<?php echo base_url(); ?>img/logo.png" alt="" /> 

<span id="menu_li" class="pull-right" style="">
<ul>
<li><a href="<?php echo base_url();?>">Home</a></li>
<li><a href="<?php echo base_url();?>index.php/about">About Us</a></li>
<li><a href="<?php echo base_url();?>challenge">Challenge</a></li>
<li><a href="<?php echo base_url();?>index.php/services">Interventions</a></li>
<li><a href="<?php echo base_url();?>index.php/gallery">Gallery</a></li>
<li><a href="<?php echo base_url();?>index.php/contacts">Contacts Us</a></li>
</ul>
</span>

</div>
<br>
<div class="container-fluid" style="width: 960px;margin: 0px auto;margin-left:-20px;">
    <div class="row-fluid">
    
    <div class="span8 well" style="height: 350px;">
    <div id="slider">
    <img src="<?php echo base_url();?>img/cows.jpg" alt="" />
    <img src="<?php echo base_url();?>img/coffee_beans.jpg" alt="" />
    <img src="<?php echo base_url();?>img/green_house.jpg" alt="" />
	</div>
    <!--Body content-->
    </div>
    <div class="span4 well" style="height: 350px;text-align: justify;">
    <span class="span12 label label-success" style="padding: 10px;margin-bottom: 10px;"><center>About FTOK</center></span>
    <h4>Who we are</h4>
    <hr style="margin: 5px auto;">
    Fair Trade Organization of Kenya (FTOK) is a nonprofit international network organization whose main aim is to create equitable and sustainable channels in production and trade...<a href="<?php echo base_url();?>index.php/about"><b>More</b></a>
    <br>
    <span class="span12 label label-success" style="padding: 10px;margin-bottom: 10px;"><center>FTOK - SSDFA Partnership</center></span>
    <br>
    <p>
    In an effort to deliver the SSDFA's mandate at the national level more effectively as well as establishment of strong linkages with dairy industry players, a successful partnership ... <a href="<?php echo base_url();?>index.php/ssdfa"><b>More</b></a>
    </p>
    </div>
    </div>
    </div>
<hr>
</div>
  <script>
  $(document).ready(function()
{
  $('.dropdown-toggle').dropdown();
  });
  </script>