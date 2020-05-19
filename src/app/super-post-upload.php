<?php

$uploadsDir = __DIR__ . DIRECTORY_SEPARATOR . 'uploads';
$targetFilename = $uploadsDir . DIRECTORY_SEPARATOR . 'my-image.png';
$relativeFilename = substr($targetFilename, strlen(__DIR__ . DIRECTORY_SEPARATOR));

if (array_key_exists('uploadFile', $_FILES)) {
	$uploadInfo = $_FILES['uploadFile'];
}

switch ($uploadInfo['error']) {
	case UPLOAD_ERR_OK: 
		mime_content_type ($uploadInfo['tmp_name' ]);
		move_uploaded_file($uploadInfo['tmp_name'], $targetFilename);
		break;
	case UPLOAD_ERR_INI_SIZE:
		echo printf('Failed to upload [%s] : the file is too big.', $uploadInfo['name']);
		break;
	case UPLOAD_ERR_NO_FILE:
		echo 'No file was uploaded';
		break;
	default:
		echo sprintf('Failed to upload [%s] : error code [%d].', $uploadInfo['name'],
		$uploadInfo['error']);
		break;
}

?>

<form action="./super-post-upload.php" method="post"
	enctype="multipart/form-data">

	<input type="file" name="uploadFile">
	<input type="submit" value="Upload">
</form>

<?php

if (file_exists($targetFilename)) {
	echo sprintf('<img src="%s" style="max-width: 500px; height: auto;" alt="my uploaded image">',
	$relativeFilename);
}

?>