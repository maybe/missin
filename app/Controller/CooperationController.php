<?php

App::uses('AppController', 'Controller');

class CooperationController extends AppController {

	public $name = 'Cooperation';

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
