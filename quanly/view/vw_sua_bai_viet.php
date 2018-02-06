<script src="js/jquery.tagsinput.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.tagsinput.min.css">
<script src="ckeditor/ckeditor.js"></script>
<script src="ckfinder/ckfinder.js"></script>
<script src="js/lslug-tien-bai-viet.js"></script>
<script type="text/javascript">
  $(function(){
    $('#tukhoa').tagsInput();
  });
</script>
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <div class="cach"></div>
        <div class="cach"></div>
      </h1>
    </section>
    <div class="container" style="width: 100%;">
      <div class="row">
        <div class="col-md-12">
    <!-- Main content -->
            <div class="col-md-12 khung-chua-bai">
              <div class="col-md-12">
                <!-- Cột trái -->
                <div class="box">
                  <div class="box-header with-border">
                    <h3 class="box-title">Điền thông tin bài viết</h3>
                    <div class="box-tools pull-right">
                      <!-- Collapse Button -->
                      <button type="button" class="btn btn-box-tool" data-widget="collapse">
                        <i class="fa fa-minus"></i>
                      </button>
                    </div>
                    <!-- /.box-tools -->
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                      <div class="col-md-8 khung-tin-trai">
                        <div id="f-tenbaiviet" class="form-group">
                          <label>Tên bài viết</label>
                          <input type="text" class="form-control" id="tenbaiviet" placeholder="Tên bài viết" required autocomplete="on" value="<?php echo $tenbv; ?>">
                        </div>
                        <div class="form-group">
                          <label>Chọn chuyên mục</label>
                          <select class="form-control" id="chuyenmuc">
                            <?php vlu_load_chuyen_muc_khong_chua_chuyen_muc_bai_viet($idbv); ?>
                            <?php vlu_load_chuyen_muc_tu_bai_viet($idbv) ?>
                          </select>
                        </div>
                        <div id="f-tomtat" class="form-group">
                          <label>Tóm tắt</label>
                          <textarea type="text" class="form-control" id="tomtat" placeholder="Tóm tắt" required autocomplete="on" rows="8"><?php echo $mota; ?></textarea>
                        </div>
                        <div id="f-noidung" class="form-group">
                          <label>Nội dung</label>
                          <textarea class="form-control" name="noidung" id="noidung" ><?php echo $noidung; ?></textarea>
                        </div>
                      </div>
                      <div class="col-md-4 khung-tin-phai">
                        <div class="form-group">
                          <label>Hình ảnh bài viết</label>
                          <div class="chua-hinh-anh">
                            <img src="../<?php echo $thumb; ?>" id="id-hinhanh" class="col-md-12" />
                            <input type="text" hidden="hidden" id="id-hinhanh-ct" value="images/mac-dinh.png">
                            <input type="button" class="btn btn-info col-md-12 form-control" onclick="BrowseServer()" value="Chọn ảnh từ máy chủ ...">
                          </div>
                          <div class="col-md-12 cach"></div>
                        </div>
                        <div id="f-tieudeseo" class="form-group">
                          <label>Tên bài viết (SEO)</label>
                          <input type="text" class="form-control" id="tieudeseo" placeholder="Tên bài viết SEO" value="<?php echo $tieude; ?>">
                          <p class="help-block">Tiêu đề SEO của bài viết.</p>
                        </div>
                        <div id="id-tukhoa" class="form-group">
                          <label>Từ khóa</label>
                          <input name="tags" id="tukhoa" value="" />
                          <p class="help-block">Các từ khóa cách nhau bằng dấu phẩy.</p>
                        </div>
                        <div class="form-group">
                          <label>Lượt xem</label>
                          <input type="text" class="form-control" id="" placeholder="Lượt xem" value="<?php echo $luotxem; ?>" readonly>
                        </div>
                        <div class="form-group">
                          <input type="checkbox" <?php if($hienthi=='1'){echo "checked=\"checked\"";} ?> class="iCheck-helper" name="anhien" id="hienthi">&nbsp;&nbsp;<b>Ẩn/Hiện bài viết</b>
                          <p class="help-block">Nếu được kích hoạt bài viết sẽ được phép hiển thị trên trang web</p>
                        </div>
                        <div class="form-group">
                          <input type="checkbox" <?php if($tinnoibac=='1'){echo "checked=\"checked\"";} ?> class="iCheck-helper" id="noibat">&nbsp;&nbsp;<b>Bật/Tắt bài viết nổi bật</b>
                          <p class="help-block">Nếu được kích hoạt bài viết sẽ hiển thị nổi bật trên trang web</p>
                        </div>
                      <div class="pull-right">
                        <div class="cach"></div>
                          <button class="btn btn-success" id="nut-luu-bai">Cập nhật</button>
                          <a href="?p=baiviet" class="btn btn-danger">Hủy</a>
                        <div class="cach"></div>
                      </div>
                      </div>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>
            </div>
          </div>
      </div>
    </div>

