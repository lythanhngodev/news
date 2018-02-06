<link rel="stylesheet" href="css/datatables.min.css">
<script src="js/datatables.min.js" type="text/javascript"></script>
<script src="js/lslug-tien-bai-viet.js"></script>
<!-- Content Header (Page header) -->
    <section class="content-header background-container">
    </section>
    <!-- Main content -->
    <section class="content background-container">
      <div class="windows-table">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Cài đặt thông tin website</h3>
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
            <div class="form-group col-md-6">
              <label>Tên trang web</label>
                <input type="text" class="form-control" id="" placeholder="Tên website">
                <span class="help-block">Tên chính thức trang web.</span>
            </div>
            <div class="form-group col-md-6">
              <label>Mô tả trang web</label>
                <input type="text" class="form-control" id="" placeholder="Mô tả website">
                <span class="help-block">Nội dung từ khóa chính (Thẻ meta Keyword) hiển thị.</span>
            </div>
            <div class="form-group col-md-6">
              <label>Từ khóa mô tả</label>
                <input type="text" class="form-control" id="" placeholder="Tên website">
                <span class="help-block">Nội dung thẻ meta Description hiển thị.</span>
            </div>
            <div class="form-group col-md-6">
              <label>Địa chỉ</label>
                <input type="text" class="form-control" id="" placeholder="Tên website">
                <span class="help-block">Địa chỉ của khách hàng.</span>
            </div>
            <div class="form-group col-md-6">
              <label>Hotline</label>
                <input type="text" class="form-control" id="" placeholder="Tên website">
                <span class="help-block">Hotline của khách hàng.</span>
            </div>
            <div class="form-group col-md-6">
              <label>Mail</label>
              <div class="input-group">
                <span class="input-group-addon">@</span>
                  <input type="text" class="form-control" placeholder="">
              </div>
              <span class="help-block">Địa chỉ mail của khách hàng.</span>
            </div>
            <div class="col-md-3 hinh-anh-user">
              <div class="col-md-12">
                <img id="id-hinhanh" src="../images/mac-dinh.png" style="width: 100%;height: auto;">
                <input type="text" hidden="hidden" value="" id="id-hinhanh-ct" name="anhdaidien">
                <div class="cach"></div>
              </div>
              <div class="col-md-12">
                <input type="button" class="btn btn-info col-md-12 col-ms-12" onclick="BrowseServer()" value="Chọn ảnh logo website">
                <p class="help-block">Hình logo website (ảnh PNG, GIF, JPEG, JPG)</p>
              </div>
            </div>
            <div class="col-md-3 hinh-anh-user">
              <div class="col-md-12">
                <img id="id-hinhanh" src="../images/mac-dinh.png" style="width: 100%;height: auto;">
                <input type="text" hidden="hidden" value="" id="id-hinhanh-ct" name="anhdaidien">
                <div class="cach"></div>
              </div>
              <div class="col-md-12">
                <input type="button" class="btn btn-info col-md-12 col-ms-12" onclick="BrowseServer()" value="Chọn ảnh favicon website">
                <p class="help-block">Hình favicon hiển thị ở phía trên tab của trình duyệt (ảnh PNG, ICO, JPEG, JPG)</p>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button class="btn btn-success pull-right nut-thao-tac">Lưu thông tin</button>
          </div>
          <!-- box-footer -->
        </div>
        <!-- /.box -->
      </div>
    </section>
<!-- Modal: Thêm nhân viên -->
<div class="modal fade" id="modal-them-chuyen-muc">
  <div class="modal-dialog">
    <div class="modal-content" style="box-shadow: none;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Thêm chuyên mục</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Tên chuyên mục</label>
          <input type="text" class="form-control" name="" id="ten-chuyen-muc-them" placeholder="tên chuyên mục" required autocomplete="on" onkeyup="lamlink('ten-chuyen-muc-them','link-chuyen-muc-them')" onchange="lamlink('ten-chuyen-muc-them','link-chuyen-muc-them')">
        </div>
        <div class="form-group">
          <label>Link chuyên mục</label>
          <input type="text" class="form-control" name="" id="link-chuyen-muc-them" placeholder="link chuyên mục" required autocomplete="on" readonly>
        </div>
        <div class="form-group">
          <label>Mô tả</label>
          <input type="text" class="form-control" name="" id="ten-chuyen-muc-them" placeholder="mô tả" required autocomplete="on">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        <button type="button" class="btn btn-primary" id="nut-them-chuyen-muc">Lưu</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div> <!-- Modal: Thêm chuyên mục -->

<!-- Modal: Sửa nhân viên -->
<div class="modal fade" id="modal-sua-chuyen-muc">
  <div class="modal-dialog">
    <div class="modal-content" style="box-shadow: none;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Sửa chuyên mục</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Tên chuyên mục</label>
          <input type="text" class="form-control" name="" id="ten-chuyen-muc-sua" placeholder="tên chuyên mục" required autocomplete="on" onkeyup="lamlink('ten-chuyen-muc-them','link-chuyen-muc-them')" onchange="lamlink('ten-chuyen-muc-them','link-chuyen-muc-them')">
        </div>
        <div class="form-group">
          <label>Link chuyên mục</label>
          <input type="text" class="form-control" name="" id="link-chuyen-muc-sua" placeholder="link chuyên mục" required autocomplete="on" readonly>
        </div>
        <div class="form-group">
          <label>Mô tả</label>
          <textarea class="form-control" name="" id="mo-ta-chuyen-muc-sua" placeholder="mô tả" required autocomplete="on"></textarea>
        </div>
        <div class="form-group" style="margin-bottom: 4rem;">
          <input type="checkbox"  class="nut-check" id="an-hien-chuyen-muc-sua" name="" style="width: 20px;height: 20px;float: left;"><span style="float: left;padding: 4px 10px;">Ẩn/Hiện chuyên mục</span>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        <button type="button" class="btn btn-primary" id="nut-sua-chuyen-muc">Lưu thay đổi</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div><!-- Modal: Xửa chuyên mục -->
<div class="modal modal-danger fade" id="modal-xoa-chuyen-muc">
  <div class="modal-dialog modal-sm">
    <div class="modal-content" style="box-shadow: none;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Xóa chuyên mục</h4>
      </div>
      <div class="modal-body">
        <p>Bạn có chắc xóa chuyên mục này không?<br>Các bài viết thuộc chuyên mục này cũng sẽ bị xóa!</p>
        <input type="text" value="" hidden="hidden" id="id-id-xoa-chuyen-muc" name="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline" data-dismiss="modal">Đóng</button>
        <button type="button" class="btn btn-outline" style="border: 1px solid;" id="nut-xoa-chuyen-muc">Tôi chắc chắn</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script type="text/javascript">
    document.title = "CNV | Thông tin website";
</script>
<script type="text/javascript">
	$(document).ready(function() {
    	$("#thongtinweb").addClass("active");
      $("#id-tieu-de-chinh").html("Thông tin website");
	});
</script>