<?php 
	$_SESSION['trang_chi_tiet_gio_hang']="co";
	$id=$_GET['id'];
	$sql="select * from san_pham where id='$id'";
	$tam=$conn->query($sql);
	$data=$tam->fetch();
	$link_anh="hinh_anh/san_pham/".$data['hinh_anh'];
	echo "<table>";
		echo "<tr>";
			echo "<td width='250px' align='center' >";
				echo "<img src='$link_anh' width='150px' >";
			echo "</td>";
			echo "<td valign='top' >";
				echo "<a href='#'>";
					echo $data['ten'];
				echo "</a>";
				echo "<br>";
				echo "<br>";
				$gia=$data['gia'];
				$gia=number_format($gia,0,",",".");
				echo $gia;
				echo "<br>";
				echo "<br>";
				echo "<form>";
					echo "<input type='hidden' name='thamso' value='gio_hang' > ";
					echo "<input type='hidden' name='id' value='".$_GET['id']."' > ";
					echo "<input type='number' name='so_luong' min='0' value='1'  style='width:50px' > ";
					echo "cho số lượng > 0";
					echo "<input type='submit' value='Thêm vào giỏ' style='margin-left:15px' > ";
				echo "</form>"; 
			echo "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td colspan='2' >";
				echo "<br>";
				echo "<br>";
				echo $data['noi_dung'];
			echo "</td>";
		echo "</tr>";
	echo "</table>";
?>