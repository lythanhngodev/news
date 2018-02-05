<link rel="stylesheet" href="css/datatables.min.css">
<script src="js/datatables.min.js" type="text/javascript"></script>

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Chuyên mục
        <div class="line"></div>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12 col-ms-12">
          <a class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i> Thêm chuyên mục</a>
        </div>
        <div class="col-md-12 col-ms-12 cach"></div>
        <div class="col-md-12 col-ms-12 cach"></div>
      </div>
      <div class="windows-table">
        <table id="vlute" class="table">
            <thead>
                <tr role="row">
                  <tr style="background-color: #f7f7f7;color: #232d33;">
                    <th class="giua">STT</th>
                    <th class="giua">Tên chuyên mục</th>
                    <th class="giua">Mô tả</th>
                    <th class="giua">Từ khóa</th>
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
                    <td><a><b><?php echo $row['tencm']; ?></b></a></td>
                    <td><?php echo $row['mota']; ?></td>
                    <td><?php echo $row['tukhoa']; ?></td>
                    <?php if ($row['hienthi']=='1') { ?>
                            <td class="giua nuttt" id="anhiencm-<?php echo $row['idcm']; ?>" data-vlute="<?php echo $row['idcm']; ?>" ><a class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></a></td>
                    <?php }
                          else{ ?>
                            <td class="giua nuttt" id="anhiencm-<?php echo $row['idcm']; ?>" data-vlute="<?php echo $row['idcm']; ?>" ><a class="btn btn-warning"><i class="fa fa-close" aria-hidden="true"></i></a></td>
                    <?php } ?>
                    <td class="giua"><a href="?p=suathanhvien&id=<?php echo $row['idcm']; ?>" class="btn btn-primary" title="Sửa"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        <a onclick="return confirm('Bạn có chắc không ?');" href="?p=xoabai&id=<?php echo $row['idcm']; ?>" class="btn btn-danger" title="Xóa"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
            $(".nuttt").click(function(){
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
</script>