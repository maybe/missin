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
        <div id="url-link" style="float: left;margin:8px 0px 0px 20px;">www.missin.com</div>
        <div id="search" style="float:right;">
          <div id="search-label"></div>
          <div id="search-text"><input type="text" name="search"></input></div>
          <br clear="all" />          
        </div>
        <div id="follow" style="float:right;margin-right: 30px">
          <div style="float: left; margin:10px 5px 0px 0px;">FOLLOW US ON: </div>
          <div class="follow-item"><a href="http://weibo.com/lovemissin" target="_blank"><img src="/img/follow-1.jpg" style="border:0;margin: 0;padding: 0;"/></a></div>
          <div class="follow-item"><a href="http://weibo.com/lovemissin" target="_blank"><img src="/img/follow-2.jpg" style="border:0;margin: 0;padding: 0;"/></a></div>
          <div class="follow-item"><a href="http://weibo.com/lovemissin" target="_blank"><img src="/img/follow-3.jpg" style="border:0;margin: 0;padding: 0;"/></a></div>
          <br clear="all" />
        </div>
        <br clear="all"/>
      </div>
      <div id="title-block">
        <div id="logo"></div>
        <div id="navi">
          <ul>
            <li><a href="/about">ABOUT MISSIN</a></li>
            <li><a href="/member">MEMBER</a></li>
            <li><a href="/contact">CONTACT US</a></li>
          </ul>
          <br clear="all"/>
          <ul>
            <li><a href="/brand_gift">BRAND GIFT</a></li>
            <li><a href="/cooperation">COOPERATION</a></li>
            <li><a href="/online">ONLINE STORE</a></li>
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
      <span><a href="/online">SHOP ONLINE<img src="/img/bottom-car.png" style="border:0px;margin-left: 5px;"/></a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <span><a href="/"><a href="/"><img src="/img/wangwang.png" />CONTACT US: 010-58769723</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <span><a href="/">CLUB</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <span><a href="/">JOIN US</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <span><a href="/">SITE MAP</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <span>2012 © All Rights Reserved by MissIN</span>
    </div>
	</div>
</body>
</html>
