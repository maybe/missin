<?php

App::uses('AppController', 'Controller');

class ClassicController extends AppController {

	public $name = 'Classic';

	public $helpers = array('Html', 'Session');

	public $uses = array();
 
  public function beforeFilter() 
  {
    parent::beforeFilter();
  }

  public function index() 
  {
    $index = 0;
    if ($this->request->is('get')&&!empty($this->request->query["s"])) 
    {
      $index = (int)($this->request->query["s"]);
      if($index>2||$index<0||$index=="")
        $index = 0;
    }
    
    $this->set('style', $index);
    
    $img_array = array(
      array(
          "没有小黑裙的女人就没有未来。<br>小黑裙，Little black dress，在服装界一直享有百搭易穿、永不失手的声誉，因而顺理成章地成为女士们衣橱里的必备品。
                  女人们发现小黑裙谁都能穿得好看，尤其对那些想要有新妩媚造型的人来说，小黑裙能使她们更婀娜。越来越多的人把它纳入了自己的衣橱。在时装史的众多转折点上，
                  小黑裙不断地被重新演绎，并且已经成为知识分子、摇滚一族和朋克一族共同的心头好。 正如Didier Ludot 在他的《The Little Black Dress》中所写，“没有
                  小黑裙的女人就没有未来。” ",
          array("img"=>"img/classic/0/1.jpg","desc"=>"花瓣镂空设计修身连衣裙"),
          array("img"=>"img/classic/0/2.jpg","desc"=>"蜂腰小裙摆极致修身连衣裙"),
          array("img"=>"img/classic/0/3.jpg","desc"=>"时尚透视感线条拼接修身连衣裙"),
          array("img"=>"img/classic/0/4.jpg","desc"=>"皮质拼接小裙摆修身连衣裙"), 
      ),
      array(
          "2012伦敦奥运会不仅仅是一场运动盛宴，它同时触动了时尚圈的敏感神经，复古的号角吹起，英伦风带着新鲜的空气回归，其实我们根本无法用一个词来总结英伦风格：
                  至今保留着皇室传统，却时刻涌现出最潮最锐的新气象。经典传承的贵族装扮，朋克摇滚的叛逆精神，清新时尚的学院装扮。感受MissIN的英伦风潮，准备好了么？",
          array("img"=>"img/classic/1/1.jpg","desc"=>"精致蕾丝  A型迷你款连衣裙"),
          array("img"=>"img/classic/1/2.jpg","desc"=>"白色蕾丝  腰部镂空设计修身连衣裙"),
          array("img"=>"img/classic/1/3.jpg","desc"=>"细腻蕾丝  M型胸修身连衣裙"),
          array("img"=>"img/classic/1/4.jpg","desc"=>"高贵丝绒拼接蕾丝 古典修身连衣裙"), 
      ),
      array(
          "中世纪宫廷的贵族名媛，到今天银幕上大大小小的明星麻豆，都可以找到她的忠实拥趸，点缀在婚纱上是浪漫温馨，与碎花裙碰撞是甜美可人，与黑色衔接是性感魅惑……
                  从只为贵族的服饰而出现到现在的全民普及，蕾丝的身影从未从时尚T台淡出，一直稳居时尚榜单榜首。轻柔的蕾丝将女人的柔美妩媚演绎得淋漓尽致，穿上她只需那么轻轻
                  地往街头一站，便能妖娆一个季节的视线。",
          array("img"=>"img/classic/2/1.jpg","desc"=>"英伦时尚 拼接修身连衣裙"),
          array("img"=>"img/classic/2/2.jpg","desc"=>"英伦经典 复古格纹淑女连衣裙"),
          array("img"=>"img/classic/2/3.jpg","desc"=>"复古英伦学院风 彼得潘领直身连衣裙"),
          array("img"=>"img/classic/2/4.jpg","desc"=>"高贵王妃款 复古蜂腰设计修身连衣裙"), 
      ),
    );
    
    $this->set('img_array', $img_array);
    
  }
}
