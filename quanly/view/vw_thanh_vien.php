<link rel="stylesheet" href="css/datatables.min.css">
<script src="js/datatables.min.js" type="text/javascript"></script>

<!-- Content Header (Page header) -->
    <section class="content-header">
    </section>

    <!-- Main content -->
    <section class="content">
      <?php 
      $stt = 1;
      while ($row = mysqli_fetch_assoc($dulieu)) {
        ?>
        <div class="col-md-4">
          <div class="box box-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-aqua-active">
                <a href="#" class="trang"><h3 class="widget-user-username"><?php echo $row['tennd']; ?></h3></a>
                <h5 class="widget-user-desc trang">
                  <?php if ($row['admin']==0) {
                    echo "Người đăng bài";
                  }else echo "Người quản trị"; ?>
                </h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle" src="../<?php echo $row['thumbus']; ?>" alt="User Avatar">
              </div>
              <div class="box-footer">
                <div class="row">
                  <div class="col-sm-6 border-right">
                    <div class="description-block">
                      <h5 class="description-header"><?php echo vlu_count_content($row['iduser']); ?></h5>
                      <span class="description-text">Bài viết</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6">
                    <div class="description-block">
                      <a href="#">
                        <h5>Xem chi tiết</h5>
                        <span class="description-text"><i class="fa fa-arrow-circle-right"></i></span>
                      </a>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
        </div>
        <?php
          $stt++; } ?>
    </section>
    <a href="?p=themthanhvien"><div class="nut-them-o-goc"><span>+</span></div></a>
<script type="text/javascript">
    document.title = "CNV | Thêm nhân viên";
</script>
<script type="text/javascript">
	$(document).ready(function() {
    	$("#thanhvien").addClass("active");
      
	});
</script>
<script type="text/javascript" charset="utf-8">
      $(document).ready(function() {
        $('#vlute').DataTable();
        $("#id-tieu-de-chinh").html("Nhân viên");
      } );
</script>