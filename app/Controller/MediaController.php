<?php

App::uses('AppController', 'Controller');

class MediaController extends AppController {

	public $name = 'Media';

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
