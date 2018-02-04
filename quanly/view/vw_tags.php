<link rel="stylesheet" href="css/datatables.min.css">
<script src="js/datatables.min.js" type="text/javascript"></script>

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Thẻ (Tags)
        <div class="line"></div>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12 col-ms-12">
          <a class="btn btn-success" id="them-the"><i class="fa fa-pencil" aria-hidden="true"></i> Thêm thẻ</a>
        </div>
        <div class="col-md-12 col-ms-12 cach"></div>
        <div class="col-md-12 col-ms-12 cach"></div>
      </div>
      <?php 
        while ($row = mysqli_fetch_assoc($dulieu)) {
          ?>
            <a class="c-tag">
              <span class="ten-tag" title="Tân thẻ"><?php echo $row['tentag']; ?></span>
              <span class="nd-tag" title="Số bài viết có sử dụng thẻ"><?php echo vlu_count_content_of_tags($row['idtag']); ?></span>
              <i class="fa fa-times-circle" title="Xóa thẻ" ></i>
            </a>
          <?php
        }
      ?>
    </section>
<!-- Modal: Thêm tag -->
<div class="modal fade" id="qltv-modal-them-tag" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <!-- Modal content-->
    <div class="modal-content">
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
      } );
</script>