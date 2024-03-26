<?php


function img_thumb($id) {

if ( has_post_thumbnail($id) ) {
	$image_url = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'thumbnail');
  $img_url = $image_url['0'];
}
else {
	$img_url = "https://via.placeholder.com/1620x1080.png";
}

 return $img_url;
	
}


////////


?>