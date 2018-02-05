<link rel="stylesheet" href="css/datatables.min.css">
<script src="js/datatables.min.js" type="text/javascript"></script>

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Thành viên
        <div class="line"></div>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12 col-ms-12">
          <a href="?p=themthanhvien" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i> Thêm thành viên</a>
        </div>
        <div class="col-md-12 col-ms-12 cach"></div>
        <div class="col-md-12 col-ms-12 cach"></div>

      </div>
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
                      <h5 class="description-header">35</h5>
                      <span class="description-text">PRODUCTS</span>
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

<script type="text/javascript">
    document.title = "VLUTE | Quản lý thành viên";
</script>
<script type="text/javascript">
	$(document).ready(function() {
    	$("#thanhvien").addClass("active");
	});
</script>
<script type="text/javascript" charset="utf-8">
      $(document).ready(function() {
        $('#vlute').DataTable();
      } );
</script>