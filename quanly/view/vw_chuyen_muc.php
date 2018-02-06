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
            <h3 class="box-title">Danh sách các chuyên mục</h3>
            <div class="box-tools pull-right">
              <!-- Collapse Button -->
              <button type="button" class="btn btn-box-tool" data-widget="collapse">
                <i class="fa fa-minus"></i>
              </button>
            </div>
            <!-- /.box-tools -->
          </div>
          <div class="col-md-12 cach"></div>
          <div class="col-md-12 col-ms-12">
            <a class="btn btn-primary" id="them-chuyen-muc"><i class="fa fa-plus" aria-hidden="true"></i> Thêm chuyên mục</a>
          </div>
          <div class="col-md-12 cach"></div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="vlutenn" class="table">
                <thead>
                    <tr role="row">
                      <tr style="background-color: #f7f7f7;color: #232d33;">
                        <th class="giua">STT</th>
                        <th class="giua">Tên chuyên mục</th>
                        <th class="giua">Mô tả</th>
                        <th class="giua">Link chuyên mục</th>
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
                        <td id="id-ten-cm-<?php echo $row['idcm']; ?>"><a><b><?php echo $row['tencm']; ?></b></a></td>
                        <td id="id-mo-ta-cm-<?php echo $row['idcm']; ?>"><?php echo $row['mota']; ?></td>
                        <td id="id-link-cm-<?php echo $row['idcm']; ?>"><?php echo $row['linkcm'] ?></td>
                        <input type="text" hidden name="" id="id-hien-thi-cm-<?php echo $row['idcm']; ?>" value="<?php echo $row['linkcm']; ?>">
                        <?php if ($row['hienthi']=='1') { ?>
                                <td class="giua nutdoi" id="anhiencm-<?php echo $row['idcm']; ?>" data-vlute="<?php echo $row['idcm']; ?>" ><a class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></a></td>
                        <?php }
                              else{ ?>
                                <td class="giua nutdoi" id="anhiencm-<?php echo $row['idcm']; ?>" data-vlute="<?php echo $row['idcm']; ?>" ><a class="btn btn-warning"><i class="fa fa-close" aria-hidden="true"></i></a></td>
                        <?php } ?>
                        <td class="giua"><a class="btn btn-primary sua-chuyen-muc" title="Sửa" data-qltv="<?php echo $row['idcm']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            <a class="btn btn-danger xoa-chuyen-muc" title="Xóa" data-qltv="<?php echo $row['idcm']; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                    <?php
                    $stt++; } ?>
                </tbody>
            </table>
          </div>
          <!-- /.box-body -->
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
        <button type="button" class="btn btn-success" id="nut-them-chuyen-muc">Lưu chuyên mục</button>
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
        <button type="button" class="btn btn-success" id="nut-sua-chuyen-muc">Lưu thay đổi</button>
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
    document.title = "CNV | Quản lý chuyên mục";
</script>
<script type="text/javascript">
	$(document).ready(function() {
    	$("#danhmuc").addClass("active");
      $("#them-chuyen-muc").click(function(){
        $("#modal-them-chuyen-muc").modal("show");
      });
      $(".xoa-chuyen-muc").click(function(){
        var id = $(this).attr("data-qltv");
        $("#id-id-xoa-chuyen-muc").val(id);
        $("#modal-xoa-chuyen-muc").modal("show");
      });
      $(".sua-chuyen-muc").click(function(){
        var id = $(this).attr("data-qltv");
        $("#ten-chuyen-muc-sua").val($("#id-ten-cm-"+id).text().trim());
        $("#link-chuyen-muc-sua").val($("#id-link-cm-"+id).text().trim());
        $("#mo-ta-chuyen-muc-sua").val($("#id-mo-ta-cm-"+id).text().trim());
        if ($("#id-hien-thi-cm-"+id).val().trim()=="1")
          document.getElementById('an-hien-chuyen-muc-sua').checked = true;
        $("#modal-sua-chuyen-muc").modal("show");
      });
	});
</script>
<script type="text/javascript" charset="utf-8">
      $(document).ready(function() {
        $("#id-tieu-de-chinh").html("Chuyên mục");
            $(".nutdoi").click(function(){
              var id = $(this).attr("data-vlute");
              $.ajax({
                url : "ajax/ajax_an_hien_chuyen_muc.php",
                type : "post",
                dataType:"text",
                data : {
                  id: id
                },
                success : function (data){
                    $("#anhiencm-"+id).html(data);
                }
              });
            });
      });
      $(document).ready(function(){
        $("#vlutenn").DataTable();
      });
</script>