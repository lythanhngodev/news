
<script src="ckeditor/ckeditor.js"></script>
<script src="ckfinder/ckfinder.js"></script>
<script src="js/lslug-tien-bai-viet.js"></script>
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
              <!-- Cột trái -->
              <div class="col-md-12">
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
                        <div class="form-group">
                          <label>Tên bài viết</label>
                          <input type="text" class="form-control" name="tenbaiviet" id="tbv" placeholder="Tên bài viết" onkeyup="lamlink('tbv','lbv')" onchange="lamlink('tbv','lbv')" required autocomplete="on">
                        </div>
                        <div class="form-group">
                          <label>Chọn chuyên mục</label>
                          <select class="form-control" name="chuyenmuc">
                            <?php vlu_load_chuyen_muc(); ?>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Tóm tắt</label>
                          <textarea type="text" class="form-control" name="tomtat" id="" placeholder="Tóm tắt" rows="9"></textarea>
                        </div>
                        <div class="form-group">
                          <label>Nội dung</label>
                          <textarea class="form-control" name="noidung" id="noidungbaiviet" ></textarea>
                        </div>
                      </div>
                      <div class="col-md-4 khung-tin-phai">
                        <div class="form-group">
                          <label>Chọn hình ảnh</label>
                          <input type="button" class="btn btn-info" onclick="BrowseServer()" value="Chọn từ ...">
                        </div>
                        <div class="form-group chua-hinh-anh">
                          <img src="../images/mac-dinh.png" id="id-hinhanh" />
                          <input type="text" hidden="hidden" name="hinhanh" id="id-hinhanh-ct" value="images/mac-dinh.png">
                        </div>
                        <div class="form-group">
                          <label>Tên bài viết (SEO)</label>
                          <input type="text" class="form-control" name="tukhoaseo" id="" placeholder="Tên bài viết SEO" value="">
                          <p class="help-block">Tiêu đề SEO của bài viết.</p>
                        </div>
                        <div class="form-group">
                          <label>Từ khóa</label>
                          <input name="tags" id="tags_1" value="" />
                          <p class="help-block">Các từ khóa cách nhau bằng dấu phẩy.</p>
                        </div>
                        <div class="form-group">
                          <label>Link bài viết</label>
                          <input type="text" class="form-control" name="linkbaiviet" id="lbv" placeholder="Link bài viết" required autocomplete="on">
                        </div>
                        <div class="form-group">
                          <label>Ngày đăng</label>
                          <input type="date" class="form-control" name="ngaydang" id="ngaydangtin">
                        </div>
                        <div class="form-group">
                          <input type="checkbox" checked="checked" class="" name="anhien" id="">&nbsp;&nbsp;<b>Ẩn/Hiện bài viết</b>
                          <p class="help-block">Nếu được kích hoạt bài viết sẽ được phép hiển thị trên trang web</p>
                        </div>
                        <div class="form-group">
                          <input type="checkbox" class="iCheck-helper" name="noibat" id="">&nbsp;&nbsp;<b>Bật/Tắt bài viết nổi bật</b>
                          <p class="help-block">Nếu được kích hoạt bài viết sẽ hiển thị nổi bật trên trang web</p>
                        </div>
                    <div class="pull-right">
                      <button class="btn btn-success nut-thao-tac" name="luuBai">Lưu bài viết</button>
                      <a href="?p=baiviet" class="btn btn-danger nut-thao-tac">Hủy</a>
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
<script src="js/jquery.tagsinput.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.tagsinput.min.css">
<script type="text/javascript">
  $(function(){
    $('#tags_1').tagsInput({width:'auto'});
  });
</script>
<script>
    CKEDITOR.replace( 'noidungbaiviet', {
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
    function BrowseServer() {
        finder.selectActionFunction = SetFileField;
        finder.popup();
    }
    function SetFileField(fileUrl) {
        document.getElementById('id-hinhanh').src = fileUrl;
        document.getElementById('id-hinhanh-ct').value = fileUrl;
    }
</script>
<script type="text/javascript">
	$(document).ready(function() {
    document.getElementById('ngaydangtin').valueAsDate = new Date();
    	$("#baiviet").addClass("active");
      $("#id-tieu-de-chinh").html("Thêm bài viết");
	});
</script>
