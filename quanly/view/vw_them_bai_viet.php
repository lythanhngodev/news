
<script src="ckeditor/ckeditor.js"></script>
<script src="ckfinder/ckfinder.js"></script>
<script src="js/lslug-tien-bai-viet.js"></script>
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <div class="cach"></div>
      </h1>
    </section>

    <div class="container" style="width: 100%;">
      <div class="row">
    <!-- Main content -->
            <div class="col-md-12 khung-chua-bai">
              <!-- Cột trái -->
              <div class="col-md-12">
                <div class="box box-info">
                  <div class="box-header with-border">
                    <h3 class="box-title">Điền thông tin bài viết mới</h3>
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
                          <input type="text" class="form-control" name="tenbaiviet" id="tenbaiviet" placeholder="Tên bài viết" onkeyup="lamlink('tenbaiviet','linkbaiviet')" onchange="lamlink('tenbaiviet','linkbaiviet')">
                        </div>
                        <div class="form-group">
                          <label>Chọn chuyên mục</label>
                          <select class="form-control" id="chuyenmuc">
                            <?php vlu_load_chuyen_muc(); ?>
                          </select>
                        </div>
                        <div id="f-tomtat" class="form-group">
                          <label>Tóm tắt</label>
                          <textarea type="text" class="form-control" id="tomtat" placeholder="Tóm tắt" rows="9"></textarea>
                        </div>
                        <div id="f-noidung" class="form-group">
                          <label>Nội dung</label>
                          <textarea class="form-control" id="noidung" ></textarea>
                        </div>
                      </div>
                      <div class="col-md-4 khung-tin-phai">
                        <div class="form-group">
                          <label>Hình ảnh bài viết</label>
                          <div class="chua-hinh-anh">
                            <img src="../images/mac-dinh.png" id="id-hinhanh" class="col-md-12" />
                            <input type="text" hidden="hidden" id="id-hinhanh-ct" value="images/mac-dinh.png">
                            <input type="button" class="btn btn-info col-md-12 form-control" onclick="BrowseServer()" value="Chọn ảnh từ máy chủ ...">
                          </div>
                          <div class="col-md-12 cach"></div>
                        </div>
                        
                        <div id="f-tieudeseo" class="form-group">
                          <label>Tên bài viết (SEO)</label>
                          <input type="text" class="form-control" id="tieudeseo" placeholder="Tên bài viết SEO" value="">
                          <p class="help-block">Tiêu đề SEO của bài viết.</p>
                        </div>
                        <div id="f-tukhoa" class="form-group">
                          <label>Từ khóa</label>
                          <input name="tags" id="tukhoa" value="" />
                          <p class="help-block">Các từ khóa cách nhau bằng dấu phẩy.</p>
                        </div>
                        <div id="f-linkbaiviet" class="form-group">
                          <label>Link bài viết</label>
                          <input type="text" class="form-control" id="linkbaiviet" placeholder="Link bài viết" required autocomplete="on">
                        </div>
                        <div class="form-group">
                          <label>Ngày đăng</label>
                          <input type="date" class="form-control" id="ngaydang" readonly>
                        </div>
                        <div class="form-group">
                          <input type="checkbox" checked="checked" class="" id="hienthi">&nbsp;&nbsp;<b>Ẩn/Hiện bài viết</b>
                          <p class="help-block">Nếu được kích hoạt bài viết sẽ được phép hiển thị trên trang web</p>
                        </div>
                        <div class="form-group">
                          <input type="checkbox" class="iCheck-helper" id="noibat">&nbsp;&nbsp;<b>Bật/Tắt bài viết nổi bật</b>
                          <p class="help-block">Nếu được kích hoạt bài viết sẽ hiển thị nổi bật trên trang web</p>
                        </div>
                      </div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <div class="pull-right">
                      <button class="btn btn-success nut-thao-tac" id="nut-luu-bai"><i class="fa fa-save"></i>&nbsp;&nbsp;Lưu bài viết</button>
                      <a href="?p=baiviet" class="btn btn-danger nut-thao-tac"><i class="fa fa-close"></i>&nbsp;&nbsp;Hủy</a>
                    </div>
                  </div>
                  </div>
                <!-- /.box -->
              </div>
            </div>
        </div>
      </div>
<script src="js/jquery.tagsinput.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.tagsinput.min.css">
<script type="text/javascript">
  $(function(){
    $('#tukhoa').tagsInput({width:'auto'});
  });
</script>
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
    document.title = "CNV - Thêm bài viết";
    var finder = new CKFinder();
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
      xetrong('linkbaiviet');
      var ht=0,nb=0;
      if (document.getElementById('hienthi').checked) ht=1;
      if (document.getElementById('noibat').checked) nb=1;
      if (xetrong('tenbaiviet')&&xetrong('tomtat')&&xetrongCKEDIT('noidung')&&xetrong('tieudeseo')&&xetrong('linkbaiviet')) {
        $.ajax({
          url : "ajax/ajax_them_bai_viet.php",
          type : "post",
          dataType:"text",
          data : {
            tenbv: $("#tenbaiviet").val().trim(),
            idcm: $("#chuyenmuc").val().trim(),
            noidung: CKEDITOR.instances['noidung'].getData(),
            thumb: $("#id-hinhanh-ct").val().trim(),
            hienthi: ht,
            noibat: nb,
            linkbv: $("#linkbaiviet").val().trim(),
            tieude: $("#tieudeseo").val().trim(),
            tukhoa: $("#tukhoa").val().trim(),
            ngaydang: $("#ngaydang").val(),
            mota: $("#tomtat").val().trim(),
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
	$(document).ready(function() {
    document.getElementById('ngaydang').valueAsDate = new Date();
    	$("#baiviet").addClass("active");
      $("#thembaiviet").addClass("active");
      $("#id-tieu-de-chinh").html("Thêm bài viết");
	});
</script>
