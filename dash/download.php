<?php
	$file = './download/'.$_GET['file'];
   	$title=$_GET['file'];

    // header("Pragma: public");
    // header('Content-disposition: attachment; filename='.$title);
  
	header('Content-Description: File Transfer');
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename='.basename($file));
	header('Expires: 0');
	header('Cache-Control: must-revalidate');
	header('Pragma: public');
	header('Content-Length:'.basename($file));
	

	
    
    // header('Content-Transfer-Encoding: binary');
   
	// ob_clean();
    // flush();

    // $chunksize = 1 * (1024 * 1024); // how many bytes per chunk
    // if (filesize($file) > $chunksize) {
    //     $handle = fopen($file, 'rb');
    //     $buffer = '';

    //     while (!feof($handle)) {
    //         $buffer = fread($handle, $chunksize);
    //         echo $buffer;
    //         ob_flush();
    //         flush();
    //     }

    //     fclose($handle);
    // } else {
		readfile($file);

    //}
	?>