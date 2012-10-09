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
      <?php if($style==0)
              echo "没有小黑裙的女人就没有未来。<br>小黑裙，Little black dress，在服装界一直享有百搭易穿、永不失手的声誉，因而顺理成章地成为女士们衣橱里的必备品。
                  女人们发现小黑裙谁都能穿得好看，尤其对那些想要有新妩媚造型的人来说，小黑裙能使她们更婀娜。越来越多的人把它纳入了自己的衣橱。在时装史的众多转折点上，
                  小黑裙不断地被重新演绎，并且已经成为知识分子、摇滚一族和朋克一族共同的心头好。 正如Didier Ludot 在他的《The Little Black Dress》中所写，“没有
                  小黑裙的女人就没有未来。” ";
            else if($style==2)
              echo "2012伦敦奥运会不仅仅是一场运动盛宴，它同时触动了时尚圈的敏感神经，复古的号角吹起，英伦风带着新鲜的空气回归，其实我们根本无法用一个词来总结英伦风格：
                  至今保留着皇室传统，却时刻涌现出最潮最锐的新气象。经典传承的贵族装扮，朋克摇滚的叛逆精神，清新时尚的学院装扮。感受MissIN的英伦风潮，准备好了么？";
            else if($style==1)
              echo "中世纪宫廷的贵族名媛，到今天银幕上大大小小的明星麻豆，都可以找到她的忠实拥趸，点缀在婚纱上是浪漫温馨，与碎花裙碰撞是甜美可人，与黑色衔接是性感魅惑……
                  从只为贵族的服饰而出现到现在的全民普及，蕾丝的身影从未从时尚T台淡出，一直稳居时尚榜单榜首。轻柔的蕾丝将女人的柔美妩媚演绎得淋漓尽致，穿上她只需那么轻轻
                  地往街头一站，便能妖娆一个季节的视线。";
      ?>
      <br/><br/>
    </div> 
    
    <div class="classic-show">
      <div class="classic-item">
        <div class="classic-img"><img src="img/classic/<?php echo $style?>/1.jpg"></div>
        <div class="classic-desc">夏季新款通勤OL连衣裙</div>
      </div>
      <div class="classic-item">
        <div class="classic-img"><img src="img/classic/<?php echo $style?>/2.jpg"></div>
        <div class="classic-desc">夏季新款通勤OL连衣裙</div>
      </div>
      <div class="classic-item">
        <div class="classic-img"><img src="img/classic/<?php echo $style?>/3.jpg"></div>
        <div class="classic-desc">夏季新款通勤OL连衣裙</div>
      </div>
      <div class="classic-item">
        <div class="classic-img"><img src="img/classic/<?php echo $style?>/4.jpg"></div>
        <div class="classic-desc">夏季新款通勤OL连衣裙</div>
      </div>
      <div id="classic-rarrow"><a href="javascript:void(0);"><img src="img/classic/rarrow.jpg"></a></div>
      <br clear=all>
    </div>

    <div style="float:left;margin-left:-110px;padding-top:220px;"><a href="/"><img src="img/back_home.jpg" /></a></div>
  </div>
  <br clear="all" />
</div>