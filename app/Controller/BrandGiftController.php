<?php

App::uses('AppController', 'Controller');

class BrandGiftController extends AppController {

	public $name = 'BrandGift';

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
