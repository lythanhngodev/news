<link rel="stylesheet" href="css/datatables.min.css">
<script src="js/datatables.min.js" type="text/javascript"></script>

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Giáo viên
        <div class="line"></div>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12 col-ms-12">
          <a id="themgiaovien" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i> Thêm giáo viên</a>
        </div>
        <div class="col-md-12 col-ms-12 cach"></div>
      </div>
      <div class="windows-table">
        <table id="vlute" class="table">
            <thead>
                <tr role="row">
                  <tr style="background-color: #3c8dbc;color: #fff;">
                    <th class="giua">STT</th>
                    <th class="giua">Họ & Tên</th>
                    <th class="giua">Thuộc khoa - Bộ môn</th>
                    <th class="giua">Trình độ chuyên môn</th>
                    <th class="giua">Chức vụ chức năng</th>
                    <th class="giua">Liên hệ</th>
                    <th class="giua" style="width: 80px;">Chức năng</th>
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
                    <td><a><?php echo $row['hoten']; ?></a></td>
                    <td class="giua"><?php echo $row['tenkhoa']; ?></td>
                    <td class="giua"><?php echo $row['trinhdochuyenmon']; ?></td>
                    <td class="giua"><?php echo $row['chucvuchucnang']; ?></td>
                    <td class="giua"><a href="mailto:<?php echo $row['lienhe']; ?>" target="_blank"><u><?php echo $row['lienhe']; ?></u></a></td>
                    <td class="giua"><a class="sua-gv btn btn-primary" title="Sửa" data-vlute="<?php echo $row['idgv']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        <a class="btn btn-danger xoa-gv" title="Xóa" data-vlute="<?php echo $row['idgv']; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </td>
                    <input type="text" hidden="hidden" name="" id="ho-ten-id-<?php echo $row['idgv']; ?>" value="<?php echo $row['hoten']; ?>">
                    <input type="text" hidden="hidden" name="" id="ten-khoa-id-<?php echo $row['idgv']; ?>" value="<?php echo $row['idkhoa']; ?>">
                    <input type="text" hidden="hidden" name="" id="trinh-do-id-<?php echo $row['idgv']; ?>" value="<?php echo $row['trinhdochuyenmon']; ?>">
                    <input type="text" hidden="hidden" name="" id="chuc-vu-chuc-nang-id-<?php echo $row['idgv']; ?>" value="<?php echo $row['chucvuchucnang']; ?>">
                    <input type="text" hidden="hidden" name="" id="lien-he-id-<?php echo $row['idgv']; ?>" value="<?php echo $row['lienhe']; ?>">
                </tr>
                <?php
                $stt++;
              }
            ?>
            </tbody>
        </table>
      </div>
    </section>

