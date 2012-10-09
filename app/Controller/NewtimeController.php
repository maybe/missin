<?php

App::uses('AppController', 'Controller');

class NewtimeController extends AppController {

	public $name = 'Newtime';

	public $helpers = array('Html', 'Session');

	public $uses = array();
 
  public function beforeFilter() 
  {
    parent::beforeFilter();
  }

  public function index() 
  {
    
  }
  
  public function show()
  {
    $index = 0;
    if ($this->request->is('get')&&!empty($this->request->query["s"])) 
    {
      $index = (int)($this->request->query["s"]);
      if($index>2||$index<0||$index=="")
        $index = 0;
    }
    
    if($index==0)
    {    
      $this->set('title', "2012 MissIN秋冬迷雾森林系列");
      $this->set('desc', "在腰部加以荷叶边立体褶边，仅仅只是这个小改动，瞬间就有了将腰部的轮廓弱化，掩盖小肚肚，
                          腰线上调，视觉感变强的效果。腰间的巧妙廓形，将身体比例调节到完美，
                          突出黄金分割点上部的纤细，更可以让稍微丰满的你看上去妖娆妩媚。<br><br>
                          这种新廓形不仅修正了稍胖的体形，还能给人造成一种新颖的视觉感官。虽然你可以通过加强运
                          动来塑造你的纤腰，但是如果你够聪明，可以大胆选择蜂腰小裙摆的时装，一秒钟告别水桶腰！");
    }
    else if($index==1)
    {
      $this->set('title', "");
      $this->set('desc', "");
    }
    else
    {
      $this->set('title', "");
      $this->set('desc', "");
    }   
    
    $this->set('style', $index);
  }
}
