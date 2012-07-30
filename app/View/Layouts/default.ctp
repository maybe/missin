<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		MissIn
	</title>
	<?php
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
  <link href="/img/favicon.ico" type="image/x-icon" rel="icon" />
  <link href="/img/favicon.ico" type="image/x-icon" rel="shortcut icon" />
  <link rel="stylesheet" type="text/css" href="/css/style.css" />

  <script src="/js/jquery-1.7.2.min.js" type="text/javascript"></script> 
  <script src="/js/main.js" type="text/javascript"></script> 
  
  <script> 
    
    $(document).ready(function(){ 

    });    
  </script> 
</head>
<body>
	<div id="container" class="centered">
		<div id="header">
      <div id="top-bar">
        <div id="url-link" style="float: left;margin:12px 0px 0px 20px;">www.missin.com</div>
        <div id="search" style="float:right;">
          <div id="search-label"></div>
          <div id="search-text"><input type="text" name="search"></input></div>
          <br clear="all" />          
        </div>
        <div id="follow" style="float:right;margin-right: 30px">
          <div style="float: left; margin:14px 5px 0px 0px;">FOLLOW US ON: </div>
          <div class="follow-item"><a href="/"><img src="img/follow-1.png" style="border:0;margin: 0;padding: 0;"/></a></div>
          <div class="follow-item"><a href="/"><img src="img/follow-2.png" style="border:0;margin: 0;padding: 0;"/></a></div>
          <div class="follow-item"><a href="/"><img src="img/follow-3.png" style="border:0;margin: 0;padding: 0;"/></a></div>
          <br clear="all" />
        </div>
        <br clear="all"/>
      </div>
      <div id="title-block">
        <div id="logo"></div>
        <div id="navi">
          <ul>
            <li>ABOUT MISSIN</li>
            <li>MEMBER</li>
            <li>CONTACT US</li>
          </ul>
          <br clear="all"/>
          <ul>
            <li>BRAND GIFT</li>
            <li>COOPERATION</li>
            <li>ONLINE STORE</li>
          </ul>
          <br clear="all"/>
        </div>
        <div id="language-select"></div>
      </div>
		</div>
		<div id="main">
			<?php echo $this->fetch('content'); ?>
      <br clear="all" />
		</div>
		<div id="footer">
      <span><a href="/">SHOP ONLINE<img src="img/bottom-car.png" style="margin-left: 5px;"/></a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <span><a href="/">CONTACT US: 4008-517-517</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <span><a href="/">CLUB</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <span><a href="/">JOIN US</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <span><a href="/">SITE MAP</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;
      <span>2012 © All Rights Reserved by MissIN</span>
    </div>
	</div>
</body>
</html>
