
<!-- Content Header (Page header) -->
    <section class="content-header">
      
    </section>

    <!-- Main content -->
    <section class="content">
    	<div class="col-md-4">
          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="../<?php echo $hinh_user; ?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $ten_user; ?></h3>

              <p class="text-muted text-center"><?php if ($quyen_user==0) {
                    echo "Người đăng bài";
                  }else echo "Người quản trị"; ?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Bài viết</b> <a class="pull-right">30</a>
                </li>
                <li class="list-group-item">
                  <a href="../author/<?php echo $id_user; ?>/<?php echo $ten_user; ?>" target="_blank">Xem chi tiết bài viết</a>
                </li>
              </ul>

              <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    	</div>

    </section>
<script type="text/javascript">
	$(document).ready(function() {
    	$("#trangchu").addClass("active");
      $("#id-tieu-de-chinh").html("Trang chủ");
	});
</script>