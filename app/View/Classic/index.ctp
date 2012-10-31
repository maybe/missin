<div class="wrapper" style="position: relative;color:#000000;">

  <div id="left-panel">
    <div id="left-panel-div1"><img src="img/classic/classic_s.jpg" /></div>
    <div id="left-panel-div2">-</div>
    <div id="left-panel-div3"><img src="img/missin_2012.jpg" /></div>
    <div id="left-panel-div4"><img src="img/comments.jpg" /></div>
  </div>

  <div id="center-panel">
    <div id="wrapper-title"><img src="img/classic/classic.jpg"/></div>

    <div id="classic">
      <ul>
        <li><a href="/classic?s=0" <?php if($style==0) echo "style='color:#000000;'";?>>甄选小黑裙</a></li>
        <li>|</li>
        <li><a href="/classic?s=1" <?php if($style==1) echo "style='color:#000000;'";?>>蕾丝复兴</a></li>
        <li>|</li>
        <li><a href="/classic?s=2" <?php if($style==2) echo "style='color:#000000;'";?>>英伦漫步</a></li>
      </ul>
      <br clear="all"/>
    </div>
    <div style="margin-bottom:20px;"></div>

    <div class="wrapper-description" style="width:720px;">
      <?php 
        echo $img_array[$style][0];
      ?>
      <br/><br/>
    </div> 
    
    <div class="classic-show">
      <div class="classic-item">
        <?php for($i=1;$i<5;$i++){?>
          <div class="classic-item">
            <div class="classic-img"><img src="<?php echo $img_array[$style][$i]["img"]?>"></div>
            <div class="classic-desc font8pt" style="margin-top:5px;"><?php echo $img_array[$style][$i]["desc"]?></div>
          </div>
        <?php }?>

      </div>
      <div id="classic-rarrow"><a href="<?php echo "/classic?s=".(($style+1)%3) ?>"><img src="img/classic/rarrow.jpg"></a></div>
      <br clear=all>
    </div>

    <div style="float:left;margin-left:-110px;padding-top:220px;"><a href="/"><img src="img/back_home.jpg" /></a></div>
  </div>
  <br clear="all" />
</div>