<link rel="stylesheet" href="css/datatables.min.css">
<script src="js/datatables.min.js" type="text/javascript"></script>
<script src="ckeditor/ckeditor.js"></script>
<script src="ckfinder/ckfinder.js"></script>

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Khoa - Bộ môn
        <div class="line"></div>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12 col-ms-12">
          <a id="themkhoabomon" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i> Thêm khoa - bộ môn</a>
        </div>
        <div class="col-md-12 col-ms-12 cach"></div>
      </div>
      <div class="windows-table">
        <table id="vlute" class="table" style="font-size: 12px;">
            <thead>
                <tr role="row">
                  <tr style="background-color: #3c8dbc;color: #fff;">
                    <th class="giua">STT</th>
                    <th class="giua" style="width: 200px;">Tên khoa</th>
                    <th class="giua" style="width: 200px;">Tên tiếng anh</th>
                    <!--<th class="giua">Địa chỉ</th>-->
                    <th class="giua">Điện thoại</th>
                    <th class="giua" >Mail</th>
                    <th class="giua">Thao tác</th>
                  </tr>
                </tr>
            </thead>
            <tbody>
            <?php 
              $stt = 1;
              while ($row = mysqli_fetch_assoc($dulieu)) {
                ?>
                  <tr>
                    <th class="giua"><?php echo $stt; ?></th>
                    <td id="id-ten-khoa-<?php echo $row['idkhoa']; ?>"><a><?php echo $row['tenkhoa']; ?></a></td>
                    <td id="id-ten-tieng-anh-<?php echo $row['idkhoa']; ?>"><?php echo $row['tentienganh']; ?></td>
                    
                    <td id="id-dien-thoai-<?php echo $row['idkhoa']; ?>" class="giua"><?php echo $row['dienthoai']; ?></td>
                    <td id="id-mail-<?php echo $row['idkhoa']; ?>" class="giua"><a href="mailto:<?php echo $row['mail']; ?>" target="_blank"><u><?php echo $row['mail']; ?></u></a></td>
                    <td class="giua"><a class="btn btn-primary suakhoabomon" title="Sửa" data-vlute="<?php echo $row['idkhoa']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        <a class="btn btn-danger xoa-gv" title="Xóa" data-vlute="<?php echo $row['idkhoa']; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </td>
                    <input type="hidden" value="<?php echo $row['diachi'] ?>" id="id-dia-chi-<?php echo $row['idkhoa'] ?>" name="">
                    <input type="hidden" value="<?php echo $row['ngaythanhlap'] ?>" id="id-ngay-thanh-lap-<?php echo $row['idkhoa'] ?>" name="">
                    <textarea hidden="hidden" id="id-mo-ta-khac-<?php echo $row['idkhoa'] ?>"><?php echo $row['motakhac'] ?></textarea>
                    <input type="hidden" value="<?php echo $row['hinhanhkhoa'] ?>" id="id-hinh-anh-khoa-<?php echo $row['idkhoa'] ?>" name="">
                    <input type="hidden" value="<?php echo $row['link'] ?>" id="id-link-<?php echo $row['idkhoa'] ?>" name="">
                </tr>
                <?php
                $stt++;
              }
            ?>
            </tbody>
        </table>
      </div>
    </section>

