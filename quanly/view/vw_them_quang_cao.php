<script src="ckfinder/ckfinder.js"></script>
<!-- Content Header (Page header) -->
    <section class="content-header col-md-8">
      <!-- Default box -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Mẹo!</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Gom gọn">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
            <img src="../images/banner-0.png" class="col-md-4">
            <div class="col-md-8">
              <p><span class="qc-1">1</span><span>Đại diện quảng cáo ở vị trí 1. Kích cỡ 615 x 90 (px).</span></p>
              <p><span class="qc-2">2</span><span>Đại diện quảng cáo ở vị trí 2. Kích cỡ 615 x 90 (px).</span></p>
              <p><span class="qc-3">3</span><span>Đại diện quảng cáo ở vị trí 3. Kích cỡ 615 x 615 (px).</span></p>
            </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </section>
    <section class="content-header col-md-4">
      <!-- Default box -->
      <div class="box box-warning">
        <div class="box-header with-border">
          <h3 class="box-title">Lưu ý!</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Gom gọn">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="alert alert-warning alert-dismissible">
          Lưu ý: kiểm tra kỹ thông tin liên lạc với khách hàng trước khi tạo quảng cáo. Để tiện cho quá trình liên lạc với khách hàng.
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </section>
    <div class="container" style="width: 100%;">
      <div class="row">
        <div class="col-md-12">
    <!-- Main content -->
              <!-- Cột trái -->
                <div class="box">
                  <div class="box-header with-border">
                    <h3 class="box-title">Điền thông tin quảng cáo</h3>
                    <div class="box-tools pull-right">
                      <!-- Collapse Button -->
                      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Gom gọn">
                        <i class="fa fa-minus"></i>
                      </button>
                    </div>
                    <!-- /.box-tools -->
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <div class="col-md-8 khung-tin-trai">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Tên quảng cáo(*)</label>
                          <input type="text" class="form-control" name="tenuser" id="tnd" placeholder="Tên nhân viên" required autocomplete="on">
                        </div>
                        <div class="form-group">
                          <label>Người đặt quảng cáo(*)</label>
                          <input type="text" class="form-control" name="tendn" id="tdn" placeholder="Tên đăng nhập" required autocomplete="on">
                        </div>
                        <div class="form-group">
                          <label>Địa chỉ mail của khác hàng (*)</label>
                          <input type="text" class="form-control" name="email" id="" placeholder="Email" autocomplete="on">
                      </div>
                        <div class="form-group">
                          <label>Số điện thoại người đặt(*)</label>
                          <input type="text" class="form-control" name="tendn" id="tdn" placeholder="Số điện thoại người đặt" required autocomplete="on">
                        </div>
                        <div class="form-group">
                          <label>Giá</label>
                          <input type="text" class="form-control" name="tendn" id="tdn" placeholder="Tên đăng nhập" required autocomplete="on">
                        </div>
                        <div class="form-group">
                          <label>Link chuyển tiếp của quảng cáo</label>
                          <input type="text" class="form-control" name="tendn" id="tdn" placeholder="Tên đăng nhập" required autocomplete="on">
                        </div>
                        <div class="form-group">
                          <label>Vị trí đặt quảng cáo</label>
                          <select class="form-control">
                            <option value="">Vị trí 1</option>
                            <option value="">Vị trí 2</option>
                            <option value="">Vị trí 3</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 khung-tin-phai">
                        <div class="col-md-12">
                          <img id="id-hinhanh" src="../images/mac-dinh.png" style="width: 100%;height: auto;">
                          <input type="text" hidden="hidden" value="" id="id-hinhanh-ct" name="anhdaidien">
                          <div class="cach"></div>
                        </div>
                        <div class="col-md-12">
                          <input type="button" class="btn btn-info col-md-12 col-ms-12" onclick="BrowseServer()" value="Chọn ảnh quảng cáo">
                          <p class="help-block">Nên chọn hình ảnh có tỉ lệ phù hợp với vị trí cần đặt quảng cáo!</p>
                        </div>
                        <div class="form-group">
                          <label>Ngày tạo quảng cáo</label>
                          <input type="date" class="form-control" id="ngaythamgiaa" required >
                        </div>
                        <div class="form-group">
                          <label>Ngày tạo bắt đầu chạy quảng cáo</label>
                          <input type="date" class="form-control" name="ngaysinh" id="ns" required >
                        </div>
                        <div class="form-group">
                          <label>Ngày kết thúc chạy quảng cáo</label>
                          <input type="date" class="form-control" name="ngaysinh" id="ns" required >
                        </div>
                    </div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    (*) Không được bỏ trống
                    <div class="pull-right">
                          <button class="btn btn-success nut-thao-tac">Lưu quảng cáo</button>
                          <button type="reset" class="btn btn-warning nut-thao-tac">Nhập lại</button>
                          <a href="?p=thanhvien" class="btn btn-danger nut-thao-tac">Hủy</a>
                    </div>
                  </div>
                  <!-- box-footer -->
                </div>
                <!-- /.box -->
          </div>
      </div>
    </div>

<script type="text/javascript">
    document.title = "CNV | Thêm quảng cáo";
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
      document.getElementById('ngaythamgiaa').valueAsDate = new Date();
      document.getElementById("ngaythamgiaa").readOnly = true;
    	$("#quangcao").addClass("active");
      $("#themquangcao").addClass("active");
      $("#id-tieu-de-chinh").html("Thêm nhân viên");
	});
</script>
