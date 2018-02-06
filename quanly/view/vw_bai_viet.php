<link rel="stylesheet" href="css/datatables.min.css">
<script src="js/datatables.min.js" type="text/javascript"></script>
<!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">
      <div class="windows-table">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Danh sách các bài viết</h3>
            <div class="box-tools pull-right">
              <!-- Collapse Button -->
              <button type="button" class="btn btn-box-tool" data-widget="collapse">
                <i class="fa fa-minus"></i>
              </button>
            </div>
            <!-- /.box-tools -->
          </div>
          <div class="col-md-12 col-ms-12 cach"></div>
          <div class="col-md-12 col-ms-12">
            <a href="?p=thembai" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Thêm bài viết</a>
          </div>
          <div class="col-md-12 col-ms-12 cach"></div>
          <!-- /.box-header -->
          <div class="box-body">
             <table id="vlute" class="table">
                <thead>
                    <tr role="row">
                      <tr style="background-color: #f7f7f7;color: #232d33;">
                        <th class="giua">STT</th>
                        <th class="giua">Nổi bật</th>
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
                        <?php if ($row['tinnoibac']=='1') { ?>
                                <td class="giua nutnb" id="noibat-<?php echo $row['idbv']; ?>" data-vlute="<?php echo $row['idbv']; ?>" ><a><i class="fa fa-star sao" aria-hidden="true"></i></a></td>
                        <?php }
                              else{ ?>
                                <td class="giua nutnb" id="noibat-<?php echo $row['idbv']; ?>" data-vlute="<?php echo $row['idbv']; ?>" ><a><i class="fa fa-star-o sao" aria-hidden="true"></i></a></td>
                        <?php } ?>
                        <td><a href="<?php echo $row["linkbv"] ?>-<?php echo $row["idbv"] ?>.html"><?php echo $row['tenbv']; ?></a></td>
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
          <!-- /.box-body -->
          <div class="box-footer">
            The footer of the box
          </div>
          <!-- box-footer -->
        </div>
        <!-- /.box -->
      </div>
    </section>
<script type="text/javascript">
    document.title = "CNV - Quản lý bài viết";
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
      // đánh dấu bài viết nổi bậc
      $(".nutnb").click(function(){
        var id = $(this).attr("data-vlute");
        $.ajax({
          url : "ajax/ajax_bai_viet_noi_bat.php",
          type : "post",
          dataType:"text",
          data : {
            id: id
          },
          success : function (data){
              $("#noibat-"+id).html(data);
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
                $("body").append(data);
            }
          });
        }
      });
  });
</script>
<script type="text/javascript">
	$(document).ready(function() {
    	$("#baiviet").addClass("active");
      $("#tatcabaiviet").addClass("active");
	});
</script>
<script type="text/javascript" charset="utf-8">
      $(document).ready(function() {
        $('#vlute').DataTable();
        $("#id-tieu-de-chinh").html("Bài viết");
      } );
</script>