<!-- Modal: Thêm khoa - bộ môn -->
<div class="modal" id="vlute-modal-them-khoa-bo-mon" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Thêm khoa bộ môn</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Tên khoa</label>
          <input type="text" class="form-control" name="" id="ten-khoa-bo-mon-them" placeholder="tên khoa - bộ môn" required autocomplete="on">
        </div>
        <div class="form-group">
          <label>Tên tiếng anh</label>
          <input type="text" class="form-control" name="" id="ten-tieng-anh-them" placeholder="tên tiếng anh" required autocomplete="on">
        </div>
        <div class="form-group">
          <label>Địa chỉ</label>
          <input type="text" class="form-control" name="" id="dia-chi-them" placeholder="địa chỉ" required autocomplete="on">
        </div>
        <div class="form-group">
          <label>Điện thoại</label>
          <input type="text" class="form-control" name="" id="dien-thoai-them" placeholder="điện thoại" required autocomplete="on">
        </div>
        <div class="form-group">
          <label>Mail</label>
          <input type="text" class="form-control" name="" id="mail-them" placeholder="địa chỉ mail" required autocomplete="on">
        </div>
        <div class="form-group">
          <label>Ngày thành lập</label>
          <input type="date" class="form-control" name="" id="ngay-thanh-lap-them" required autocomplete="on">
        </div>
        <div class="form-group">
          <label>Mô tả khác</label>
          <textarea class="form-control" id="mo-ta-khac-them"></textarea>
        </div>
        <div class="form-group">
        <div class="form-group">
          <label>Link liên kết</label>
          <input type="text" class="form-control" name="" id="link-lien-ket-them" placeholder="link liên kết" required autocomplete="on">
        </div>
          <label>Chọn hình ảnh</label><br>
          <button class="btn btn-primary" id="" onclick="BrowseServer_them()">Chọn từ ...</button>
          <p class="help-block">Nên chọn hình ảnh có kích thước 720px x 287px.</p>
          <img src="../images/slider-mac-dinh.jpg" id="id-hinhanh-edit">
          <input type="text" hidden="hidden" name="" value="images/slider-mac-dinh.jpg" id="id-hinhanh-ct-them">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        <button type="button" class="btn btn-primary" id="them-khoa-bo-mon">Hoàn tất</button>
      </div>
    </div>
  </div>
</div><!-- Modal: Thêm khoa - bộ môn -->

<!-- Modal: Thêm khoa - bộ môn -->
<div class="modal" id="vlute-modal-sua-khoa-bo-mon" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Thêm khoa bộ môn</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Tên khoa</label>
          <input type="text" class="form-control" name="" id="ten-khoa-bo-mon-sua" placeholder="tên khoa - bộ môn" required autocomplete="on">
        </div>
        <div class="form-group">
          <label>Tên tiếng anh</label>
          <input type="text" class="form-control" name="" id="ten-tieng-anh-sua" placeholder="tên tiếng anh" required autocomplete="on">
        </div>
        <div class="form-group">
          <label>Địa chỉ</label>
          <input type="text" class="form-control" name="" id="dia-chi-sua" placeholder="địa chỉ" required autocomplete="on">
        </div>
        <div class="form-group">
          <label>Điện thoại</label>
          <input type="text" class="form-control" name="" id="dien-thoai-sua" placeholder="điện thoại" required autocomplete="on">
        </div>
        <div class="form-group">
          <label>Mail</label>
          <input type="text" class="form-control" name="" id="mail-sua" placeholder="địa chỉ mail" required autocomplete="on">
        </div>
        <div class="form-group">
          <label>Ngày thành lập</label>
          <input type="date" class="form-control" name="" id="ngay-thanh-lap-sua" required autocomplete="on">
        </div>
        <div class="form-group">
          <label>Mô tả khác</label>
          <textarea class="form-control" id="mo-ta-khac-sua"></textarea>
        </div>
        <div class="form-group">
        <div class="form-group">
          <label>Link liên kết</label>
          <input type="text" class="form-control" name="" id="link-lien-ket-sua" placeholder="link liên kết" required autocomplete="on">
        </div>
          <label>Chọn hình ảnh</label><br>
          <button class="btn btn-primary" id="" onclick="BrowseServer_sua()">Chọn từ ...</button>
          <p class="help-block">Nên chọn hình ảnh có kích thước 720px x 287px.</p>
          <img src="../images/slider-mac-dinh.jpg" id="id-hinhanh-sua">
          <input type="text" hidden="hidden" name="" value="images/slider-mac-dinh.jpg" id="id-hinhanh-ct-sua">
        </div>
      </div>
        <input type="text" hidden="hidden" name="" value="" id="id-id">
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        <button type="button" class="btn btn-primary" id="sua-slider">Hoàn tất</button>
      </div>
    </div>
  </div>
