<?php

App::uses('AppController', 'Controller');

class OnlineController extends AppController {

	public $name = 'Online';

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
