<?php

App::uses('AppController', 'Controller');

class AboutController extends AppController {

	public $name = 'About';

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
