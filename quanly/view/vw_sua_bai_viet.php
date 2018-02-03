<script src="ckeditor/ckeditor.js"></script>
<script src="ckfinder/ckfinder.js"></script>
<script src="js/lslug-tien-bai-viet.js"></script>
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Chỉnh sửa bài viết
        <div class="line"></div>
        <div class="cach"></div>
      </h1>
    </section>
    <div class="container" style="width: 100%;">
      <div class="row">
        <div class="col-md-12">
    <!-- Main content -->
          <form action="" method="POST">
            <div class="col-md-12 khung-chua-bai">
              <!-- Cột trái -->
              <div class="col-md-8 khung-tin-trai">
                <div class="form-group">
                  <label>Tên bài viết</label>
                  <input type="text" class="form-control" name="tenbaiviet" id="tbv" placeholder="Tên bài viết" onKeyPress="lamlink('tbv','lbv')" required autocomplete="on" value="<?php echo $tenbv; ?>">
                </div>
                <div class="form-group">
                  <label>Chọn chuyên mục</label>
                  <select class="form-control" name="chuyenmuc">
                    <?php vlu_load_chuyen_muc_khong_chua_chuyen_muc_bai_viet($idbv); ?>
                    <?php vlu_load_chuyen_muc_tu_bai_viet($idbv) ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Tóm tắt</label>
                  <textarea type="text" class="form-control" name="tomtat" id="" placeholder="Tóm tắt" required autocomplete="on"><?php echo $mota; ?></textarea>
                </div>
                <div class="form-group">
                  <label>Nội dung</label>
                  <textarea class="form-control" name="noidung" id="noidungbaiviet" ><?php echo $noidung; ?></textarea>
                </div>
              </div>
              <!-- Cột phải -->
              <div class="col-md-4 khung-tin-phai">
                <div class="form-group">
                  <label>Chọn hình ảnh</label>
                  <input type="button" class="btn btn-info" onclick="BrowseServer()" value="Chọn từ ...">
                </div>
                <div class="form-group chua-hinh-anh">
                  <img src="../<?php echo $thumb; ?>" id="id-hinhanh" />
                  <input type="text" hidden="hidden" name="hinhanh" id="id-hinhanh-ct" value="">
                </div>
                <div class="form-group">
                  <label>Tên bài viết (SEO)</label>
                  <input type="text" class="form-control" name="tukhoaseo" id="" placeholder="Tên bài viết SEO" value="<?php echo $tieude; ?>">
                  <p class="help-block">Tiêu đề SEO của bài viết.</p>
                </div>

                <div class="form-group">
                  <label>Từ khóa</label>
                  <input type="text" data-role="tagsinput" value="jQuery,Script,Net">
                  <p class="help-block">Các từ khóa cách nhau bằng dấu phẩy.</p>
                </div>
                <div class="form-group">
                  <label>Link bài viết</label>
                  <input type="text" class="form-control" name="linkbaiviet" id="lbv" placeholder="Link bài viết" required autocomplete="on" value="<?php echo $linkbv; ?>">
                </div>
                <div class="form-group hide">
                  <label>Ngày đăng</label>
                  <input type="date" class="form-control" name="ngaydang" id="ngaydangtin" value="<?php echo $ngaydang; ?>">
                </div>
                <div class="form-group hide">
                  <label>Lượt xem</label>
                  <input type="text" class="form-control" name="luotxem" id="" placeholder="Lượt xem" value="<?php echo $luotxem; ?>">
                </div>
                <div class="form-group">
                  <label>Ẩn/Hiện bài viết</label>
                  <br>
                  <input type="checkbox" <?php if($hienthi=='1'){echo "checked=\"checked\"";} ?> class="" name="anhien" id=""> Ẩn/Hiện bài viết
                  <p class="help-block">Nếu được kích hoạt bài viết sẽ được phép hiển thị trên trang web</p>
                </div>
                <div class="form-group">
                  <label>Bật/Tắt bài viết nổi bật</label>
                  <br>
                  <input type="checkbox" <?php if($tinnoibac=='1'){echo "checked=\"checked\"";} ?> class="" name="anhien" id=""> Bật/Tắt bài viết nổi bật
                  <p class="help-block">Nếu được kích hoạt bài viết sẽ hiển thị nổi bật trên trang web</p>
                </div>
              </div>

              <div class="col-md-4">
                <div class="cach"></div>
                  <input type="submit" class="btn btn-success" value="Lưu chỉnh sửa" name="luuBai">
                  <button type="reset" class="btn btn-warning">Nhập lại</button>
                  <a href="?p=baiviet" class="btn btn-danger">Hủy</a>
                <div class="cach"></div>
              </div>
            </div>
          </form>
          </div>
      </div>
    </div>

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
    document.getElementById('ngaydangtin').valueAsDate = new Date();
    	$("#baiviet").addClass("active");
	});
</script>

