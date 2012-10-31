<div class="wrapper" style="position: relative;color:#000000;">

  <div id="left-panel">
    <div id="left-panel-div1"><img src="/img/newtime/newtime_s.jpg" /></div>
    <div id="left-panel-div2">-</div>
    <div id="left-panel-div3"><img src="/img/missin_2012.jpg" /></div>
    <div id="left-panel-div4"><img src="/img/comments.jpg" /></div>
  </div>

  <div id="center-panel">
    <div id="wrapper-title"><img src="/img/newtime/newtime.jpg"/></div>

    <div id="classic">
      <ul>
        <li><a href="/newtime/show?s=0" <?php if($style==0) echo "style='color:#000000;'";?>>半裙的秘密花园</a></li>
        <li>|</li>
        <li><a href="/newtime/show?s=1" <?php if($style==1) echo "style='color:#000000;'";?>>温暖呢情 优雅经典</a></li>
       </ul>
      <br clear="all"/>
    </div>
    <div style="margin-bottom:20px;"></div>

    <div style="width:720px;" class="wrapper-description">
      <?php echo $desc?>
    </div>

    
    <div class="newtime-show">
      <?php if ($style == 1) {?>

      <div class="newtime-item">

      <div class="newtime-img"><img src="/img/newtime/<?php echo $style?>/1.jpg"></div>
        <div class="newtime-desc font8pt" style="margin-top:5px;">经典粗花呢羊毛直身连身裙</div>
      </div>
      <div class="newtime-item">
        <div class="newtime-img"><img src="/img/newtime/<?php echo $style?>/2.jpg"></div>
        <div class="newtime-desc font8pt" style="margin-top:5px;">精致毛呢修身连衣裙</div>
      </div>
      <div class="newtime-item">
        <div class="newtime-img"><img src="/img/newtime/<?php echo $style?>/3.jpg"></div>
        <div class="newtime-desc font8pt" style="margin-top:5px;">立体剪裁设计修身毛呢大衣</div>
      </div>
      <div class="newtime-item">
        <div class="newtime-img"><img src="/img/newtime/<?php echo $style?>/4.jpg"></div>
        <div class="newtime-desc font8pt" style="margin-top:5px;">侧身斜拉链堆领长款修身毛呢大衣</div>
      </div>
      <?php } else if($style==0) {?>
      <div class="newtime-item">
      <div class="newtime-img"><img src="/img/newtime/<?php echo $style?>/1.jpg"></div>
        <div class="classic-desc font8pt" style="margin-top:5px;">皮质拼接 淡彩色系优雅修身半裙</div>
      </div>
      <div class="newtime-item">
        <div class="newtime-img"><img src="/img/newtime/<?php echo $style?>/2.jpg"></div>
        <div class="newtime-desc font8pt" style="margin-top:5px;">精致皮袢 亮彩纯色优雅修身半裙</div>
      </div>
      <div class="newtime-item">
        <div class="newtime-img"><img src="/img/newtime/<?php echo $style?>/3.jpg"></div>
        <div class="newtime-desc font8pt" style="margin-top:5px;">开叉设计 甜蜜糖果色系时尚修身半裙</div>
      </div>
      <div class="newtime-item">
        <div class="newtime-img"><img src="/img/newtime/<?php echo $style?>/4.jpg"></div>
        <div class="newtime-desc font8pt" style="margin-top:5px;">柔美淡彩  绒情优雅修身半裙</div>
      </div>

      <?php }?>

      <div id="newtime-rarrow"><a href="<?php if($style==0)echo "/newtime/show?s=1"; else echo "/newtime/show?s=0";?>"><img src="/img/newtime/rarrow.jpg"></a></div>
      <br clear=all>
    </div>

    <div style="float:left;margin-left:-110px;padding-top:220px;"><a href="/newtime"><img src="/img/back_home.jpg" /></a></div>
  </div>
  <br clear="all" />
</div>