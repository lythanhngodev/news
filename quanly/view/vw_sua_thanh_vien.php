<script src="ckfinder/ckfinder.js"></script>
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Chỉnh sửa thành viên
        <div class="line"></div>
        <div class="cach"></div>
      </h1>
    </section>
    <div class="container" style="width: 100%;">
      <div class="row">
        <div class="col-md-12">
    <!-- Main content -->
          <form action="" method="POST">
            <div class="col-md-12 khung-tin-bu khung-chua-bai">
              <!-- Cột trái -->
              <div class="col-md-8">
                <div class="col-md-4 hinh-anh-user">
                  <div class="col-md-12">
                    <img id="id-hinhanh" src="../<?php echo $row_tv['hinhanh'] ?>" style="width: 100%;height: auto;">
                    <input type="text" hidden="hidden" value="<?php echo $row_tv['hinhanh'] ?>" id="id-hinhanh-ct" name="anhdaidien">
                  </div>
                  <div class="col-md-12">
                    <input type="button" class="btn btn-info col-md-12 col-ms-12" onclick="BrowseServer()" value="Chọn ảnh đại diện">
                    <p class="help-block">Nên chọn hình ảnh có tỉ lệ 1:1 để có ảnh đại diện đẹp nhất!</p>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <label>Tên thành viên</label>
                    <input type="text" class="form-control" name="tenuser" id="tnd" placeholder="Tên thành viên" required autocomplete="on" value="<?php echo $row_tv['tenuser'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Tên đăng nhập</label>
                    <input type="text" class="form-control" name="tendn" id="tdn" placeholder="Tên đăng nhập" required autocomplete="on" value="<?php echo $row_tv['tendn'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Ngày sinh</label>
                    <input type="date" class="form-control" name="ngaysinh" id="ns" required value="<?php echo $row_tv['ngaysinh'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Giới tính</label>
                    <select name="gioitinh" class="form-control">
                      <option value="1" <?php if($row_tv['gioitinh']=='1') echo "selected=\"selected\"" ?>>Nam</option>
                      <option value="0" <?php if($row_tv['gioitinh']=='0') echo "selected=\"selected\"" ?>>Nữ</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Ngày tham gia</label>
                    <input type="date" class="form-control" name="ngaythamgia" id="ngaythamgiaa" value="<?php echo $row_tv['ngaythamgia'] ?>">
                  </div>
                </div>
              </div>
              <!-- Cột phải -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Đường dẫn Facebook cá nhân</label>
                  <input type="text" class="form-control" name="facebook" id="" placeholder="Facebook" autocomplete="on" value="<?php echo $row_tv['facebook'] ?>">
                </div>
                <div class="form-group">
                  <label>Địa chỉ mail</label>
                  <input type="text" class="form-control" name="email" id="" placeholder="Email" autocomplete="on" value="<?php echo $row_tv['email'] ?>">
                </div>
                <div class="form-group">
                  <label>Số điện thoại</label>
                  <input type="text" class="form-control" name="sdt" id="" placeholder="Số điện thoại" autocomplete="on" value="<?php echo $row_tv['sdt'] ?>">
                </div>
              </div>

              <div class="col-md-4">
                <div class="cach"></div>
                  <input type="submit" class="btn btn-success" value="Hoàn tất" name="luuTT">
                  <button type="reset" class="btn btn-warning">Nhập lại</button>
                  <a href="?p=thanhvien" class="btn btn-danger">Hủy</a>
                <div class="cach"></div>
              </div>
            </div>
          </form>
          <div class="row"><div class="col-md-12"><div class="cach"></div></div></div>
          <div class="col-md-8">
            <h3>
              Đổi mật khẩu
              <div class="line"></div>
              <div class="cach"></div>
            </h3>
          </div>
          <form action="" method="POST">
            <div class="col-md-8 khung-tin-mk">
              <div class="form-group">
                  <label>Mật khẩu cũ</label>
                  <input type="password" class="form-control" name="password_o" id="tnd" placeholder="Mật khẩu cũ" required autocomplete="off">
              </div>
              <div class="form-group">
                  <label>Mật khẩu mới</label>
                  <input type="password" class="form-control" name="password_n" id="tnd" placeholder="Mật khẩu mới" required autocomplete="off">
              </div>
              <div class="form-group">
                  <label>Xác nhận mật khẩu mới</label>
                  <input type="password" class="form-control" name="tenuser" id="tnd" placeholder="Xác nhận mật khẩu mới" required autocomplete="off">
              </div>
              <input type="submit" class="btn btn-success" value="Đổi mật khẩu" name="luuMK">
              <button type="reset" class="btn btn-warning">Nhập lại</button>
              <div class="cach"></div>
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
