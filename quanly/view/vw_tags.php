<link rel="stylesheet" href="css/datatables.min.css">
<script src="js/datatables.min.js" type="text/javascript"></script>

<!-- Content Header (Page header) -->
    <section class="content-header background-container">
      <h1>
        Thẻ
      </h1>
    </section>

    <!-- Main content -->
    <section class="content background-container">
      <div class="row">
        <div class="col-md-12 col-ms-12">
          <a class="btn btn-success" id="them-the"><i class="fa fa-pencil" aria-hidden="true"></i> Thêm thẻ</a>
        </div>
        <div class="col-md-12 col-ms-12 cach"></div>
        <div class="col-md-12 col-ms-12 cach"></div>
      </div>
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Danh sách các thẻ</h3>
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
            <a class="c-tag">
              <span class="ten-tag" title="Tân thẻ"><?php echo $row['tentag']; ?></span>
              <span class="nd-tag" title="Số bài viết có sử dụng thẻ"><?php echo vlu_count_content_of_tags($row['idtag']); ?></span>
              <i class="fa fa-times-circle xoa-tag" title="Xóa thẻ" ></i>
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
        <button type="button" class="btn btn-primary" id="nut-them-loai-sach">Lưu</button>
      </div>
    </div>
  </div>
</div><!-- Modal: Thêm tag -->
<!-- Modal: Xoa tag -->
<div class="modal modal-danger fade" id="qltv-modal-xoa-tags">
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
      <input type="text" hidden="hidden" name="" id="ma-loai-sach-xoa">
      <div class="modal-footer">
        <button type="button" class="btn btn-outline" data-dismiss="modal">Đóng</button>
        <button type="button" class="btn btn-outline" style="border: 1px solid;" id="nut-xoa-the">Tôi chắc chắn</button>
      </div>
    </div> 
  </div>
</div>
<script type="text/javascript">
    document.title = "VLUTE | Quản lý thành viên";
</script>
<script type="text/javascript">
	$(document).ready(function() {
    	$("#thetags").addClass("active");
	});
</script>
<script type="text/javascript" charset="utf-8">
      $(document).ready(function() {
        $('#vlute').DataTable();
        $("#them-the").click(function(){
          $("#qltv-modal-them-tag").modal("show");
        });
        $(".xoa-tag").click(function(){
          $("#qltv-modal-xoa-tags").modal("show");
        });
      } );
</script>