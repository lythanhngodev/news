<script src="ckfinder/ckfinder.js"></script>
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Thêm nhân viên
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
                    <label>Tên thành viên</label>
                    <input type="text" class="form-control" name="tenuser" id="tnd" placeholder="Tên thành viên" required autocomplete="on">
                  </div>
                  <div class="form-group">
                    <label>Tên đăng nhập</label>
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
              <!-- Cột phải -->
              <div class="col-md-4 khung-tin-phai">
                <div class="form-group">
                  <label>Đường dẫn Facebook cá nhân</label>
                  <input type="text" class="form-control" name="facebook" id="" placeholder="Facebook" autocomplete="on">
                </div>
                <div class="form-group">
                  <label>Địa chỉ mail</label>
                  <input type="text" class="form-control" name="email" id="" placeholder="Email" autocomplete="on">
                </div>
                <div class="form-group">
                  <label>Số điện thoại</label>
                  <input type="text" class="form-control" name="sdt" id="" placeholder="Số điện thoại" autocomplete="on">
                </div>
                <div class="form-group">
                  <label>Lựa chọn quyền hạn</label><br>
                  <select name="quyen" class="form-control">
                    <option value="0">Đóng băng</option>
                    <option value="1">Toàn quyền</option>
                    <option value="2">Đăng tin, chỉnh sửa</option>
                  </select>
                  <p class="help-block">- Đóng băng: Tài khoản sẽ được tạo nhưng không dược phép đăng nhập.</p>
                  <p class="help-block">- Toàn quyên: Tài khoản có quyền quản lý toàn bộ hệ thống.</p>
                  <p class="help-block">- Đóng tin: Chỉ cho phép thành viên đăng tin, sửa tin.</p>
                </div>
              </div>

              <div class="col-md-4">
                <div class="cach"></div>
                  <input type="submit" class="btn btn-success" value="Tạo thành viên" name="luuTV">
                  <button type="reset" class="btn btn-warning">Nhập lại</button>
                  <a href="?p=thanhvien" class="btn btn-danger">Hủy</a>
                <div class="cach"></div>
              </div>
            </div>
          </form>
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
    	$("#thanhvien").addClass("active");
	});
</script>
