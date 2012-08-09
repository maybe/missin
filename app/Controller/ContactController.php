<?php

App::uses('AppController', 'Controller');

class ContactController extends AppController {

	public $name = 'Contact';

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
