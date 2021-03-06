<link rel="stylesheet" href="css/datatables.min.css">
<script src="js/datatables.min.js" type="text/javascript"></script>
<!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content background-container">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Danh sách các thẻ dạng liệt kê</h3>
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
            <?php 
              while ($row = mysqli_fetch_assoc($dulieu)) {
                ?>
                  <a id="the-tag-<?php echo $row['idtag']; ?>" class="c-tag">
                    <span class="ten-tag" title="Tân thẻ"><?php echo $row['tentag']; ?></span>
                    <span class="nd-tag" title="Số bài viết có sử dụng thẻ"><?php echo vlu_count_content_of_tags($row['idtag']); ?></span>
                    <i class="fa fa-times-circle xoa-tag" data-vlute=<?php echo $row['idtag']; ?> title="Xóa thẻ" ></i>
                  </a>
                <?php
              }
            ?>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          
        </div>
        <!-- box-footer -->
      </div>
      <div class="windows-table">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Danh sách các thẻ dạng bảng</h3>
            <div class="box-tools pull-right">
              <!-- Collapse Button -->
              <button type="button" class="btn btn-box-tool" data-widget="collapse">
                <i class="fa fa-minus"></i>
              </button>
            </div>
            <!-- /.box-tools -->
          </div>
            <!-- /.box-header -->
          <div class="col-md-12 col-ms-12 cach"></div>
          <div class="box-body">
            <table id="vlute" class="table">
                <thead>
                    <tr role="row">
                      <tr style="background-color: #f7f7f7;color: #232d33;">
                        <th class="giua">STT</th>
                        <th class="giua">Tên thẻ</th>
                        <th class="giua">Số bài viết</th>
                        <th class="giua">Chức năng</th>
                      </tr>
                    </tr>
                </thead>
                <tbody>
                <?php 
                  $stt = 1;
                  while ($row = mysqli_fetch_assoc($dulieu1)) {
                    ?>
                      <tr>
                        <th class="giua"><?php echo $stt; ?></th>
                        <td id="id-ten-tag-<?php echo $row['idtag']; ?>" class="giua"><a><b><?php echo $row['tentag']; ?></b></a></td>
                        <td id="id-so-bai-viet-<?php echo $row['idtag']; ?>" class="giua"><?php echo vlu_count_content_of_tags($row['idtag']); ?></td>
                        <td class="giua"><a class="btn btn-primary sua-tag" title="Sửa" data-vlute="<?php echo $row['idtag']; ?>"><i class="fa fa-pencil-square-o"></i></a>
                            <a class="btn btn-danger xoa-tag" title="Xóa" data-vlute="<?php echo $row['idtag']; ?>"><i class="fa fa-trash"></i></a>
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

      <!-- /.box -->

    </section>
<!-- Modal: Thêm tag -->
<div class="modal fade" id="qltv-modal-them-tag" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <!-- Modal content-->
    <div class="modal-content" style="box-shadow: none;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Thêm thẻ</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Tên thẻ</label>
          <input type="text" class="form-control" name="" id="ten-loai-sach-them" placeholder="tên thẻ" required autocomplete="on">
        </div>
      </div>
        <input type="text" hidden="hidden" name="" value="" id="id-id">
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        <button type="button" class="btn btn-success" id="nut-them-loai-sach">Lưu</button>
      </div>
    </div>
  </div>
</div><!-- Modal: Thêm tag -->
<!-- Modal: Xoa tag -->
<div class="modal fade" id="qltv-modal-xoa-tags">
  <div class="modal-dialog modal-sm">
    <div class="modal-content" style="box-shadow: none;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Xóa thẻ</h4>
      </div>
      <div class="modal-body">
        Bạn có chắc chắc xóa thẻ này?<br>
        Hành động này sẽ không ảnh hưởng đến các bài viết trên website!
      </div>
      <input type="text" hidden="hidden" name="" id="ma-the-xoa">
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        <button type="button" class="btn btn-danger" style="border: 1px solid;" id="nut-xoa-the">Tôi chắc chắn</button>
      </div>
    </div> 
  </div>
</div>

<!-- Modal: Sửa tag -->
<div class="modal fade" id="modal-sua-tag">
  <div class="modal-dialog modal-sm">
    <div class="modal-content" style="box-shadow: none;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Sửa thẻ</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Tên tag</label>
          <input type="text" class="form-control" name="" id="ten-tag-sua" placeholder="tên tag" required autocomplete="on" >
        </div>
        <input type="text" hidden value="" id="ma-tag-sua" name="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        <button type="button" class="btn btn-success" id="nut-sua-tag">Lưu thay đổi</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div><!-- Modal: Sửa tag -->

<script type="text/javascript">
    document.title = "CNV | Quản lý thẻ";
</script>
<script type="text/javascript">
	$(document).ready(function() {
    	$("#thetags").addClass("active");
	});
</script>
<script type="text/javascript" charset="utf-8">
      $(document).ready(function() {
        $("#id-tieu-de-chinh").html("Thẻ");
        $(".them-the").click(function(){
          $("#qltv-modal-them-tag").modal("show");
        });
      $(".sua-tag").click(function(){
        var id = $(this).attr("data-vlute");
        $("#ten-tag-sua").val($("#id-ten-tag-"+id).text().trim());
        $("#ma-tag-sua").val(id);
        $("#modal-sua-tag").modal("show");
      });

        $(".xoa-tag").click(function(){
          var id = $(this).attr("data-vlute");
          $("#ma-the-xoa").val(id);
          $("#qltv-modal-xoa-tags").modal("show");
        });
        $("#nut-xoa-the").click(function(){
          $.ajax({
            url : "ajax/ajax_xoa_the.php",
            type : "post",
            dataType:"text",
            data : {
              id: $("#ma-the-xoa").val()
            },
            success : function (data){
                $("body").append(data);
            }
          });
        });
        $("#nut-sua-tag").click(function(){
          $.ajax({
            url : "ajax/ajax_sua_the.php",
            type : "post",
            dataType:"text",
            data : {
              tentag: $("#ten-tag-sua").val(),
              id: $("#ma-tag-sua").val()
            },
            success : function (data){
                $("body").append(data);
            }
          });
        });
        $("#vlute").DataTable();
      } );

</script>