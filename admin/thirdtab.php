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
	</style>
</head>
<body>
<?php
	if($_POST){
		$title = $_POST['title'];
		$desc = $_POST['desc'];

		$head1 = $_POST['head1'];
		$des1 = $_POST['des1'];
		$icon1 = $_POST['icon1'];

		$head2 = $_POST['head2'];
		$des2 = $_POST['des2'];
		$icon2 = $_POST['icon2'];

		$head3 = $_POST['head3'];
		$des3 = $_POST['des3'];
		$icon3 = $_POST['icon3'];

		$up = mysql_query("UPDATE thirdtab SET
			title = '$title',
			des = '$desc',
			head1 = '$head1',
			des1 = '$des1',
			icon1 = '$icon1',
			head2 = '$head2',
			des2 = '$des2',
			icon2 = '$icon2',
			head3 = '$head3',
			des3 = '$des3',
			icon3 = '$icon3'
			WHERE id = 1");
		header("Location:".$_SERVER['HTTP_REFERER']);
	}else{
		$query = mysql_query("SELECT * FROM thirdtab");
		$array = mysql_fetch_array($query);
		echo '
			<center><h1>FIRST TAB - UPDATE</h1></center>
			<form action="" method="POST">
				<table cellpadding="10" cellspacing="0" border="0">
					<tr>
						<td>Title: </td>
						<td><input type="text" value="'.$array['title'].'" name="title"></td>
					</tr>
					<tr>
						<td>Desc: </td>
						<td><input type="text" value="'.$array['des'].'" name="desc"></td>
					</tr>

					<tr><td colspan="2"><hr></td></tr>

					<tr>
						<td>Head1: </td>
						<td><input type="text" value="'.$array['head1'].'" name="head1"></td>
					</tr>
					<tr>
						<td>Desc1: </td>
						<td><input type="text" value="'.$array['des1'].'" name="des1"></td>
					</tr>
					<tr>
						<td>Icon1: </td>
						<td><input type="text" value="'.$array['icon1'].'" name="icon1"></td>
					</tr>

					<tr><td colspan="2"><hr></td></tr>

					<tr>
						<td>Head2: </td>
						<td><input type="text" value="'.$array['head2'].'" name="head2"></td>
					</tr>
					<tr>
						<td>Desc2: </td>
						<td><input type="text" value="'.$array['des2'].'" name="des2"></td>
					</tr>
					<tr>
						<td>Icon2: </td>
						<td><input type="text" value="'.$array['icon2'].'" name="icon2"></td>
					</tr>

					<tr><td colspan="2"><hr></td></tr>

					<tr>
						<td>Head3: </td>
						<td><input type="text" value="'.$array['head3'].'" name="head3"></td>
					</tr>
					<tr>
						<td>Desc3: </td>
						<td><input type="text" value="'.$array['des3'].'" name="des3"></td>
					</tr>
					<tr>
						<td>Icon3: </td>
						<td><input type="text" value="'.$array['icon2'].'" name="icon3"></td>
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