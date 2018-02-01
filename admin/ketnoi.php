<?php
	$congngheviet = array(
		'HOST' => 'http://localhost/news/'
	);
	class ketnoi{
		function connect(){
			$conn=@mysql_connect("localhost", "root", "") or die("kết nối thất bại!");
			mysql_select_db("newsdb",$conn);
			mysql_query("SET character_set_results=utf8");
			mb_language('uni');
			mb_internal_encoding('UTF-8');
			mysql_query("set names 'utf8'",$conn);
			return $conn;
		}
		/* Ham can ban */ /* Da kiem duyet */
		function test(){
			$kn = $this->connect();
			$sql = "select * from tbluser";
			$query = mysql_query($sql,$kn);
			$kiemtra = mysql_num_rows($query);
			if($kiemtra > 0){
				while($row = mysql_fetch_array($query)){
					echo $row["tendn"];
					echo "<br>";
					echo $row["diachi"];
				}
			}
		}
		/* DANG NHAP */
		function xet_dang_nhap($us, $pa){
			$kn = $this->connect();
			$pa = md5($pa);
			$lenh = "SELECT quyen, thumbus,tennd,iduser, admin from tbluser WHERE tendn=N'$us' and matkhau = N'$pa'";
			$kq = mysql_query($lenh,$kn);
			mysql_close();
			if(mysql_num_rows($kq)!=0)
					return $kq;
			else
				return null;
		}
		/* 6 bai viet hot nhat */
		function get_bai_viet_moi(){
			$kn = $this->connect();
			$lenh = "SELECT idbv, tenbv, idcm, thumb, linkbv, mota, ngaydang FROM `tblbaiviet` where hienthi=1 ORDER BY idbv DESC LIMIT 6";
			$kq = mysql_query($lenh,$kn);
			$kiemtra = mysql_num_rows($kq);
			mysql_close();
			if($kiemtra>0){
				return $kq;
			}
		}
		/* 6 bai viet hot nhat */
		function get_congnghe_news(){
			$kn = $this->connect();
			$lenh = "SELECT idbv, tenbv, idcm, thumb, linkbv, mota, ngaydang FROM tblbaiviet where idcm = 1 ORDER BY idbv DESC LIMIT 6";
			$kq = mysql_query($lenh,$kn);
			$kiemtra = mysql_num_rows($kq);
			mysql_close();
			if($kiemtra>0){
				return $kq;
			}
		}
		function get_danhgia_news(){
			$kn = $this->connect();
			$lenh = "SELECT idbv, tenbv, idcm, thumb, linkbv, mota, ngaydang FROM tblbaiviet where idcm = 3 ORDER BY idbv DESC LIMIT 6";
			$kq = mysql_query($lenh,$kn);
			$kiemtra = mysql_num_rows($kq);
			mysql_close();
			if($kiemtra>0){
				return $kq;
			}
		}
		/* Lay toan bo admin*/
		function get_all_user(){
			$kn = $this->connect();
			$lenh = "SELECT * FROM `tbluser`";
			$kq = mysql_query($lenh);
			return $kq;
		}
		/* Thong tin chi tiet 1 admin */
		function get_one_user($iduser){
			$kn = $this->connect();
			$lenh = "SELECT * FROM `tbluser` where iduser=$iduser";
			$kq = mysql_query($lenh);
			return $kq;
		}
		function get_one_user_2($tk, $mk){
			$kn = $this->connect();
			$lenh = "SELECT * FROM `tbluser` where tendn='$tk' and matkhau = '".md5($mk)."'";
			$kq = mysql_query($lenh);
			return $kq;
		}
		function get_iduser($tk, $mk){
			$kn = $this->connect();
			$lenh = "SELECT iduser FROM `tbluser` where tendn='$tk' and matkhau = '".md5($mk)."'";
			$kq = mysql_query($lenh);
			return $kq;
		}
		function put_user($tendn,$tennd,$diachi,$sdt,$gmail,$facebook,$quyen,$ngaysinh,$gioitinh,$thumbus,$slogan,$linkuser,$admin)
		{
			$kn = $this->connect();
			$matkhau = md5("12345");
			$lenh = "INSERT INTO tbluser(iduser, tendn, matkhau, tennd, diachi, sdt, gmail, facebook, quyen, ngaysinh, gioitinh, thumbus, slogan, linkuser, admin) VALUES (NULL,'$tendn','$matkhau','$tennd','$diachi','$sdt','$gmail','$facebook',$quyen,'$ngaysinh','$gioitinh','$thumbus','$slogan','$linkuser','$admin')";
			$kq = mysql_query($lenh);
			return true;
		}
		function get_all_chuyen_muc(){
			$kn = $this->connect();
			$lenh = "SELECT * from tblcm";
			$kq = mysql_query($lenh);
			return $kq;
		}
		function get_once_chuyen_muc($idcm){
			$kn = $this->connect();
			$lenh = "SELECT * from tblcm where idcm = '$idcm'";
			$kq = mysql_query($lenh);
			return $kq;
		}
		function delete_chuyen_muc($idcm){
			$kn = $this->connect();
			$lenh = "Delete from tblcm where idcm = '$idcm'";
			$kq = mysql_query($lenh);
			
			return $kq;
		}
		function update_one_user($iduser,$tendn,$tennd,$diachi,$sdt,$gmail,$facebook,$quyen,$ngaysinh,$thumbus,$slogan,$linkuser){
			$kn = $this->connect();
			$lenh = "
					UPDATE tbluser
					SET
						tendn='$tendn',
						tennd='$tennd',
						diachi='$diachi',
						sdt='$sdt',
						gmail='$gmail',
						facebook='$facebook',
						quyen=b'$quyen',
						ngaysinh='$ngaysinh',
						thumbus='$thumbus',
						slogan='$slogan',
						linkuser='$linkuser'
						WHERE iduser = $iduser
			";
			if(mysql_query($lenh,$kn)==true) return true;
			else return false;
			}
		/* Hien ra het bai viet trong CSDl */
		function get_all_content(){
			$kn = $this->connect();
			$lenh = "SELECT * FROM `tblbaiviet` ORDER BY `idbv` DESC";
			$kq = mysql_query($lenh);
			return $kq;
			}
		/* Them mot bai viet moi */ /* Chua kiem duyet */
		function put_content($idbv,$tenbv,$idcm,$noidung,$thumb,$luotxem,$hienthi,$linkbv,$tieude,$tukhoa,$mota,$ngaydang,$iduser,$tinnoibac){
			$kn = $this->connect();
			$lenh = "INSERT INTO tblbaiviet (idbv, tenbv, idcm, noidung, thumb, luotxem, hienthi, linkbv, tieude, tukhoa, mota, ngaydang, iduser,tinnoibac) VALUES ('$idbv', '$tenbv', '$idcm', '$noidung', '$thumb', '$luotxem', b'$hienthi', '$linkbv', '$tieude', '$tukhoa', '$mota', '$ngaydang', '$iduser',b'$tinnoibac')";
			if(mysql_query($lenh,$kn)==true) return true;
			else return false;
		}
		/* Chinh sua bvai viet */ /* Chua kiem duyet */
		function rewrite_content($idbv,$tenbv,$idcm,$noidung,$thumb,$luotxem,$hienthi,$linkbv,$tieude,$tukhoa,$mota,$tinnoibac){
			$kn = $this->connect();
			$query = "
					UPDATE tblbaiviet
					SET
						tenbv='$tenbv',
						idcm='$idcm',
						noidung='$noidung',
						thumb='$thumb',
						luotxem='$luotxem',
						hienthi=b'$hienthi',
						linkbv='$linkbv',
						tieude='$tieude',
						tukhoa='$tukhoa',
						mota= '$mota',
						tinnoibac=b'$tinnoibac'
					WHERE
						tblbaiviet.idbv = $idbv
					";
			if(mysql_query($query,$kn)) return true;
			else
				return false;
		}
		/* Xoa bai viet */ /* Chua kiem duyet */
		function delete_content($idbv){
			$kn = $this->connect();
			$lenh = "
					DELETE FROM tblbaiviet WHERE tblbaiviet.idbv = $idbv
					";
			$kq = mysql_query($lenh,$kn);
		}
		/* Lay id bài viet cao nhat */
		function get_max_idbv(){
			$kn = $this->connect();
			$lenh = "select Max(idbv) from tblbaiviet";
			$kq =  mysql_query($lenh,$kn);
			$row = mysql_fetch_array($kq);
			return $row[0];
		}
		/* Chuan doan bai viet an hay hien */
		function get_hide_show_content($idbv){
			$kn = $this->connect();
			$lenh = "Select hienthi FROM tblbaiviet WHERE idbv = $idbv";
			$kq = mysql_query($lenh,$kn);
			$row = mysql_fetch_array($kq);
			return $row[0];
		}
		/* An hien bai viet */
		function hide_show_content($idbv){
			$kn = $this->connect();
			$lenh="";
			if($this->get_hide_show_content($idbv)==1)
				$lenh = "UPDATE tblbaiviet SET hienthi = b'0' WHERE tblbaiviet.idbv = $idbv";
			else
				$lenh = "UPDATE tblbaiviet SET hienthi = b'1' WHERE tblbaiviet.idbv = $idbv";
			if(mysql_query($lenh,$kn)) return true;
			else
				return false;
		}
		/* Lay du lieu mot bai viet cu the */
		function get_one_content($idbv){
			$kn = $this->connect();
			$lenh = "SELECT * FROM tblbaiviet WHERE idbv = $idbv";
			$kq = mysql_query($lenh,$kn);
			$row = mysql_fetch_array($kq);
			return $row;
		}
		/* Lay 5 bai viet noi bac - Hien thi trang chu */
		function get_five_news(){
			$kn = $this->connect();
			$lenh = "
                SELECT idbv,tenbv,bv.idcm,thumb,linkbv,ngaydang, tencm
                FROM tblbaiviet bv, tblcm cm
                WHERE 
                	bv.hienthi = 1
                	and tinnoibac = 1 
                	AND bv.idcm = cm.idcm
                ORDER BY idbv DESC
                LIMIT 0,5
            ";
			$kq = mysql_query($lenh,$kn);
			return $kq;
		}
		function get_sukien_news(){
			$kn = $this->connect();
			$lenh = "
                SELECT idbv,tenbv,idcm,thumb,linkbv,ngaydang,mota
                FROM tblbaiviet
                WHERE hienthi = 1
                and idcm = 2
                ORDER BY idbv DESC
                LIMIT 0,5
            ";
			$kq = mysql_query($lenh,$kn);
			return $kq;
		}
      function get_content_short($idcm){
          $kn = $this->connect();
          $lenh ="
              SELECT idbv,tenbv,thumb,linkbv,mota,ngaydang
              FROM tblbaiviet
              WHERE hienthi = 1 and idcm = $idcm
              ORDER BY idbv DESC
          ";
          return mysql_query($lenh,$kn);
      }
		function get_full_content($idbv){
			$kn = $this->connect();
            $lenh ="
                SELECT idbv,idcm,tenbv,thumb,linkbv,mota,noidung,ngaydang,luotxem
                FROM tblbaiviet
                WHERE hienthi = 1 and idbv = $idbv
            ";
			mysql_close();
            return mysql_query($lenh,$kn);
		}
		/* Lấy tên chuyên mục, link chuyên mục */
		function get_chuyen_muc_name($idcm){
			$kn = $this->connect();
            $lenh ="
                SELECT tencm, linkcm
                FROM tblcm
                WHERE idcm = $idcm
            ";
			mysql_close();
            return mysql_query($lenh,$kn);
		}
		/* Tăng lượt xem của bài viết */
		function put_views($idbv,$luotxem){
			$kn = $this->connect();
            $lenh ="
                Update tblbaiviet
								SET
										luotxem = $luotxem
                WHERE idbv = $idbv
            ";
      mysql_query($lenh,$kn);
		}
		function get_all_chu_de(){
			$kn = $this->connect();
			$lenh = "Select * from tblcm";
			return mysql_query($lenh);
		}
		/* Thông tin người dùng admin của một bài viết */
		function get_info_author($idbv){
			$kn = $this->connect();
			$lenh = "
						SELECT DISTINCT tennd, thumbus, slogan,facebook,tbluser.iduser,linkuser
						FROM tblbaiviet, tbluser
						WHERE
						tbluser.iduser = (SELECT `iduser` from tblbaiviet WHERE idbv = $idbv)
			";
			return mysql_query($lenh,$kn);
		}
		/* Lấy thông tin cơ bản của người dùng admin // hiển thị ngoài bài viết */
		function get_author($iduser){
			$kn = $this->connect();
			$lenh = "
					SELECT tennd, facebook,thumbus,slogan FROM tbluser WHERE quyen=1 AND iduser = $iduser
			";
			return mysql_query($lenh,$kn);
		}
		function get_author_2($iduser){
			$kn = $this->connect();
			$lenh = "
					SELECT tennd, thumbus FROM tbluser WHERE quyen=1 AND tendn = '$iduser'
			";
			return mysql_query($lenh,$kn);
		}
		/* Lấy thông tin của các người dùng admin */
		function get_content_author($iduser){
			$kn = $this->connect();
			$lenh ="
					SELECT idbv,tenbv,idcm,thumb,linkbv,mota,ngaydang
					FROM tblbaiviet
					WHERE hienthi=1 AND iduser = $iduser
					ORDER BY idbv DESC
			";
			return mysql_query($lenh,$kn);
		}
		/* Lấy ra những bài viết thuộc chuyên mục cụ thể // Bài viết cùng chuyên mục */
		function get_content_of_ategories($idcm,$from, $sotin,$idbv){
			$kn = $this->connect();
			$lenh ="
					SELECT idbv,tenbv,idcm,thumb,linkbv,ngaydang
					FROM tblbaiviet
					WHERE hienthi=1 AND idcm = $idcm AND idbv not in (select idbv from tblbaiviet WHERE idbv = $idbv)
					ORDER BY idbv DESC
					Limit $from, $sotin
			";
			return mysql_query($lenh,$kn);
		}
		/* Lấy tin xem nhiều trong 7 ngày gần nhất - 1 tuần */
		function get_content_of_week($today,$week){
			$kn = $this->connect();
			$lenh = "
					Select idbv,tenbv,idcm,thumb,linkbv
					From tblbaiviet
					WHERE ngaydang <= '$today' and ngaydang >= '$week'
					ORDER by luotxem DESC
					Limit 0,6
			";
			return mysql_query($lenh,$kn);
		}
		function get_search($tukhoa){
			$kn = $this->connect();
			$lenh = "
					(SELECT * FROM tblbaiviet WHERE tenbv like '%$tukhoa%') UNION (SELECT * FROM tblbaiviet WHERE noidung like '%$tukhoa%') UNION (SELECT * FROM tblbaiviet WHERE tukhoa like '%$tukhoa%')
			";
			return mysql_query($lenh,$kn);
		}
	}
?>
