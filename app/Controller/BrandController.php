<?php

App::uses('AppController', 'Controller');

class BrandController extends AppController {

	public $name = 'Brand';

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
