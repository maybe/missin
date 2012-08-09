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
}
