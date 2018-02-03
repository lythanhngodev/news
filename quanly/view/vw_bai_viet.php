<link rel="stylesheet" href="css/datatables.min.css">
<script src="js/datatables.min.js" type="text/javascript"></script>
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Bài viết
        <div class="line"></div>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12 col-ms-12">
          <a href="?p=thembai" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i> Thêm bài viết</a>
        </div>
        <div class="col-md-12 col-ms-12 cach"></div>
      </div>
      <div class="windows-table">
        <table id="vlute" class="table table-striped table-bordered">
            <thead>
                <tr role="row">
                  <tr style="background-color: #3c8dbc;color: #fff;">
                    <th class="giua">STT</th>
                    <th class="giua">Tên bài viết</th>
                    <th class="giua">Ngày tạo</th>
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
                    <td><a href="#"><?php echo $row['tenbv']; ?></a></td>
                    <td class="giua"><?php echo $row['ngaydang']; ?></td>
                    <?php if ($row['hienthi']=='1') { ?>
                            <td class="giua nuttt" id="anhienbai-<?php echo $row['idbv']; ?>" data-vlute="<?php echo $row['idbv']; ?>" ><a class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></a></td>
                    <?php }
                          else{ ?>
                            <td class="giua nuttt" id="anhienbai-<?php echo $row['idbv']; ?>" data-vlute="<?php echo $row['idbv']; ?>" ><a class="btn btn-warning"><i class="fa fa-close" aria-hidden="true"></i></a></td>
                    <?php } ?>
                    
                    <td class="giua"><a href="?p=suabai&id=<?php echo $row['idbv']; ?>" class="btn btn-primary" title="Sửa"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        <a class="btn btn-danger nutxx" title="Xóa"
                        data-vlute="<?php echo $row['idbv']; ?>" ><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </td>
                </tr>
                <?php
                $stt++;
              }
            ?>
            </tbody>
        </table>
      </div>
    </section>
<script type="text/javascript">
    document.title = "VLUTE - Quản lý bài viết";
</script>
<script type="text/javascript">
  $(document).ready(function() {
      // Cho ẩn bài viết
      $(".nuttt").click(function(){
        var id = $(this).attr("data-vlute");
        $.ajax({
          url : "ajax/ajax_an_hien_bai_viet.php",
          type : "post",
          dataType:"text",
          data : {
            id: id
          },
          success : function (data){
              $("#anhienbai-"+id).html(data);
          }
        });
      });
      $(".nutxx").click(function(){
        var cf = confirm('Bạn có chắc không ?');
        if(cf){
          var id = $(this).attr("data-vlute");
          $.ajax({
            url : "ajax/ajax_xoa_bai_viet.php",
            type : "post",
            dataType:"text",
            data : {
              id: id
            },
            success : function (data){
                alert(data);
                location.reload();
            }
          });
        }
      });
  });
</script>
<script type="text/javascript">
	$(document).ready(function() {
    	$("#baiviet").addClass("active");
	});
</script>
<script type="text/javascript" charset="utf-8">
      $(document).ready(function() {
        $('#vlute').DataTable();
      } );
</script>