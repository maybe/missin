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
    
  }
}
