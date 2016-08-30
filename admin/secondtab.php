<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update</title>
	<style>
		table{
			width: 500px;
			margin: 0 auto;
		}
		table tr td input{
			padding: 10px 5px;
			width: 97%;
		}
		table tr td button{
			padding: 10px 5px;
			width: 100px;
			float: right;
		}
		.img{
			width: 100px;
			box-shadow: 1px 1px 3px #999;
		}
		img.uploadedimg {
		    width: 100px;
		    padding: 1px;
		    border: 1px solid #ccc;
		    margin: 5px 0;
		}
	</style>
</head>
<body>
<?php
	$query = mysql_query("SELECT * FROM secondtab");
	$array = mysql_fetch_array($query);
	if($_POST){
		$title = $_POST['title'];
		$desc = $_POST['desc'];
		$text = $_POST['text'];
		$yer = '../'.$array['img'];

		if(isset($_FILES["sekil"])){
			$uzantilar = array('png', 'gif', 'jpg', "JPEG", "PNG", "GIF", "JPG");
			$uzanti = @end(explode(".", $_FILES["sekil"]["name"]));
			if(in_array($uzanti, $uzantilar)){
				if(is_uploaded_file($_FILES["sekil"]["tmp_name"])){
					$yer = '../img/features/'.rand(0,999999).'.'.$uzanti;
					if(move_uploaded_file($_FILES["sekil"]["tmp_name"], $yer)){
						echo '<img src="'.$yer.'" alt="" class="uploadedimg" />';
					}else{
						echo '<font color="red">Yükləndi amma köçürülmədi.</font>';
					}
				}else{
					echo '<font color="red">Şəkil yüklənə bilmədi.</font>';
				}
			}else{
				echo '<font color="red">Səhv şəkil uzantısı.</font>';
			}
		}

		$yer = substr($yer, 3);
		$up = mysql_query("UPDATE secondtab SET
			title = '$title',
			des = '$desc',
			text = '$text',
			img = '$yer'
			WHERE id = 1");
		header("Location:".$_SERVER['HTTP_REFERER']);
	}else{
		echo '
			<center><h1>FIRST TAB - UPDATE</h1></center>
			<form action="" method="POST" enctype="multipart/form-data">
				<table cellpadding="10" cellspacing="0" border="0">
					<tr>
						<td>Title: </td>
						<td><input type="text" value="'.$array['title'].'" name="title"></td>
					</tr>
					<tr>
						<td>Desc: </td>
						<td><input type="text" value="'.$array['des'].'" name="desc"></td>
					</tr>
					<tr>
						<td>Text: </td>
						<td><input type="text" value="'.$array['text'].'" name="text"></td>
					</tr>
					<tr>
						<td>Img: </td>
						<td><input type="file" name="sekil">';
						if($array['img']){
							echo '<img class="img" src="../'.$array['img'].'" alt="">';
						}else{
							echo '<font color="red">Şəkil yüklənməyib</font>';
						}
						echo '</td>
					</tr>
					<tr>
						<td colspan="2"><button>Update</button></td>
					</tr>
				</table>
			</form>
		';
	}
?>
</body>
</html>