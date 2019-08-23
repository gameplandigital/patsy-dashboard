<?php  
	include("session.php");
	include("db_connect.php");
	$user_id = $_GET['user_id'];
	include('conn.php');


if(isset($_GET['doc2']))
	{
		$id = $_GET['doc2'];
		$stat = $db->prepare("SELECT * FROM rfc_apply WHRE doc2=?");
		$stat->bindParam(1, $doc2);
		$stat->execute();
		$data = $stat->fetch();

		$file = 'media/'.$data['doc2'];

		if(file_exists($file))
		{
			header('Content-Description: File Transfer');
			header('Content-Type: application/octet-stream');
			header('Content-Disposition: attachment; filename='.basename($file));
			header('Content-Transfer-Encoding: binary');
			header('Expires: 0');
			header('Cache-Control: must-revalidate');
			header('Pragma: public');
			header('Content-Length: ' . filesize($file));
			readfile($file);
			exit;
		}
	}

?>