<script>
    CKEDITOR.replace( 'noidung', {
      filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
      filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
      filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
      filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
      filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
      filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
    });

</script>
<script type="text/javascript">
    document.title = "VLUTE - Thêm bài viết";
    var finder = new CKFinder();
</script>
<script type="text/javascript">
  function xetrong(id){
    $("#f-"+id).removeClass('has-error');
      if ($("#"+id).val().trim()=='') {
            $("#f-"+id).addClass("has-error");
            return false;
      }
      else{
          $("#f-"+id).addClass("has-success");
          return true;
      }
  }
  function xetrongCKEDIT(id){
    $("#f-"+id).removeClass('has-error');
      if (CKEDITOR.instances[id].getData()=='') {
            $("#f-"+id).addClass("has-error");
            return false;
      }
      else{
          $("#f-"+id).addClass("has-success");
          return true;
      }
  }
  $(document).ready(function() {
    $("#nut-luu-bai").click(function(){
      xetrong('tenbaiviet');
      xetrong('tomtat');
      xetrongCKEDIT('noidung');
      xetrong('tieudeseo');
      var ht=0,nb=0;
      if (document.getElementById('hienthi').checked) ht=1;
      if (document.getElementById('noibat').checked) nb=1;
      if (xetrong('tenbaiviet')&&xetrong('tomtat')&&xetrongCKEDIT('noidung')&&xetrong('tieudeseo')) {
        $.ajax({
          url : "ajax/ajax_sua_bai_viet.php",
          type : "post",
          dataType:"text",
          data : {
            tenbv: $("#tenbaiviet").val().trim(),
            idcm: $("#chuyenmuc").val(),
            noidung: CKEDITOR.instances['noidung'].getData(),
            thumb: $("#id-hinhanh-ct").val().trim(),
            hienthi: ht,
            noibat: nb,
            tieude: $("#tieudeseo").val().trim(),
            tukhoa: $("#tukhoa").val().trim(),
            mota: $("#tomtat").val().trim(),
            idbv: <?php echo $idbv; ?>,
            iduser: <?php echo $id_user; ?>
          },
          success : function (data){
              $("body").append(data);
          }
        });
      }
    });
  });
</script>
<script type="text/javascript">
    function BrowseServer() {

        //finder.basePath = 'http://localhost:8080/vlute3/';
        finder.selectActionFunction = SetFileField;
        finder.popup();
    }
    function SetFileField(fileUrl) {
        document.getElementById('id-hinhanh').src = fileUrl;
        var host = "<?php echo $vlute['HOST']; ?>";
        host = host.substr(0,host.lastIndexOf("\/"));
        //alert(fileUrl.substr(host.length+1,fileUrl.length-host.length));
        document.getElementById('id-hinhanh-ct').value=fileUrl.substr(host.length+1,fileUrl.length-host.length);
    }
</script>
<script type="text/javascript">
	$(document).ready(function() {
    $("#id-tieu-de-chinh").html("Chỉnh sửa bài viết");
    	$("#baiviet").addClass("active");
	});

</script>

