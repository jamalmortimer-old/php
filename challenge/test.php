<!DOCTYPE html>
<html>
	<?php
	header('Content-Type: image/png');

		$body = imagecreatefrompng("/Magi-Large-Female-Base1.png");
		$body_width = imagex(body);
		$body_height = imagey(body);

		$eyes = imagecreatefrompng("./Large-Female-Base-Eyes1.png");
		$eye_width = imagesx($eyes);
		$eye_height = imagesy($eyes);
		
		$dest_x = 0;
		$dest_y = 0;
		
		imagecopymerge($body, $eyes, $dest_x, $dest_y, 0, 0, $eye_width, $eye_height, 100);

		imagepng(&body);
?>

</html>