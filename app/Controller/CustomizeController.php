<?php

App::uses('AppController', 'Controller');

class CustomizeController extends AppController {

	public $name = 'Customize';

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
