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
      $this->set('title', "");
      $this->set('desc', "每个女人都有一个关于短裙的梦境，每一条裙装都像待放的花苞，或是柔美淡彩般的温婉气息，或是缤纷糖果的甜蜜，亦或是高雅沉静的神秘感。
秋冬季，巧搭半裙的装扮，温暖中不失轻盈与俏皮。");
    }
    else if($index==1)
    {
      $this->set('title', "");
      $this->set('desc', "天然的羊毛纤维，舒适温暖，品质上乘，毛呢大衣也成为时装历史中不可或缺的经典，是永恒不变的主题。
细致的剪裁，优雅大气的廓形，精致考究的面料引人怜爱，成就高品质的大牌时尚感。");
    }
    else
    {
      $this->set('title', "");
      $this->set('desc', "");
    }   
    
    $this->set('style', $index);
  }
}
