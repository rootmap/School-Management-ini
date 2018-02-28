<?php
class uploadImage
{
	
	function getExtension($str) 
	{
        $i = strrpos($str, ".");
        if (!$i) 
		{
            return "";
        }
        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }

	
	function upload_image($width, $height, $destination,$img_name,$pre) {
		$fileex=$this->getExtension($_FILES[$img_name]['name']);
			list($w, $h) = getimagesize($_FILES[$img_name]['tmp_name']);
			$ret_name=$pre.'.'.$fileex;
			$path = $destination . '/' . $ret_name;
			$imgString = file_get_contents($_FILES[$img_name]['tmp_name']);
			@$image = imagecreatefromstring($imgString);
			
			if($width>$w)
			{
				$width=$w;	
			}
			
			if($height>$h)
			{
				$height=$h;	
			}
			
			
			
			$tmp = imagecreatetruecolor($width, $height);
	
			imagealphablending($tmp, false);
			imagesavealpha($tmp, true);
			$transparent = imagecolorallocatealpha($tmp, 255, 255, 255, 127);
			imagefilledrectangle($tmp, 0, 0, $width, $height, $transparent);
			
			imagecopyresized($tmp, $image, 0, 0, 0, 0, $width, $height, $w, $h);
	
			switch ($_FILES[$img_name]['type']) {
				case 'image/jpeg':
					imagejpeg($tmp, $path, 100);
					break;
				case 'image/png':
					imagepng($tmp, $path, 0);
					break;
				case 'image/gif':
					imagegif($tmp, $path);
					break;
				default:
					exit;
					break;
			}
			return $ret_name;
			imagedestroy($image);
			imagedestroy($tmp);
    }	
}
?>