</div><!-- Modal: Chỉnh sửa khoa - bộ môn -->
<script>
    CKEDITOR.replace( 'mo-ta-khac-them', {
      filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
      filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
      filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
      filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
      filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
      filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
    });
</script>
<script type="text/javascript">
    document.title = "VLUTE | Quản lý khoa bộ môn";
    var finder = new CKFinder();
    // Thêm
    function BrowseServer_them() {
        //finder.basePath = 'http://localhost:8080/vlute3/';
        finder.selectActionFunction = SetFileField_them;
        finder.popup();
    }
    function SetFileField_them(fileUrl) {
        document.getElementById('id-hinhanh-edit').src = fileUrl;
        var host = "<?php echo $vlute['HOST']; ?>";
        host = host.substr(0,host.lastIndexOf("\/"));
        //alert(fileUrl.substr(host.length+1,fileUrl.length-host.length));
        document.getElementById('id-hinhanh-ct-them').value=fileUrl.substr(host.length+1,fileUrl.length-host.length);
    }
    function BrowseServer_sua() {
        //finder.basePath = 'http://localhost:8080/vlute3/';
        finder.selectActionFunction = SetFileField_sua;
        finder.popup();
    }
    function SetFileField_sua(fileUrl) {
        document.getElementById('id-hinhanh-sua').src = fileUrl;
        var host = "<?php echo $vlute['HOST']; ?>";
        host = host.substr(0,host.lastIndexOf("\/"));
        //alert(fileUrl.substr(host.length+1,fileUrl.length-host.length));
        document.getElementById('id-hinhanh-ct-sua').value=fileUrl.substr(host.length+1,fileUrl.length-host.length);
    }
</script>
<script type="text/javascript">
    document.title = "VLUTE | Quản lý khoa - bộ môn";
</script>
<script type="text/javascript">
	$(document).ready(function() {
    	$("#khoabomon").addClass("active");
      $("#themkhoabomon").click(function(){
        $("#vlute-modal-them-khoa-bo-mon").modal("show");
      });
      $("#them-khoa-bo-mon").click(function(){
        // ajax
        $.ajax({
          url : "ajax/ajax_them_khoa_bo_mon.php",
          type : "post",
          dataType:"text",
          data : {
            ten: $("#ten-khoa-bo-mon-them").val(),
            tenen: $("#ten-tieng-anh-them").val(),
            diachi: $("#dia-chi-them").val(),
            dienthoai: $("#dien-thoai-them").val(),
            mail: $("#mail-them").val(),
            ngaylap: $("#ngay-thanh-lap-them").val(),
            mota: $("#mo-ta-khac-them").val(),
            link: $("#link-lien-ket-them").val(),
            hinh: $("#id-hinhanh-ct-them").val()
          },
          success : function (data){
              alert(data);
              location.reload();
          }
        });
      });
      $(".suakhoabomon").click(function(){
        var id = $(this).attr('data-vlute');
        $("#ten-khoa-bo-mon-sua").val($("#id-ten-khoa-"+id).text().trim());
        $("#ten-tieng-anh-sua").val($("#id-ten-tieng-anh-"+id).text().trim());
        $("#dia-chi-sua").val($("#id-dia-chi-"+id).val().trim());
        $("#dien-thoai-sua").val($("#id-dien-thoai-"+id).text().trim());
        $("#mail-sua").val($("#id-mail-"+id).text().trim());
        $("#ngay-thanh-lap-sua").val($("#id-ngay-thanh-lap-"+id).val().trim());
        $("#mo-ta-khac-sua").val($("#id-mo-ta-khac-"+id).val().trim());
        $("#link-lien-ket-sua").val($("#id-link-"+id).val().trim());
        $("#vlute-modal-sua-khoa-bo-mon").modal("show");
      });
	});
</script>
<script type="text/javascript" charset="utf-8">
      $(document).ready(function() {
        $('#vlute').DataTable();
      } );
</script>