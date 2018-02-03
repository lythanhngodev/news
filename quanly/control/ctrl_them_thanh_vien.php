<?php
  //$quyen_user=='1';
  include_once("model/md_them_thanh_vien.php");
  if(isset($_POST['luuTV'])){
  	$tendn = $_POST['tendn'];
    $tenuser = $_POST['tenuser'];
    $matkhau = $_POST['matkhau'];
    $sdt = $_POST['sdt'];
    $email = $_POST['email'];
    $facebook = $_POST['facebook'];
    $hinhanh = $_POST['anhdaidien'];
    $ngaythamgia = $_POST['ngaythamgia'];
    $ngaysinh = $_POST['ngaysinh'];
    $gioitinh=$_POST['gioitinh']; // 1 là nam, 0 là nữ
    $quyen=$_POST['quyen'];
    $iduser = $id_user;
    vlu_them_thanh_vien($tendn, $tenuser, $matkhau, $sdt, $email, $facebook, $hinhanh, $ngaythamgia, $ngaysinh, $gioitinh, $quyen);
    if($themthanhcong==1){
      ?>
      <script type="text/javascript">
      	alert("Thêm thành viên thành công!");
      	location.href = "<?php echo $vlute['HOST']; ?>?p=thanhvien";
      </script>
      <?php
    }else{
      ?>
      <script type="text/javascript">
      	alert("Thêm thành viên không thành công!");
      	history.go(-1); // Quay lại trang trước
      </script>
      <?php
    }
  }
  else
  	include_once("view/vw_them_thanh_vien.php");
 ?>