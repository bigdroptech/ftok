 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $title;?></title>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="www.gwijie.com">

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
<li><a href="<?php echo base_url();?>" class="">Home</a></li>
<li>|</li>
<li><a href="<?php echo base_url();?>index.php/about" class="">About Us</a></li>
<li>|</li>
<li><a href="<?php echo base_url();?>index.php/services" class="">Interventions</a></li>
<li>|</li>
<li><a href="<?php echo base_url();?>index.php/gallery" class="">Gallery</a></li>
<li>|</li>
<li><a href="<?php echo base_url();?>index.php/contacts"  class="">Contacts Us</a></li>
</ul>
</span>

</div>
<br>
</div>
  <script>
  $(document).ready(function()
{
  $('.dropdown-toggle').dropdown();
  });
  </script>