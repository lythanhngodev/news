<?php 
	class clsKetnoi
	{
		private $maychu ="localhost";
		private $tendangnhap="root";
		private $matkhau="";
		private $csdl="vlute";

		public function ketnoi(){
			$conn=@mysqli_connect($this->maychu, $this->tendangnhap, $this->matkhau);
			mysqli_select_db($conn, $this->csdl);
			mysqli_query($conn, "SET character_set_results=utf8");
			mb_language('uni');
			mb_internal_encoding('UTF-8');
			mysqli_query($conn, "set names 'utf8'");
			return $conn;
		}
	}
	function vlu_login($username, $password){	
		$password = md5($password);
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$hoi = "select * from user where (email = '$username' or tendn = '$username') and matkhau = '$password' and quyen!='0'";
		$thucthi = mysqli_query($conn, $hoi);
		$dem_user = mysqli_num_rows($thucthi);
		if ($dem_user > 0)
			return true;
		else
			return false;
	}
 ?>