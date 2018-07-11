<?php 

$images = scandir("imagens");

$data = array();

foreach ($images as $img) {
	if(!in_array($img, array(".",".."))){

		$filename = "images".DIRECTORY_SEPARATOR.$img;

		$filename = str_replace("\\", "/", $filename);

		$info = pathinfo($filename);

		$info["size"] = filesize($filename);

		$info["modified"] = date("d/n/Y H:i:s");
		$info["url"] = "http://localhost/curso/dir/".$filename;

		array_push($data, $info);
	}
}

echo json_encode($data);

 ?>