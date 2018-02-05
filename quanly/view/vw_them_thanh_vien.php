<script src="ckfinder/ckfinder.js"></script>
<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="alert alert-info alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-info-circle"></i> Chú ý!</h4>
          Vui lòng check mail sau khi tạo tài khoản để có được mật khẩu đăng nhập.
      </div>
      <h1>
        <div class="cach"></div>
      </h1>
    </section>
    <div class="container" style="width: 100%;">
      <div class="row">
        <div class="col-md-12">
    <!-- Main content -->
            <div class="col-md-12 khung-chua-bai">
              <!-- Cột trái -->
              <div class="col-md-8">
                <div class="box">
                  <div class="box-header with-border">
                    <h3 class="box-title"></h3>
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
                    <div class="col-md-12 khung-tin-trai">
                      <div class="col-md-4 hinh-anh-user">
                        <div class="col-md-12">
                          <img id="id-hinhanh" src="../images/mac-dinh.png" style="width: 100%;height: auto;">
                          <input type="text" hidden="hidden" value="" id="id-hinhanh-ct" name="anhdaidien">
                          <div class="cach"></div>
                        </div>
                        <div class="col-md-12">
                          <input type="button" class="btn btn-info col-md-12 col-ms-12" onclick="BrowseServer()" value="Chọn ảnh đại diện">
                          <p class="help-block">Nên chọn hình ảnh có tỉ lệ 1:1 để có ảnh đại diện đẹp nhất!</p>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <div class="form-group">
                          <label>Tên nhân viên(*)</label>
                          <input type="text" class="form-control" name="tenuser" id="tnd" placeholder="Tên nhân viên" required autocomplete="on">
                        </div>
                        <div class="form-group">
                          <label>Tên đăng nhập(*)</label>
                          <input type="text" class="form-control" name="tendn" id="tdn" placeholder="Tên đăng nhập" required autocomplete="on">
                        </div>
                        <div class="form-group">
                          <label>Ngày sinh</label>
                          <input type="date" class="form-control" name="ngaysinh" id="ns" required >
                        </div>
                        <div class="form-group">
                          <label>Giới tính</label>
                          <select name="gioitinh" class="form-control">
                            <option value="1">Nam</option>
                            <option value="0">Nữ</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Ngày tham gia</label>
                          <input type="date" class="form-control" name="ngaythamgia" id="ngaythamgiaa">
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    (*) Không được bỏ trống
                  </div>
                  <!-- box-footer -->
                </div>
                <!-- /.box -->
              </div> 
              <!-- Cột phải -->
              <div class="col-md-4">
                <div class="box">
                  <div class="box-header with-border">
                    <h3 class="box-title"></h3>
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
                     <div class="col-md-12 khung-tin-phai">
                    <div class="form-group">
                      <label>Đường dẫn Facebook cá nhân</label>
                      <input type="text" class="form-control" name="facebook" id="" placeholder="Facebook" autocomplete="on">
                    </div>
                    <div class="form-group">
                      <label>Địa chỉ mail (*)</label>
                      <input type="text" class="form-control" name="email" id="" placeholder="Email" autocomplete="on">
                    </div>
                    <div class="form-group">
                      <label>Số điện thoại</label>
                      <input type="text" class="form-control" name="sdt" id="" placeholder="Số điện thoại" autocomplete="on">
                    </div>
                    <div class="form-group">
                      <label>Quyền hạn</label><br>
                      <select name="quyen" class="form-control">
                        <option value="0">Người quản trị</option>
                        <option value="1">Người đăng bài</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="cach"></div>
                      <button class="btn btn-success">Thêm thành viên</button>
                      <button type="reset" class="btn btn-warning">Nhập lại</button>
                      <a href="?p=thanhvien" class="btn btn-danger">Hủy</a>
                    <div class="cach"></div>
                  </div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    (*) Không được bỏ trống
                  </div>
                  <!-- box-footer -->
                </div>
                <!-- /.box -->
              </div>
            </div>
          </div>
      </div>
    </div>

<script type="text/javascript">
    document.title = "VLUTE | Thêm thành viên";
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
    	$("#nhanvien").addClass("active");
      $("#id-tieu-de-chinh").html("Thêm nhân viên");
	});
</script>
