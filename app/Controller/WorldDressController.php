<?php

App::uses('AppController', 'Controller');

class WorldDressController extends AppController {

	public $name = 'WorldDress';

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
    
    $content_array = array(
      array("img"   => "img/world/world1.jpg",
            "title" => "1920s 纸醉金迷的爵士时代",
            "desc"  => "<br/>
                      “这是一个奇迹的时代，一个艺术的时代，一个挥金如土的时代，也是一个充满嘲讽的时代”<br/>
                      <br/>
                      <span style=\"font-size:11pt;\">Flapper Dress</span><br/>
                      <br/>
                      Flapper：它是1920年代女性的潮流，更是一个文化符号。年轻的中产女性们不再穿着束绑身体的束腹，“Flapper”们抽烟、喝酒、<br/>
                      开车、化浓妆、常常晚上外出跳舞到凌晨、女性的地位有了新的变化，她们率性而奔放。<br/>	"),
      array("img" => "img/world/world2.jpg",
            "title" => "1930s 美好时光的回顾",            
            "desc"=> "<br/>
                      30年代是一个精神至上的年代，流行对过去美好的时光的回顾。更多的女性选择了简洁朴素的古典装扮。"),
    );
    
    $this->set('content_array', $content_array);
    
    

  }
}
