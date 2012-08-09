<?php

App::uses('AppController', 'Controller');

class MemberController extends AppController {

	public $name = 'Member';

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