<div class="modal fade" id="vlute-them-gv" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"> <span aria-hidden="true" class="">×   </span><span class="sr-only">Close</span>

                </button>
                 <h4 class="modal-title" id="myModalLabel">Thêm giáo viên</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label>Tên giáo viên</label>
                <input class="form-control" name="" id="md-them-vlute-ten-gv" value="" required autocomplete="on">
              </div>
              <div class="form-group">
                <label>Thuộc khoa - Bộ môn</label>
                <select class="form-control" name="" id="md-them-vlute-thuoc-khoa-gv">
                  <?php 
                    while ($row2 = mysqli_fetch_assoc($dulieu_khoa1)) {
                  ?>
                      <option value="<?php echo $row2["idkhoa"] ?>"><?php echo $row2["tenkhoa"] ?></option>
                  <?php
                    }
                   ?>
                </select>
              </div>
              <div class="form-group">
                <label>Trình độ chuyên môn</label>
                <input class="form-control" name="" id="md-them-vlute-trinh-do-gv" value="" required autocomplete="on">
              </div>
              <div class="form-group">
                <label>Chức vụ chức năng</label>
                <input class="form-control" name="" id="md-them-vlute-chuc-vu-chuc-nang-gv" value="" required autocomplete="on">
              </div>
              <div class="form-group">
                <label>Liên hệ</label>
                <input class="form-control" name="" id="md-them-vlute-lien-he-gv" value="" required autocomplete="on">
              </div>
            </div>
            <input type="text" hidden="hidden" name="" value="" id="md-them-vlute-id-sua-gv">
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="md-them-gv">Hoàn tất</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="vlute-sua-gv" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"> <span aria-hidden="true" class="">×   </span><span class="sr-only">Close</span>

                </button>
                 <h4 class="modal-title" id="myModalLabel">Điều chỉnh thông tin giáo viên</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label>Tên giáo viên</label>
                <input class="form-control" name="" id="md-vlute-ten-gv" value="" required autocomplete="on">
              </div>
              <div class="form-group">
                <label>Thuộc khoa - Bộ môn</label>
                <select class="form-control" name="" id="md-vlute-thuoc-khoa-gv">
                  <?php 
                    while ($row1 = mysqli_fetch_assoc($dulieu_khoa)) {
                  ?>
                      <option value="<?php echo $row1["idkhoa"] ?>"><?php echo $row1["tenkhoa"] ?></option>
                  <?php
                    }
                   ?>
                </select>
              </div>
              <div class="form-group">
                <label>Trình độ chuyên môn</label>
                <input class="form-control" name="" id="md-vlute-trinh-do-gv" value="" required autocomplete="on">
              </div>
              <div class="form-group">
                <label>Chức vụ chức năng</label>
                <input class="form-control" name="" id="md-vlute-chuc-vu-chuc-nang-gv" value="" required autocomplete="on">
              </div>
              <div class="form-group">
                <label>Liên hệ</label>
                <input class="form-control" name="" id="md-vlute-lien-he-gv" value="" required autocomplete="on">
              </div>
            </div>
            <input type="text" hidden="hidden" name="" value="" id="md-vlute-id-sua-gv">
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="md-sua-gv">Hoàn tất</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="vlute-xoa-gv" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Xóa giáo viên</h4>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger" role="alert">Bạn có chắc muốn xóa giáo viên này?</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tôi không chắc</button>
        <button type="button" class="btn btn-danger" data-ng-click="deleteUser(user._id)">Tôi chắc chắn</button>
      </div>
    </div> 
  </div>
</div>

<script type="text/javascript">
    document.title = "VLUTE | Quản lý giáo viên";
</script>
<script type="text/javascript">
	$(document).ready(function() {
    	$("#giaovien").addClass("active");
      $(".sua-gv").click(function(){
        var id = $(this).attr("data-vlute");
        $("#md-vlute-ten-gv").val($("#ho-ten-id-"+id).val().trim());
        $("#md-vlute-thuoc-khoa-gv").val($("#ten-khoa-id-"+id).val().trim());
        $("#md-vlute-trinh-do-gv").val($("#trinh-do-id-"+id).val().trim());
        $("#md-vlute-chuc-vu-chuc-nang-gv").val($("#chuc-vu-chuc-nang-id-"+id).val().trim());
        $("#md-vlute-lien-he-gv").val($("#lien-he-id-"+id).val().trim());
        $("#md-vlute-id-sua-gv").val(id);
        $("#vlute-sua-gv").modal("show");
      });
      $("#md-sua-gv").click(function(){
        $.ajax({
          url : "ajax/ajax_sua_gv.php",
          type : "post",
          dataType:"text",
          data : {
            hoten: $("#md-vlute-ten-gv").val(),
            khoa: $("#md-vlute-thuoc-khoa-gv").val(),
            trinhdo: $("#md-vlute-trinh-do-gv").val(),
            chucvu: $("#md-vlute-chuc-vu-chuc-nang-gv").val(),
            lienhe: $("#md-vlute-lien-he-gv").val(),
            id: $("#md-vlute-id-sua-gv").val()
          },
          success : function (data){
              alert(data);
              location.reload();
          }
        });
      });
      $("#themgiaovien").click(function(){
        $("#vlute-them-gv").modal("show");
      });
      $("#md-them-gv").click(function(){
        $.ajax({
          url : "ajax/ajax_them_gv.php",
          type : "post",
          dataType:"text",
          data : {
            hoten: $("#md-them-vlute-ten-gv").val(),
            khoa: $("#md-them-vlute-thuoc-khoa-gv").val(),
            trinhdo: $("#md-them-vlute-trinh-do-gv").val(),
            chucvu: $("#md-them-vlute-chuc-vu-chuc-nang-gv").val(),
            lienhe: $("#md-them-vlute-lien-he-gv").val()
          },
          success : function (data){
              alert(data);
              location.reload();
          }
        });
      });
      $(".xoa-gv").click(function(){
        $("#vlute-xoa-gv").modal("show");
      });
	});
</script>
<script type="text/javascript" charset="utf-8">
      $(document).ready(function() {
        $('#vlute').DataTable();
      } );
</script>