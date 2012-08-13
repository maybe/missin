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
    
  }
}
