<?php
  //$quyen_user=='1';
  include_once("model/md_them_bai_viet.php");
  if(isset($_POST['luuBai'])){
  	$tenbv = $_POST['tenbaiviet'];
    $idcm = $_POST['chuyenmuc'];
    $mota = $_POST['tomtat'];
    $noidung = $_POST['noidung'];
    $hinhanh = $_POST['hinhanh'];
    $tukhoa = $_POST['tukhoa'];
    $linkbv = $_POST['linkbaiviet'];
    $ngaydang = $_POST['ngaydang'];
    $luotxem = $_POST['luotxem'];
    settype($luotxem, 'int');
    $hienthi = 0; // là ko cho hiện bài viết
    $iduser = $id_user;
    if (isset($_POST['anhien']))
      $hienthi = 1; // cho phepos hiện bài viết
    vlu_them_bai_viet($tenbv, $idcm, $mota, $noidung, $hinhanh, $tukhoa, $linkbv, $ngaydang, $luotxem, $hienthi, $iduser);
    if($themthanhcong==1){
      ?>
      <script type="text/javascript">
      	alert("Thêm bài viết thành công!");
      	location.href = "<?php echo $vlute['HOST']; ?>?p=baiviet";
      </script>
      <?php
    }else{
      ?>
      <script type="text/javascript">
      	alert("Thêm bài viết không thành công!");
      	history.go(-1); // Quay lại trang trước
      </script>
      <?php
    }
  }
  else
  	include_once("view/vw_them_bai_viet.php");
 ?>
