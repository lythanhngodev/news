<script src="ckfinder/ckfinder.js"></script>
<!-- Content Header (Page header) -->
    
    <section class="content-header">
        <div class="cach"></div>
    </section>
    <div class="container" style="width: 100%;">
      <div class="row">
        <div class="col-md-12">
    <!-- Main content -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Thông tin cá nhân</h3>
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
        <div class="col-md-12 khung-tin-bu khung-chua-bai">
          <!-- Cột trái -->
          <div class="col-md-8">
            <div class="col-md-4 hinh-anh-user">
              <div class="col-md-12">
                <img id="id-hinhanh" src="../<?php echo $row_tv['thumbus'] ?>" style="width: 100%;height: auto;">
                <input type="text" hidden="hidden" value="<?php echo $row_tv['thumbus'] ?>" id="id-hinhanh-ct" name="anhdaidien">
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
                <input type="text" class="form-control" id="tennd" placeholder="Tên thành viên" required autocomplete="on" value="<?php echo $row_tv['tennd'] ?>">
              </div>
              <div class="form-group">
                <label>Tên đăng nhập</label>
                <input type="text" class="form-control" id="tendn" placeholder="Tên đăng nhập" required autocomplete="on" value="<?php echo $row_tv['tendn'] ?>">
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
                <label>Địa chỉ</label>
                <textarea class="form-control" rows="5"><?php echo $row_tv['diachi'] ?></textarea>
              </div>
            </div>
          </div>
          <!-- Cột phải -->
          <div class="col-md-4">
            <div class="form-group">
              <label>Slogan</label>
              <textarea class="form-control" rows="5"><?php echo $row_tv['slogan'] ?></textarea>
            </div>
            <div class="form-group">
              <label>Đường dẫn Facebook cá nhân</label>
              <input type="text" class="form-control" id="facebook" placeholder="Facebook" autocomplete="on" value="<?php echo $row_tv['facebook'] ?>">
            </div>
            <div class="form-group">
              <label>Địa chỉ mail</label>
              <input type="text" class="form-control" id="gmail" placeholder="Email" autocomplete="on" value="<?php echo $row_tv['gmail'] ?>">
            </div>
            <div class="form-group">
              <label>Số điện thoại</label>
              <input type="text" class="form-control" id="sdt" placeholder="Số điện thoại" autocomplete="on" value="<?php echo $row_tv['sdt'] ?>">
            </div>
          </div>
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
          <div class="col-md-4 pull-right">
              <div class="pull-right">
                <button class="btn btn-success nut-thao-tac">Lưu thay đổi</button>
                <button type="reset" class="btn btn-warning nut-thao-tac">Nhập lại</button>
              </div>
          </div>
      </div>
    </div>
    <!-- /.box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Đổi mật khẩu</h3>
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
        <div class="col-md-12 khung-tin-mk">
          <div class="form-group col-md-4">
              <label>Mật khẩu cũ</label>
              <input type="password" class="form-control" name="password_o" id="pa1" placeholder="Mật khẩu cũ" required autocomplete="off">
          </div>
          <div class="form-group col-md-4">
              <label>Mật khẩu mới</label>
              <input type="password" class="form-control" name="password_n" id="pa2" placeholder="Mật khẩu mới" required>
          </div>
          <div class="form-group col-md-4">
              <label>Xác nhận mật khẩu mới</label>
              <input type="password" class="form-control" name="tenuser" id="pa3" placeholder="Xác nhận mật khẩu mới" required>
          </div>
          <div class="cach"></div>
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
          <div class="col-md-4 pull-right">
              <div class="pull-right">
                <button class="btn btn-success nut-thao-tac">Lưu thay đổi</button>
                <button type="reset" class="btn btn-warning nut-thao-tac">Nhập lại</button>
              </div>
          </div>
      </div>
    </div>
    <!-- /.box -->
          </div>
      </div>
    </div>
<script type="text/javascript">
    document.title = "VLUTE | Profile";
    var finder = new CKFinder();
    $("#thongtin").addClass("active");

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
      $("#thanhvien").addClass("active");
      $("#id-tieu-de-chinh").html("Thông tin cá nhân");
  });
</script>
