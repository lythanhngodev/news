<link rel="stylesheet" href="css/datatables.min.css">
<script src="js/datatables.min.js" type="text/javascript"></script>
<script src="ckfinder/ckfinder.js"></script>
<!-- Content Header (Page header) -->
    <section class="content-header col-md-8 background-container">
      <!-- Default box -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Chỉ dẫn</h3>
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
    <div class="container" style="width: 100%;">
      <div class="row">
        <div class="col-md-12">
    <!-- Main content -->
              <!-- Cột trái -->
                <div class="box">
                  <div class="box-header with-border">
                    <h3 class="box-title">Danh sách quảng cáo</h3>
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
                   <table id="vlute" class="table">
                      <thead>
                          <tr role="row">
                            <tr style="background-color: #f7f7f7;color: #232d33;">
                              <th class="giua">STT</th>
                              <th class="giua">Tên quảng cáo</th>
                              <th class="giua">Người đặt</th>
                              <th class="giua">Ngày đặt</th>
                              <th class="giua">Bắt đầu</th>
                              <th class="giua">Kết thúc</th>
                              <th class="giua">Ẩn/Hiện</th>
                              <th class="giua">Chức năng</th>
                            </tr>
                          </tr>
                      </thead>
                      <tbody>
                      <?php 
                        $stt = 1;
                        while ($row = mysqli_fetch_assoc($dulieu)) {
                          ?>
                            <tr>
                              <th class="giua"><?php echo $stt; ?></th>
                              <td><a href="#"><?php echo $row['tenqc']; ?></a></td>
                              <td><?php echo $row['nguoidatqc'] ?></td>
                              <td class="giua"><?php echo $row['ngaydatqc']; ?></td>
                              <td class="giua"><?php echo $row['ngaybdqc']; ?></td>
                              <td class="giua"><?php echo $row['ngayktqc']; ?></td>
                              <?php if ($row['hienthi']=='1') { ?>
                                      <td class="giua nuttt" id="anhienbai-<?php echo $row['idqc']; ?>" data-vlute="<?php echo $row['idqc']; ?>" ><a class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></a></td>
                              <?php }
                                    else{ ?>
                                      <td class="giua nuttt" id="anhienbai-<?php echo $row['idqc']; ?>" data-vlute="<?php echo $row['idqc']; ?>" ><a class="btn btn-warning"><i class="fa fa-close" aria-hidden="true"></i></a></td>
                              <?php } ?>
                              
                              <td class="giua"><a href="?p=suabai&id=<?php echo $row['idqc']; ?>" class="btn btn-primary" title="Sửa"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                  <a class="btn btn-danger nutxx" title="Xóa"
                                  data-vlute="<?php echo $row['idqc']; ?>" ><i class="fa fa-trash" aria-hidden="true"></i></a>
                              </td>
                          </tr>
                          <?php
                          $stt++;
                        }
                      ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
          </div>
      </div>
    </div>

<script type="text/javascript">
    document.title = "CNV | Quảng cáo";
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
    	$("#quangcao").addClass("active");
      $("#id-tieu-de-chinh").html("Quảng cáo trên website");
      $("#vlute").DataTable();
	});
</script>
