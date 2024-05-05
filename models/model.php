<?php 
	/**
	 * 
	 */
	class datamodel
	{
		private $host='localhost';
		private $user='root';
		private $pass='';
		private $dbname='project_sv';
		private $connect=null;
		
		function __construct()
		{
			$this->ketnoi();
		}
		// kết nối với mysql
		public function ketnoi(){
			$this->connect=new mysqli($this->host, $this->user,$this->pass,$this->dbname);
			mysqli_set_charset($this->connect,'UTF8');
		}
		
		public function laysinhvien(){
			$sql='select * from tbl_sinhvien';
			$this->ketqua=$this->connect->query($sql);
			if($this->ketqua->num_rows==0){
				$data=0;

			}else {
				while ($row=$this->ketqua->fetch_assoc()){
						$data[]=$row;
			}
				}
				return $data;
		}
		
	}
 ?>