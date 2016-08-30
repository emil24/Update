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
		$up = mysql_query("UPDATE home SET
			title = '$title',
			des = '$desc'
			WHERE id = 1");
		header("Location:".$_SERVER['HTTP_REFERER']);
	}else{
		$query = mysql_query("SELECT * FROM home");
		$array = mysql_fetch_array($query);
		echo '
			<center><h1>HOME - UPDATE</h1></center>
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