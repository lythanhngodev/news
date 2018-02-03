<?php
  //$quyen_user=='1';
  $idbv = 0;
  if (isset($_GET['id'])) {
    $idbv = $_GET['id'];
  }
  settype($idbv, 'int');
  include_once("model/md_sua_bai_viet.php");

  $baiviet=vlu_lay_bai_chinh_sua($idbv);
  $dembai = mysqli_num_rows($baiviet);

  if ($dembai>0) {
    if(isset($_POST['luuBai'])){
      // trường hợp xác nhận điều chỉnh bài viết
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
      if (isset($_POST['anhien']))
        $hienthi = 1; // cho phepos hiện bài viết
      vlu_sua_bai_viet($idbv,$tenbv, $idcm, $mota, $noidung, $hinhanh, $tukhoa, $linkbv, $ngaydang, $luotxem, $hienthi);
      if($suathanhcong==1){
        ?>
        <script type="text/javascript">
          alert("Sửa bài viết thành công!");
          location.href = "<?php echo $vlute['HOST']; ?>?p=baiviet";
        </script>
        <?php
      }else{
        ?>
        <script type="text/javascript">
          alert("Sửa bài viết không thành công!");
          history.go(-1); // Quay lại trang trước
        </script>
        <?php
      }
    }
    else{
      // trường hợp chỉnh sửa bài viết
      $row_bv = mysqli_fetch_assoc($baiviet);
      $tenbv = $row_bv['tenbv'];
      $idcm = $row_bv['idcm'];
      $mota = $row_bv['mota'];
      $noidung = $row_bv['noidung'];
      $thumb = $row_bv['thumb'];
      $tukhoa = $row_bv['tukhoa'];
      $linkbv = $row_bv['linkbv'];
      $ngaydang = $row_bv['ngaydang'];
      $luotxem = $row_bv['luotxem'];
      $tieude = $row_bv['tieude'];
      $tinnoibac = $row_bv['tinnoibac'];
      $hienthi = 0; // là ko cho hiện bài viết
      if ($row_bv['hienthi']=='1')
        $hienthi=1;
      $iduser = $id_user;
      include_once("view/vw_sua_bai_viet.php");
    }
  }
  else{
    include_once("view/vw_khong_thay_bai_viet.php");
  }
 ?>