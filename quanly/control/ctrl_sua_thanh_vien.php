<?php 
	include_once("model/md_sua_thanh_vien.php");
  //$quyen_user=='1';
    if(isset($_POST['luuTT'])){
      	// trường hợp xác nhận điều chỉnh bài viết
      	$tendn = $_POST['tendn'];
		$tenuser = $_POST['tenuser'];
		$sdt = $_POST['sdt'];
		$email = $_POST['email'];
		$facebook = $_POST['facebook'];
		$hinhanh = $_POST['anhdaidien'];
		$ngaysinh = $_POST['ngaysinh'];
		$gioitinh=$_POST['gioitinh']; // 1 là nam, 0 là nữ
		$iduser = $id_user;
		vlu_sua_thanh_vien($iduser, $tendn, $tenuser, $sdt, $email, $facebook, $hinhanh, $ngaysinh, $gioitinh);
	  if($suathanhcong==1){
	    ?>
	    <script type="text/javascript">
	      alert("Chỉnh sửa thành công!");
	      location.href = "<?php echo $vlute['HOST']; ?>?p=suathanhvien";
	    </script>
	    <?php
	  }else{
	    ?>
	    <script type="text/javascript">
	      alert("Chỉnh sửa không thành công!");
	      history.go(-1); // Quay lại trang trước
	    </script>
	    <?php
	  }
    }
    else
    if(isset($_POST['luuMK'])){
    	// Thay đổi mật khẩu
    	$password_o = $_POST['password_o'];
    	$password_n = $_POST['password_n'];
    	$iduser = $id_user;
    	$suathanhcong = vlu_sua_thanh_vien_mk($iduser, md5($password_n), md5($password_o));
    	if($suathanhcong==1){
	    ?>
	    <script type="text/javascript">
	      alert("Chỉnh sửa thành công!");
	      location.href = "<?php echo $vlute['HOST']; ?>?p=suathanhvien";
	    </script>
	    <?php
	  }else{
	    ?>
	    <script type="text/javascript">
	      alert("Chỉnh sửa không thành công!");
	      history.go(-1); // Quay lại trang trước
	    </script>
	    <?php
	  }
    }
    else{
      	// trường hợp chỉnh sửa bài viết
      	$thanhvien = vlu_lay_user($id_user);
		$row_tv = mysqli_fetch_assoc($thanhvien);
		include_once("view/vw_sua_thanh_vien.php");
    }
 ?>