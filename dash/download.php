<?php  
include("db_connect.php");
if(isset($_GET['doc2']))
	{
		$id = $_GET['doc2'];
		$stat = $db->prepare("SELECT * FROM rfc_apply WHERE doc2=?");
		$stat->bindParam(1, $id);
		$stat->execute();
		$data = $stat->fetch();

		$file = 'media/'.$data['doc2'];

		if(file_exists($file))
		{
			header('Content-Description: File Transfer');
			header('Content-Type: application/octet-stream');
			header('Content-Disposition: attachment; filename='.basename($file));
			header('Expires: 0');
			header('Cache-Control: must-revalidate');
			header('Pragma: public');
			header('Content-Length: ' . filesize($file));
			readfile($file);
			exit;
		}
	}

?>