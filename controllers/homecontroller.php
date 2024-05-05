<?php 

	require_once 'models/model.php';

/**
  * 
  */
 class datacontroller
 {
 	private $model;
 	function __construct()
 	{
 		$this->model=new datamodel();
 	}
 	public function dieuhuong(){
 		
			$data=$this->model->laysinhvien();
	 		include_once('views/home.php');
 		
 		
 	}
 } ?>