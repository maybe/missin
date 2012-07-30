<?php

App::uses('AppController', 'Controller');

class IndexController extends AppController {

	public $name = 'Index';

	public $helpers = array('Html', 'Session');

	public $uses = array();
 
  public function beforeFilter() 
  {
    parent::beforeFilter();
  }

  public function index() 
  {
    
  }
}
