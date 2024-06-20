<?php
function smarty_function_img($params, $template) {
	$webpBrowserSupport = stripos($_SERVER['HTTP_ACCEPT'], 'image/webp');
	$output = '';
  $file = explode('.', $params['name']);
  if(isset($file)) {
		if($webpBrowserSupport) echo '/assets/webp/'.$file[0].'.webp';
		else echo '/assets/images/'.$file[0].'.'.$file[1];
  }
}
