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
      </div>
      <div class="windows-table">
        <table id="vlute" class="table">
            <thead>
                <tr role="row">
                  <tr style="background-color: #f7f7f7;color: #232d33;">
                    <th class="giua">STT</th>
                    <th class="giua">Tên thành viên</th>
                    <th class="giua">Tên đăng nhập</th>
                    <th class="giua">Email</th>
                    <th class="giua">Quyền truy cập</th>
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
                    <td><a><b><?php echo $row['tennd']; ?></b></a></td>
                    <td class="giua"><?php echo $row['tendn']; ?></td>
                    <td class="giua"><?php echo $row['gmail']; ?></td>
                    <?php if ($row['quyen']=='1' || $row['quyen']=='2') { ?>
                            <td class="giua"><a class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></a></td>
                    <?php }
                          else{ ?>
                            <td class="giua"><a class="btn btn-warning"><i class="fa fa-close" aria-hidden="true"></i></a></td>
                    <?php } ?>
                    
                    <td class="giua"><a href="?p=suathanhvien&id=<?php echo $row['iduser']; ?>" class="btn btn-primary" title="Sửa"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        <a onclick="return confirm('Bạn có chắc không ?');" href="?p=xoabai&id=<?php echo $row['iduser']; ?>" class="btn btn-danger" title="Xóa"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
      } );
</script>