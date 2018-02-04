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
          <a href="?p=themthanhvien" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i> Thêm thẻ</a>
        </div>
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